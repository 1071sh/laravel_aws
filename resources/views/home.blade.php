<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{ config('app.name', 'Laravel') }}</title>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100">
            <!-- Header -->
            <nav class="bg-white shadow-sm">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-4">
                    <div class="flex justify-between items-center">
                        <a href="{{ route('home') }}" class="text-2xl font-bold text-indigo-600">
                            {{ config('app.name', 'Laravel') }}
                        </a>
                        <div class="space-x-4">
                            @auth
                                <a href="{{ route('tasks.index') }}" class="text-gray-700 hover:text-indigo-600 font-medium transition">タスク一覧</a>
                                <form method="POST" action="{{ route('logout') }}" class="inline">
                                    @csrf
                                    <button type="submit" class="text-gray-700 hover:text-indigo-600 font-medium transition">ログアウト</button>
                                </form>
                            @else
                                <a href="{{ route('login') }}" class="text-gray-700 hover:text-indigo-600 font-medium transition">ログイン</a>
                                <a href="{{ route('register') }}" class="bg-indigo-600 hover:bg-indigo-700 text-white px-4 py-2 rounded-md font-medium transition">登録</a>
                            @endauth
                        </div>
                    </div>
                </div>
            </nav>

            <div class="py-12">
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <!-- Hero Section -->
                    <div class="mb-12 text-center">
                        <h2 class="text-4xl font-bold text-gray-900 mb-4">
                            シンプルで使いやすい<br>ToDoリスト管理
                        </h2>
                        <p class="text-lg text-gray-600 mb-8 max-w-2xl mx-auto">
                            タスクを簡単に追加・管理・完了できます。<br>
                            アカウントを作成して、今すぐタスク管理を始めましょう。
                        </p>

                        @guest
                            <div class="flex justify-center space-x-4">
                                <a href="{{ route('register') }}" class="bg-indigo-600 hover:bg-indigo-700 text-white px-8 py-3 rounded-lg font-semibold text-lg transition shadow-lg hover:shadow-xl">
                                    無料で始める
                                </a>
                                <a href="{{ route('login') }}" class="bg-white hover:bg-gray-50 text-indigo-600 border-2 border-indigo-600 px-8 py-3 rounded-lg font-semibold text-lg transition">
                                    ログイン
                                </a>
                            </div>
                        @else
                            <a href="{{ route('tasks.index') }}" class="inline-block bg-indigo-600 hover:bg-indigo-700 text-white px-8 py-3 rounded-lg font-semibold text-lg transition shadow-lg hover:shadow-xl">
                                タスク一覧へ
                            </a>
                        @endguest
                    </div>

                    <!-- Features -->
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-8">
                            <div class="text-indigo-600 mb-4">
                                <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 6 0 012-2h2a2 2 0 012 2"></path>
                                </svg>
                            </div>
                            <h3 class="text-xl font-semibold text-gray-900 mb-2">簡単なタスク追加</h3>
                            <p class="text-gray-600">シンプルなフォームでタスクをすぐに追加できます。</p>
                        </div>

                        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-8">
                            <div class="text-indigo-600 mb-4">
                                <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                            </div>
                            <h3 class="text-xl font-semibold text-gray-900 mb-2">完了チェック</h3>
                            <p class="text-gray-600">完了したタスクをワンクリックでチェックできます。</p>
                        </div>

                        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-8">
                            <div class="text-indigo-600 mb-4">
                                <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                                </svg>
                            </div>
                            <h3 class="text-xl font-semibold text-gray-900 mb-2">直感的な操作</h3>
                            <p class="text-gray-600">使いやすいインターフェースで快適にタスク管理ができます。</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
