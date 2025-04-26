<?php
require_once 'includes/functions.php';
getSession();
?>
<style>
       .font-pacifico {
      font-family: "Pacifico", cursive;
    }
</style>
<script src="https://cdn.tailwindcss.com">
    </script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&amp;display=swap" rel="stylesheet" />
<header class="w-full bg-white shadow-sm">
    <nav aria-label="Primary Navigation" class="max-w-7xl mx-auto flex items-center justify-between px-6 py-4">
        <a aria-label="Logo" class="font-pacifico text-[24px] text-[#4c51bf] mb-4 select-none " href="index.php">
            Ecourse
        </a>
        <ul class="hidden md:flex space-x-8 text-gray-900 text-sm font-medium">
            <li>
                <a class="hover:text-indigo-900" href="index.php">
                    Home
                </a>
            </li>
            <li>
                <a class="hover:text-indigo-900" href="cours.php">
                    Courses
                </a>
            </li>
           
            <li>
                <a class="hover:text-indigo-900" href="#">
                    About Us
                </a>
            </li>
            <li>
                <a class="hover:text-indigo-900" href="#">
                    Contact
                </a>
            </li>
        </ul>
        <?php if (isset($_SESSION['user']) && $_SESSION['user'] == true) { ?>
            <div class="hidden md:flex items-center space-x-6 text-sm font-medium">
                <a href="logout.php" class="bg-red-600 text-white px-4 py-2 rounded-md text-sm font-semibold hover:bg-red-700 transition">
                    Logout
                </a>
            </div>

        <?php } else { ?>
            <div class="hidden md:flex items-center space-x-6 text-sm font-medium">
                <a class="text-gray-900 hover:text-indigo-900" href="login.php">
                    Login
                </a>
                <a class="bg-indigo-900 text-white px-4 py-2 rounded-md text-sm font-semibold hover:bg-indigo-800"
                    href="sign_in.php">
                    Sign Up
                </a>
            </div>

        <?php } ?>
    </nav>
</header>