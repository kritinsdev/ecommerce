<x-app-layout>
    <div class="w-[440px] mx-auto p-6 my-16 bg-white rounded-lg shadow-md">
        <form method="POST" action="{{ route('login') }}">
            <h2 class="text-xl font-bold leading-tight tracking-tight mb-4 text-gray-900 md:text-2xl dark:text-white">
                Sign in to your account
            </h2>

            <!-- Session Status -->
            <x-auth-session-status class="mb-4" :status="session('status')" />

            @csrf
            <div class="mb-6">
                <label for="email" class="text-sm font-medium text-gray-900">Your email</label>
                <x-input class="mt-2" type="email" name="email" placeholder="Type your email" :value="old('email')" />
            </div>
            <div class="mb-6">
                <label for="email" class="text-sm font-medium text-gray-900">Password</label>
                <x-input class="mt-2" type="password" name="password" placeholder="••••••••" :value="old('password')" />
            </div>
            <div class="flex justify-between items-center mb-5">
                <div class="flex items-center">
                    <input id="loginRememberMe" type="checkbox" class="mr-3 rounded border-gray-300 text-gray-500 focus:ring-gray-500" />
                    <label for="loginRememberMe" class="font-light text-gray-500">Remember me</label>
                </div>

                @if (Route::has('password.request'))
                <a href="{{ route('password.request') }}" class="font-medium text-sm text-blue-600 hover:underline">
                    Forgot Password?
                </a>
                @endif
            </div>
            <button class="btn-primary w-full">
                Login
            </button>

            <p class="mt-6 text-sm font-light text-gray-500 dark:text-gray-400">
                Already have an account?
                <a href="{{ route('register') }}" class="font-medium text-sm text-blue-600 hover:underline">
                    Create new account here
                </a>
            </p>
        </form>
    </div>

</x-app-layout>

