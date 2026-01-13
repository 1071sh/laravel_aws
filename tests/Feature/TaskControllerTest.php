<?php

use App\Models\Task;
use App\Models\User;

test('tasks index requires authentication', function () {
    $response = $this->get(route('tasks.index'));

    $response->assertRedirect(route('login'));
});

test('authenticated user can view their tasks', function () {
    $user = User::factory()->create();
    $task = Task::factory()->create(['user_id' => $user->id]);

    $response = $this->actingAs($user)->get(route('tasks.index'));

    $response->assertOk();
    $response->assertSee($task->title);
});

test('authenticated user can create a task', function () {
    $user = User::factory()->create();

    $response = $this->actingAs($user)->post(route('tasks.store'), [
        'title' => 'New Test Task',
        'description' => 'Test description',
    ]);

    $response->assertRedirect(route('tasks.index'));
    $this->assertDatabaseHas('tasks', [
        'user_id' => $user->id,
        'title' => 'New Test Task',
        'description' => 'Test description',
        'is_completed' => false,
    ]);
});

test('task title is required', function () {
    $user = User::factory()->create();

    $response = $this->actingAs($user)->post(route('tasks.store'), [
        'title' => '',
        'description' => 'Test description',
    ]);

    $response->assertSessionHasErrors('title');
});

test('task title cannot exceed 255 characters', function () {
    $user = User::factory()->create();

    $response = $this->actingAs($user)->post(route('tasks.store'), [
        'title' => str_repeat('a', 256),
        'description' => 'Test description',
    ]);

    $response->assertSessionHasErrors('title');
});

test('authenticated user can toggle task completion', function () {
    $user = User::factory()->create();
    $task = Task::factory()->create(['user_id' => $user->id, 'is_completed' => false]);

    $response = $this->actingAs($user)->put(route('tasks.update', $task));

    $response->assertRedirect(route('tasks.index'));
    $this->assertDatabaseHas('tasks', [
        'id' => $task->id,
        'is_completed' => true,
    ]);
});

test('user cannot update another users task', function () {
    $user1 = User::factory()->create();
    $user2 = User::factory()->create();
    $task = Task::factory()->create(['user_id' => $user1->id]);

    $response = $this->actingAs($user2)->put(route('tasks.update', $task));

    $response->assertForbidden();
});

test('authenticated user can delete their task', function () {
    $user = User::factory()->create();
    $task = Task::factory()->create(['user_id' => $user->id]);

    $response = $this->actingAs($user)->delete(route('tasks.destroy', $task));

    $response->assertRedirect(route('tasks.index'));
    $this->assertDatabaseMissing('tasks', ['id' => $task->id]);
});

test('user cannot delete another users task', function () {
    $user1 = User::factory()->create();
    $user2 = User::factory()->create();
    $task = Task::factory()->create(['user_id' => $user1->id]);

    $response = $this->actingAs($user2)->delete(route('tasks.destroy', $task));

    $response->assertForbidden();
    $this->assertDatabaseHas('tasks', ['id' => $task->id]);
});

test('tasks are ordered with incomplete tasks first then by newest', function () {
    $user = User::factory()->create();

    $completedOld = Task::factory()->create([
        'user_id' => $user->id,
        'title' => 'Completed Old',
        'is_completed' => true,
        'created_at' => now()->subDays(3),
    ]);

    $incompleteOld = Task::factory()->create([
        'user_id' => $user->id,
        'title' => 'Incomplete Old',
        'is_completed' => false,
        'created_at' => now()->subDays(2),
    ]);

    $incompleteNew = Task::factory()->create([
        'user_id' => $user->id,
        'title' => 'Incomplete New',
        'is_completed' => false,
        'created_at' => now()->subDay(),
    ]);

    $completedNew = Task::factory()->create([
        'user_id' => $user->id,
        'title' => 'Completed New',
        'is_completed' => true,
        'created_at' => now(),
    ]);

    $response = $this->actingAs($user)->get(route('tasks.index'));

    $content = $response->getContent();
    $incompleteNewPos = strpos($content, 'Incomplete New');
    $incompleteOldPos = strpos($content, 'Incomplete Old');
    $completedNewPos = strpos($content, 'Completed New');
    $completedOldPos = strpos($content, 'Completed Old');

    expect($incompleteNewPos)->toBeLessThan($incompleteOldPos);
    expect($incompleteOldPos)->toBeLessThan($completedNewPos);
    expect($completedNewPos)->toBeLessThan($completedOldPos);
});

test('user only sees their own tasks', function () {
    $user1 = User::factory()->create();
    $user2 = User::factory()->create();

    $task1 = Task::factory()->create(['user_id' => $user1->id, 'title' => 'User 1 Task']);
    $task2 = Task::factory()->create(['user_id' => $user2->id, 'title' => 'User 2 Task']);

    $response = $this->actingAs($user1)->get(route('tasks.index'));

    $response->assertSee('User 1 Task');
    $response->assertDontSee('User 2 Task');
});
