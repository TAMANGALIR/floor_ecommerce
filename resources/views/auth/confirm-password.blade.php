<x-guest-layout>
    <div class="min-h-screen flex items-center justify-center bg-gradient-to-br from-blue-50 to-gray-50 p-4 sm:p-6">
        <div class="w-full max-w-md bg-white rounded-xl shadow-lg overflow-hidden">
            <!-- Header Section -->
            <div class="bg-blue-600 py-5 px-6 text-center">
                <h2 class="text-2xl font-bold text-white">{{ __('Confirm Password') }}</h2>
                <p class="text-blue-100 mt-1">{{ __('Security Verification') }}</p>
            </div>

            <!-- Form Section -->
            <div class="p-6 sm:p-8">
                <div class="mb-5 text-sm text-gray-600">
                    {{ __('This is a secure area of the application. Please confirm your password before continuing.') }}
                </div>

                <form method="POST" action="{{ route('password.confirm') }}" class="space-y-5">
                    @csrf

                    <!-- Password Field -->
                    <div>
                        <x-input-label for="password" :value="__('Password')" class="text-gray-700 font-medium" />
                        <div class="relative mt-1">
                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                <svg class="h-5 w-5 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z" clip-rule="evenodd"/>
                                </svg>
                            </div>
                            <x-text-input id="password" class="block w-full pl-10" type="password"
                                        name="password" required autocomplete="current-password"
                                        placeholder="••••••••" />
                        </div>
                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                    </div>

                    <!-- Submit Button -->
                    <div class="flex justify-end">
                        <x-primary-button class="px-6 py-2.5 bg-blue-600 hover:bg-blue-700">
                            {{ __('Confirm') }}
                        </x-primary-button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-guest-layout>
