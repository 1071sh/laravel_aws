<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Quick Login (開発用) -->
        @if (config('app.env') === 'local')
            <div class="mb-4 p-4 bg-yellow-50 border border-yellow-200 rounded-lg">
                <x-input-label for="quick_login" value="クイックログイン（開発用）" class="mb-2" />
                <select id="quick_login" class="block p-2 w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
                    <option value="">-- ユーザーを選択 --</option>
                    <option value="user1@example.com">ダミーユーザー1 (user1@example.com)</option>
                    <option value="user2@example.com">ダミーユーザー2 (user2@example.com)</option>
                    <option value="user3@example.com">ダミーユーザー3 (user3@example.com)</option>
                </select>
            </div>
        @endif

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                <span class="ms-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-end mt-4">
            @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif

            <x-primary-button class="ms-3">
                {{ __('Log in') }}
            </x-primary-button>
        </div>
    </form>

    @if (config('app.env') === 'local')
        <script>
            document.getElementById('quick_login')?.addEventListener('change', function(e) {
                const email = e.target.value;
                if (email) {
                    document.getElementById('email').value = email;
                    document.getElementById('password').value = 'password';
                }
            });
        </script>
    @endif
</x-guest-layout>
