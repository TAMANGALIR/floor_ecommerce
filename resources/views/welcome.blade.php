<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sajilo Bazar - Login</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

    <style>
        body {
            font-family: 'Instrument Sans', sans-serif;
            background-color: #f8fafc;
        }
        .login-container {
            max-width: 400px;
            width: 100%;
        }
        .logo {
            height: 80px;
            margin-bottom: 1.5rem;
        }
    </style>
</head>
<body class="min-h-screen flex items-center justify-center p-4">
    <div class="login-container bg-white rounded-xl shadow-md overflow-hidden">
        <!-- Header -->
        <div class="bg-red-600 py-4 px-6 text-center">
            <h2 class="text-xl font-bold text-white">Welcome to Sajilo Bazar</h2>
        </div>

        <!-- Login Form -->
        <div class="p-6">
            <div class="flex justify-center mb-6">
                <img src="https://image.winudf.com/v2/image1/Y29tLnNhamlsby5iYXphcl9pY29uXzE2NjQwNDUxODhfMDQ4/icon.png?w=184&fakeurl=1"
                     alt="Sajilo Bazar Logo" class="logo">
            </div>

            <form method="POST" action="{{ route('login') }}" class="space-y-4">
                @csrf

                <!-- Email/Phone Input -->
                <div>
                    <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email or Phone</label>
                    <input id="email" name="email" type="text" required autofocus
                           class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-red-500"
                           placeholder="your@email.com or 98XXXXXXXX">
                </div>

                <!-- Password Input -->
                <div>
                    <label for="password" class="block text-sm font-medium text-gray-700 mb-1">Password</label>
                    <input id="password" name="password" type="password" required
                           class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-red-500"
                           placeholder="••••••••">
                </div>

                <!-- Remember & Forgot Password -->
                <div class="flex items-center justify-between">
                    <div class="flex items-center">
                        <input id="remember_me" name="remember" type="checkbox"
                               class="h-4 w-4 text-red-600 focus:ring-red-500 border-gray-300 rounded">
                        <label for="remember_me" class="ml-2 text-sm text-gray-700">Remember me</label>
                    </div>

                    @if (Route::has('password.request'))
                        <a href="{{ route('password.request') }}" class="text-sm text-red-600 hover:text-red-700 hover:underline">
                            Forgot password?
                        </a>
                    @endif
                </div>

                <!-- Login Button -->
                <div>
                    <button type="submit"
                            class="w-full py-2 px-4 bg-red-600 hover:bg-red-700 text-white font-medium rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-red-500">
                        Login
                    </button>
                </div>
            </form>

            <!-- Registration Link -->
            <div class="mt-6 text-center text-sm text-gray-600">
                <p>Don't have an account?
                    <a href="{{ route('register') }}" class="font-medium text-red-600 hover:text-red-700 hover:underline">
                        Register here
                    </a>
                </p>
            </div>
        </div>
    </div>
</body>
</html>
