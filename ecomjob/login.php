<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="loading.css">
    <script src="jquery-2.1.4.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Login with your Account</title>
</head>
<body>
    <div class="header">
        <div class="flex items-center justify-center py-12 px-3">
            <div class="max-w-md w-full space-y-8 p-10 bg-white rounded-xl z-10">
                <div class="text-center">
                    <h2 class="mt-6 text-3xl font-bold text-gray-900">
                        Login
                    </h2>
                </div>
                <form class="space-y-6" action="auth/login_auth.php" method="POST">
                    <input type="hidden" name="remember" value="true">
                    <div class="relative">
                        <div class="absolute right-0 mt-4">
                        </div>
                        <label class="text-sm font-bold text-gray-700 tracking-wide">Email</label>
                        <input class=" w-full text-black text-base py-2 border-b border-gray-300 focus:outline-none focus:border-indigo-500" type="" placeholder="mail@gmail.com" name="email">
                    </div>
                    <div class="mt-8 content-center">
                        <label class="text-sm font-bold text-gray-900 tracking-wide">
                            Password
                        </label>
                        <input class="w-full content-center text-black text-base py-2 border-b border-gray-300 focus:outline-none focus:border-indigo-500" type="" placeholder="Enter your password" name="password">
                    </div>
                    <div class="flex items-center justify-between">
                            <div class="flex items-center">
                                <input id="remember_me" name="remember_me" type="checkbox" class="h-4 w-4 bg-indigo-500 focus:ring-indigo-400 border-gray-300 rounded">
                                <label for="remember_me" class="ml-2 block text-sm text-gray-900">
                                    Remember me
                                </label>
                            </div>
                        <div class="text-sm">
                            <a href="#" class="font-medium text-indigo-500 hover:text-indigo-500">
                                        Forgot your password?
                            </a>
                        </div>
                    </div>
                    <div>
                        <button name="login_button" type="submit" class="w-full flex justify-center bg-indigo-500 text-gray-100 p-4  rounded-full tracking-wide
                                        font-semibold  focus:outline-none focus:shadow-outline hover:bg-indigo-600 shadow-lg cursor-pointer transition ease-in duration-300">
                            Sign in
                        </button>
                    </div>
                    <p class="flex flex-col items-center justify-center mt-10 text-center text-md text-gray-500">
                        <span>Don't have an account?</span>
                        <a href="form.php" class="text-indigo-500 hover:text-indigo-500no-underline hover:underline cursor-pointer transition ease-in duration-300">Sign up</a>
                    </p>
                </form>
            </div>
        </div>

        <div>
            <svg class="waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
            viewBox="0 24 150 28" preserveAspectRatio="none" shape-rendering="auto">
            <defs>
            <path id="gentle-wave" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z" />
            </defs>
            <g class="parallax">
            <use xlink:href="#gentle-wave" x="48" y="0" fill="rgba(255,255,255,0.7)" />
            <use xlink:href="#gentle-wave" x="48" y="3" fill="rgba(255,255,255,0.5)" />
            <use xlink:href="#gentle-wave" x="48" y="5" fill="rgba(255,255,255,0.3)" />
            <use xlink:href="#gentle-wave" x="48" y="7" fill="#fff" />
            </g>
            </svg>
        </div>
    </div>
</body>
</html>