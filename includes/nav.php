<?php
require_once 'includes/functions.php';
getSession();
?>
<style>
    .font-pacifico {
        font-family: "Pacifico", cursive;
    }
</style>
<script src="https://cdn.tailwindcss.com"></script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&amp;display=swap" rel="stylesheet" />

<header class="w-full bg-white shadow-sm">
    <nav aria-label="Primary Navigation" class="max-w-7xl mx-auto flex items-center justify-between px-6 py-4">
        <!-- Logo -->
        <a aria-label="Logo" class="font-pacifico text-[24px] text-[#4c51bf] mb-4 select-none" href="index.php">
            Ecourse
        </a>

        <!-- Hamburger Menu (Mobile) -->
        <button id="menu-toggle" class="md:hidden text-gray-900 focus:outline-none">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
            </svg>
        </button>

        <!-- Navigation Links -->
        <ul id="menu" class="hidden md:flex space-x-8 text-gray-900 text-sm font-medium">
            <li>
                <a class="hover:text-indigo-900" href="index.php">Home</a>
            </li>
            <li>
                <a class="hover:text-indigo-900" href="cours.php">Courses</a>
            </li>
            <li>
                <a class="hover:text-indigo-900" href="reservations.php">Reservations</a>
            </li>
            <li>
                <a class="hover:text-indigo-900" href="about.php">About Us</a>
            </li>
        </ul>

        <!-- User Actions -->
        <?php if (isset($_SESSION['user']) && $_SESSION['user'] == true) { ?>
            <div class="hidden md:flex items-center space-x-6 text-sm font-medium">
                <a href="logout.php" class="bg-red-600 text-white px-4 py-2 rounded-md text-sm font-semibold hover:bg-red-700 transition">
                    Logout
                </a>
            </div>
        <?php } else { ?>
            <div class="hidden md:flex items-center space-x-6 text-sm font-medium">
                <a class="text-gray-900 hover:text-indigo-900" href="login.php">Login</a>
                <a class="bg-indigo-900 text-white px-4 py-2 rounded-md text-sm font-semibold hover:bg-indigo-800" href="sign_in.php">Sign Up</a>
            </div>
        <?php } ?>
    </nav>

    <!-- Mobile Menu -->
    <div id="mobile-menu" class="hidden md:hidden bg-white shadow-md">
        <ul class="space-y-4 text-gray-900 text-sm font-medium px-6 py-4">
            <li>
                <a class="hover:text-indigo-900" href="index.php">Home</a>
            </li>
            <li>
                <a class="hover:text-indigo-900" href="cours.php">Courses</a>
            </li>
            <li>
                <a class="hover:text-indigo-900" href="reservations.php">Reservations</a>
            </li>
            <li>
                <a class="hover:text-indigo-900" href="about.php">About Us</a>
            </li>
            <?php if (isset($_SESSION['user']) && $_SESSION['user'] == true) { ?>
                <li>
                    <a href="logout.php" class="bg-red-600 text-white px-4 py-2 rounded-md text-sm font-semibold hover:bg-red-700 transition">
                        Logout
                    </a>
                </li>
            <?php } else { ?>
                <li>
                    <a class="text-gray-900 hover:text-indigo-900" href="login.php">Login</a>
                </li>
                <li>
                    <a class="bg-indigo-900 text-white px-4 py-2 rounded-md text-sm font-semibold hover:bg-indigo-800" href="sign_in.php">Sign Up</a>
                </li>
            <?php } ?>
        </ul>
    </div>
</header>

<script>
    const menuToggle = document.getElementById('menu-toggle');
    const mobileMenu = document.getElementById('mobile-menu');

    menuToggle.addEventListener('click', () => {
        mobileMenu.classList.toggle('hidden');
    });
</script>