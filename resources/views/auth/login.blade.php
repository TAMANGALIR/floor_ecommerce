<x-guest-layout>
    <div class="min-h-screen flex flex-col items-center justify-center bg-gradient-to-br from-red-50 to-gray-50 p-4">
        <!-- Sajilo Bazar Logo with App Icon Style -->
        <div class="mb-8 flex flex-col items-center">
            <div class="bg-white p-3 rounded-2xl shadow-lg mb-3">
                <img src="https://image.winudf.com/v2/image1/Y29tLnNhamlsby5iYXphcl9pY29uXzE2NjQwNDUxODhfMDQ4/icon.png?w=184&fakeurl=1"
                     alt="Sajilo Bazar Logo"
                     class="h-16 w-16 rounded-xl">
            </div>
            <h1 class="text-2xl font-bold text-blue-600">Sajilo Bazar</h1>
        </div>

        <!-- Login Form Card -->
        <div class="w-full max-w-md bg-white rounded-xl shadow-lg overflow-hidden">
            <!-- Form Header -->
            <div class="bg-blue-600 py-3 px-6">
                <h2 class="text-xl font-bold text-white text-center">Welcome Back!</h2>
            </div>

            <!-- Form Content -->
            <div class="p-8">
                <x-auth-session-status class="mb-4" :status="session('status')" />

                <form method="POST" action="{{ route('login') }}" class="space-y-5">
                    @csrf

                    <!-- Email Input -->
                    <div>
                        <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email Address</label>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                <svg class="h-5 w-5 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z"/>
                                    <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z"/>
                                </svg>
                            </div>
                            <input id="email" name="email" type="email" required autofocus
                                   class="block w-full pl-10 pr-3 py-2 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500"
                                   placeholder="your@email.com">
                        </div>
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>

                    <!-- Password Input -->
                    <div>
                        <label for="password" class="block text-sm font-medium text-gray-700 mb-1">Password</label>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                <svg class="h-5 w-5 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z" clip-rule="evenodd"/>
                                </svg>
                            </div>
                            <input id="password" name="password" type="password" required
                                   class="block w-full pl-10 pr-3 py-2 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500"
                                   placeholder="••••••••">
                        </div>
                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                    </div>

                    <!-- Remember & Forgot Password -->
                    <div class="flex items-center justify-between">
                        <div class="flex items-center">
                            <input id="remember_me" name="remember" type="checkbox"
                                   class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300 rounded">
                            <label for="remember_me" class="ml-2 block text-sm text-gray-700">Remember me</label>
                        </div>

                        @if (Route::has('password.request'))
                            <a href="{{ route('password.request') }}" class="text-sm font-medium text-blue-600 hover:text-blue-500">
                                Forgot password?
                            </a>
                        @endif
                    </div>

                    <!-- Login Button -->
                    <div>
                        <button type="submit"
                                class="w-full flex justify-center py-3 px-4 border border-transparent rounded-lg shadow-sm text-sm font-medium text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 transition-colors duration-200">
                            Login to Your Account
                        </button>
                    </div>
                </form>

                <!-- Registration Prompt -->
                <div class="mt-6 text-center text-sm text-gray-600">
                    <p>New to Sajilo Bazar?
                        <a href="{{ route('register') }}" class="font-medium text-blue-600 hover:text-blue-500">
                            Create an account
                        </a>
                    </p>
                </div>

                <!-- Social Login Divider -->
                <div class="relative my-6">
                    <div class="absolute inset-0 flex items-center">
                        <div class="w-full border-t border-gray-300"></div>
                    </div>
                    <div class="relative flex justify-center">
                        <span class="px-2 bg-white text-sm text-gray-500">Or continue with</span>
                    </div>
                </div>

                <!-- Google Login -->
                <div class="flex justify-center">
    <a href="{{ route('google.redirect') }}"
       class="p-2 rounded-lg border border-gray-200 hover:bg-gray-50 transition-colors duration-200 flex items-center gap-2">
        <img src="https://developers.google.com/static/identity/images/branding_guideline_sample_lt_sq_lg.svg"
             alt="Google Login"
             class="h-20 w-20">

    </a>
</div>
            </div>
        </div>
    </div>
</x-guest-layout>
