<?php
$hideNav = true;
include __DIR__ . '/../../layout.php';
include __DIR__ . '/../../config-database.php'
?>

<section class="w-full min-h-screen flex items-center justify-center bg-neutral-100 p-4">
    <div class="p-6 gap-5 w-full max-w-md bg-white shadow-lg rounded-lg lg:max-w-lg">
        <h1 class="text-center font-bold text-2xl md:text-3xl text-neutral-800 font-[arial]">Register</h1>
        <p class="text-center text-neutral-700 text-sm md:text-base">Login to continue using our platform</p>

        <ul class="mt-4 mb-4 flex flex-col items-center gap-4 w-full">
            <div class="flex flex-col gap-3 w-full">

                <label class="flex flex-col w-full">
                    <span class="text-sm font-semibold text-neutral-700 mb-1">Full Name</span>
                    <input type="text" placeholder="Enter your name"
                        class="p-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 w-full">
                </label>

                <label class="flex flex-col w-full">
                    <span class="text-sm font-semibold text-neutral-700 mb-1">Email</span>
                    <input type="email" placeholder="Enter your email"
                        class="p-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 w-full">
                </label>

                <label class="flex flex-col w-full">
                    <span class="text-sm font-semibold text-neutral-700 mb-1">Password</span>
                    <input type="password" placeholder="Enter your password"
                        class="p-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 w-full">
                </label>

                <button class="mt-3 bg-blue-500 text-white p-3 rounded-lg font-semibold hover:bg-blue-700 transition w-full">
                    Register
                </button>
                <a href="src/page/sign_in.php" class="text-center text-blue-600">
                    Already have an account? Sign In
                </a>
                
            </div>

            <button class="p-3 w-full rounded-lg font-semibold border border-blue-500 text-blue-500 text-center cursor-pointer hover:bg-blue-500 hover:text-white transition">
                Continue with Google
            </button>
        </ul>
    </div>
</section>
