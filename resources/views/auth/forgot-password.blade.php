<x-guest-layout>
    <div class="min-h-screen flex items-center justify-center bg-gradient-to-br from-gray-50 to-gray-100 p-4 sm:p-6">
        <div class="w-full max-w-md bg-white rounded-xl shadow-lg overflow-hidden">
            <!-- Header Section -->
            <div class="bg-blue-600 py-5 px-6 text-center">
                <h2 class="text-2xl font-bold text-white">{{ __('Reset Password') }}</h2>
                <p class="text-blue-100 mt-1">{{ __('Get back to your account') }}</p>
            </div>

            <!-- Form Section -->
            <div class="p-6 sm:p-8">
                <div class="mb-5 text-sm text-gray-600">
                    {{ __('Forgot your password? No problem. Just enter your email address and we\'ll send you a link to reset it.') }}
                </div>

                <!-- Session Status -->
                <x-auth-session-status class="mb-5" :status="session('status')" />

                <form method="POST" action="{{ route('password.email') }}" class="space-y-5">
                    @csrf

                    <!-- Email Field -->
                    <div>
                        <x-input-label for="email" :value="__('Email Address')" class="text-gray-700 font-medium" />
                        <div class="relative mt-1">
                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                <svg class="h-5 w-5 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z"/>
                                    <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z"/>
                                </svg>
                            </div>
                            <x-text-input id="email" class="block w-full pl-10" type="email" name="email"
                                          :value="old('email')" required autofocus placeholder="your@email.com" />
                        </div>
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>

                    <!-- Submit Button -->
                    <div class="flex items-center justify-end">
                        <x-primary-button class="px-6 py-2.5 bg-blue-600 hover:bg-blue-700">
                            {{ __('Email Password Reset Link') }}
                        </x-primary-button>
                    </div>
                </form>

                <!-- Back to Login Link -->
                <div class="mt-6 text-center text-sm text-gray-600">
                    <a href="{{ route('login') }}" class="font-medium text-blue-600 hover:text-blue-500 hover:underline">
                        {{ __('Back to login') }}
                    </a>
                </div>
            </div>
        </div>
    </div>
</x-guest-layout>
