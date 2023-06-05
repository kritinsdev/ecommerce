<x-app-layout>
    <div class="w-[440px] mx-auto p-6 my-16 bg-white rounded-lg shadow-md">
        <form action="{{ route('register') }}" method="post">
            @csrf

<h2 class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl dark:text-white mb-4">
                Create an account
            </h2>

            <!-- Session Status -->
            <x-auth-session-status class="mb-4" :status="session('status')" />

            <div class="mb-6">
            <label for="name" class="text-sm font-medium text-gray-900">Your name</label>
                <x-input placeholder="Type your name" type="text" name="name" :value="old('name')" />
            </div>
            <div class="mb-6">
            <label for="email" class="text-sm font-medium text-gray-900">Your email</label>
                <x-input placeholder="Type your email" type="email" name="email" :value="old('email')" />
            </div>
            <div class="mb-6">
            <label for="password" class="text-sm font-medium text-gray-900">Your password</label>
                <x-input placeholder="••••••••" type="password" name="password" />
            </div>
            <div class="mb-6">
            <label for="password_confirmation" class="text-sm font-medium text-gray-900">Repeat password</label>
                <x-input placeholder="••••••••" type="password" name="password_confirmation" />
            </div>

            <button class="btn-primary bg-emerald-500 hover:bg-emerald-600 active:bg-emerald-700 w-full">
                Signup
            </button>

                        <p class="mt-6 text-sm font-light text-gray-500 dark:text-gray-400">
                Already have an account?
                <a href="{{ route('login') }}" class="font-medium text-sm text-blue-600 hover:underline">
                    Sign in with existing account
                </a>
            </p>
        </form>
    </div>

</x-app-layout>

