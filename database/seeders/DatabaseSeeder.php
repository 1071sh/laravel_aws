<?php

namespace Database\Seeders;

use App\Models\Task;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Create 3 simple users
        $user1 = User::create([
            'name' => 'ダミーユーザー1',
            'email' => 'user1@example.com',
            'password' => Hash::make('password'),
        ]);

        $user2 = User::create([
            'name' => 'ダミーユーザー2',
            'email' => 'user2@example.com',
            'password' => Hash::make('password'),
        ]);

        $user3 = User::create([
            'name' => 'ダミーユーザー3',
            'email' => 'user3@example.com',
            'password' => Hash::make('password'),
        ]);

        // Create tasks for user 1
        Task::create([
            'user_id' => $user1->id,
            'title' => 'タスク1',
            'description' => 'これは最初のタスクの説明です。',
            'is_completed' => false,
        ]);

        Task::create([
            'user_id' => $user1->id,
            'title' => 'タスク2',
            'description' => '2つ目のタスクです。',
            'is_completed' => false,
        ]);

        Task::create([
            'user_id' => $user1->id,
            'title' => 'タスク3',
            'description' => null,
            'is_completed' => true,
        ]);

        Task::create([
            'user_id' => $user1->id,
            'title' => 'タスク4',
            'description' => '4つ目のタスクです。',
            'is_completed' => false,
        ]);

        Task::create([
            'user_id' => $user1->id,
            'title' => 'タスク5',
            'description' => '完了済みのタスクです。',
            'is_completed' => true,
        ]);

        // Create tasks for user 2
        Task::create([
            'user_id' => $user2->id,
            'title' => '買い物に行く',
            'description' => 'スーパーで食材を買う。',
            'is_completed' => false,
        ]);

        Task::create([
            'user_id' => $user2->id,
            'title' => '本を読む',
            'description' => null,
            'is_completed' => false,
        ]);

        Task::create([
            'user_id' => $user2->id,
            'title' => '運動する',
            'description' => '30分ジョギングをする。',
            'is_completed' => true,
        ]);

        // Create tasks for user 3
        Task::create([
            'user_id' => $user3->id,
            'title' => 'プロジェクト資料作成',
            'description' => '来週のプレゼン用資料を準備する。',
            'is_completed' => false,
        ]);

        Task::create([
            'user_id' => $user3->id,
            'title' => 'メール返信',
            'description' => null,
            'is_completed' => false,
        ]);

        Task::create([
            'user_id' => $user3->id,
            'title' => '会議の予定確認',
            'description' => '明日の会議時間を確認する。',
            'is_completed' => true,
        ]);

        Task::create([
            'user_id' => $user3->id,
            'title' => '掃除',
            'description' => 'リビングと寝室を掃除する。',
            'is_completed' => false,
        ]);
    }
}
