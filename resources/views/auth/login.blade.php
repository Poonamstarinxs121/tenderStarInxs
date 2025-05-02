
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BMS - Login</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50">
    <div class="min-h-screen flex items-center justify-center">
        <div class="max-w-6xl w-full flex bg-white rounded-lg shadow-lg overflow-hidden">
            <!-- Left side with illustration -->
            <div class="w-1/2 p-12 bg-gray-50">
                <h1 class="text-3xl font-bold mb-6">BID MANAGEMENT SYSTEM</h1>
                <div class="flex items-center justify-center">
                    <img src="{{ asset('images/bms-illustration.svg') }}" alt="BMS" class="max-w-md">
                </div>
            </div>
            
            <!-- Right side with login form -->
            <div class="w-1/2 p-12">
                <div class="mb-8">
                    <img src="{{ asset('images/logo.png') }}" alt="Logo" class="h-8">
                </div>
                <h2 class="text-2xl font-semibold mb-6">Sign in</h2>
                
                <form method="POST" action="{{ route('login') }}" class="space-y-6">
                    @csrf
                    <div>
                        <label for="user_id" class="block text-sm font-medium text-gray-700">User Id</label>
                        <input type="text" name="user_id" id="user_id" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
                    </div>

                    <div>
                        <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                        <input type="password" name="password" id="password" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
                    </div>

                    @if ($errors->any())
                    <div class="text-red-500 text-sm">
                        {{ $errors->first() }}
                    </div>
                    @endif

                    <button type="submit" class="w-full bg-blue-600 text-white rounded-md py-2 px-4 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">
                        Sign in
                    </button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
