<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 flex items-center justify-center h-screen">
    <div class="w-full max-w-md bg-white rounded-lg shadow-md p-6">
        <h2 class="text-2xl font-semibold text-center text-gray-700">Login</h2>
        <form method="POST" action="{{url('/login')}}" class="mt-4">
            @csrf
            <div class="mb-4">
                <label for="email" class="block text-sm font-medium text-gray-600">Email address</label>
                <input type="email" id="email" name="email" required
                    class="w-full px-4 py-2 mt-2 border rounded-lg focus:ring focus:ring-blue-300 focus:outline-none">
            </div>
            <div class="mb-4">
                <label for="password" class="block text-sm font-medium text-gray-600">Password</label>
                <input type="password" id="password" name="password" required
                    class="w-full px-4 py-2 mt-2 border rounded-lg focus:ring focus:ring-blue-300 focus:outline-none">
            </div>
            <button type="submit"
                class="w-full px-4 py-2 text-white bg-blue-500 rounded-lg hover:bg-blue-600">Login</button>
        </form>
        <p class="text-red-500 text-sm mt-2">{{session('error')}}</p>
        <p class="mt-4 text-sm text-center text-gray-600">Don't have an account? 
            <a href="{{url('/register')}}" class="text-blue-500 hover:underline">Register</a>
        </p>
    </div>
</body>
</html>
