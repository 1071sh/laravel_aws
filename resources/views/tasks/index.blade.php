<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('タスク管理') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <!-- Success Message -->
            @if (session('success'))
                <div class="mb-4 bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative">
                    {{ session('success') }}
                </div>
            @endif

            <!-- Add Task Form -->
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg mb-6">
                <div class="p-6 text-gray-900">
                    <h3 class="text-lg font-semibold mb-4">新しいタスクを追加</h3>

                    <form method="POST" action="{{ route('tasks.store') }}">
                        @csrf

                        <div class="mb-4">
                            <label for="title" class="block text-sm font-medium text-gray-700 mb-2">
                                タスク名 <span class="text-red-500">*</span>
                            </label>
                            <input
                                type="text"
                                name="title"
                                id="title"
                                value="{{ old('title') }}"
                                class="w-full p-2 rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500"
                                required
                            >
                            @error('title')
                                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <label for="description" class="block text-sm font-medium text-gray-700 mb-2">
                                説明
                            </label>
                            <textarea
                                name="description"
                                id="description"
                                rows="3"
                                class="w-full p-2 rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500"
                            >{{ old('description') }}</textarea>
                            @error('description')
                                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <button
                            type="submit"
                            class="bg-indigo-600 hover:bg-indigo-700 text-white font-semibold py-2 px-4 rounded-md transition"
                        >
                            タスクを追加
                        </button>
                    </form>
                </div>
            </div>

            <!-- Tasks List -->
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h3 class="text-lg font-semibold mb-4">タスク一覧</h3>

                    @if ($tasks->isEmpty())
                        <p class="text-gray-500">タスクがありません。上のフォームから新しいタスクを追加してください。</p>
                    @else
                        <div class="grid gap-4">
                            @foreach ($tasks as $task)
                                <div class="border border-gray-200 rounded-lg p-4 shadow-sm hover:shadow-md transition {{ $task->is_completed ? 'bg-gray-50 opacity-75' : 'bg-white' }}">
                                    <div class="flex items-start justify-between gap-4">
                                        <div class="flex items-start space-x-3 flex-1">
                                            <!-- Complete Checkbox -->
                                            <form method="POST" action="{{ route('tasks.update', $task) }}" class="pt-1">
                                                @csrf
                                                @method('PUT')
                                                <button
                                                    type="submit"
                                                    class="w-5 h-5 border-2 rounded {{ $task->is_completed ? 'bg-indigo-600 border-indigo-600' : 'border-gray-300 hover:border-indigo-500' }} flex items-center justify-center transition"
                                                >
                                                    @if ($task->is_completed)
                                                        <svg class="w-3 h-3 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path>
                                                        </svg>
                                                    @endif
                                                </button>
                                            </form>

                                            <!-- Task Details -->
                                            <div class="flex-1">
                                                @if ($task->description)
                                                    <details class="group">
                                                        <summary class="cursor-pointer list-none">
                                                            <span class="{{ $task->is_completed ? 'line-through text-gray-500' : 'text-gray-900' }} font-medium">
                                                                {{ $task->title }}
                                                            </span>
                                                            <span class="text-gray-400 text-sm ml-2 group-open:hidden">(クリックで説明を表示)</span>
                                                        </summary>
                                                        <div class="mt-2 pl-4 text-sm text-gray-600 border-l-2 border-gray-200">
                                                            {{ $task->description }}
                                                        </div>
                                                    </details>
                                                @else
                                                    <span class="{{ $task->is_completed ? 'line-through text-gray-500' : 'text-gray-900' }} font-medium">
                                                        {{ $task->title }}
                                                    </span>
                                                @endif

                                                <p class="text-xs text-gray-400 mt-1">
                                                    作成日: {{ $task->created_at->format('Y年m月d日 H:i') }}
                                                </p>
                                            </div>
                                        </div>

                                        <!-- Delete Button -->
                                        <form method="POST" action="{{ route('tasks.destroy', $task) }}" onsubmit="return confirm('このタスクを削除してもよろしいですか?');">
                                            @csrf
                                            @method('DELETE')
                                            <button
                                                type="submit"
                                                class="ml-4 text-red-600 hover:text-red-800 transition"
                                                title="削除"
                                            >
                                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
                                                </svg>
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
