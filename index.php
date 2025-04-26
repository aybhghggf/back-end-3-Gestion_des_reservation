<?php 
require_once 'includes/functions.php';
$cours= getProduct();
?>

<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <title>Expert Led Courses</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&amp;display=swap" rel="stylesheet" />
    <style>
        body {
            font-family: 'Inter', sans-serif;
        }
    </style>
</head>

<body class="bg-white text-gray-900">
    <!-- NavBar-->
    <?php include_once 'includes/nav.php' ?>

    <main class="max-w-7xl mx-auto px-6">
        <section class="relative mt-10 md:mt-16 lg:mt-20 flex flex-col md:flex-row items-center md:items-start">
            <div class="md:w-1/2 z-10">
                <h1 class="text-3xl sm:text-4xl md:text-5xl font-extrabold text-gray-900 leading-tight">
                    Expand Your
                    <br />
                    Knowledge with
                    <br />
                    Expert-Led Courses
                </h1>
                <p class="mt-4 text-gray-700 max-w-md text-base sm:text-lg">
                    Discover thousands of courses taught by industry experts. Learn at your
                    own pace and achieve your goals.
                </p>
                <div class="mt-6 flex space-x-4">
                    <a class="bg-indigo-900 text-white px-5 py-3 rounded-md text-sm font-semibold hover:bg-indigo-800"
                        href="sign_in.php" id="getStarted" onclick="">
                        Get Started
                    </a>

                    <a class="border border-indigo-900 text-indigo-900 px-5 py-3 rounded-md text-sm font-medium hover:bg-indigo-50"
                        href="cours.php">
                        Explore Courses
                    </a>
                </div>
                <div class="mt-10 flex space-x-10">
                    <div>
                        <p class="text-indigo-900 font-bold text-lg sm:text-xl md:text-2xl">
                            5K+
                        </p>
                        <p class="text-gray-600 text-xs sm:text-sm">
                            Courses
                        </p>
                    </div>
                    <div>
                        <p class="text-indigo-900 font-bold text-lg sm:text-xl md:text-2xl">
                            10K+
                        </p>
                        <p class="text-gray-600 text-xs sm:text-sm">
                            Students
                        </p>
                    </div>
                    <div>
                        <p class="text-indigo-900 font-bold text-lg sm:text-xl md:text-2xl">
                            4.8
                        </p>
                        <p class="text-gray-600 text-xs sm:text-sm">
                            Rating
                        </p>
                    </div>
                </div>
            </div>
            <div class="md:w-1/2 mt-10 md:mt-0">
                <img alt="Classroom with students working on computers and medical images on screens"
                    class="w-full h-auto object-cover rounded-md" decoding="async" height="350" loading="lazy"
                    src="https://storage.googleapis.com/a1aa/image/3f7f9c94-4f80-45a9-f6c9-df76f4fcd9ef.jpg"
                    width="600" />
            </div>
        </section>
        <section class="text-center mt-20 mb-16 max-w-3xl mx-auto px-4">
            <h2 class="text-xl sm:text-2xl font-bold text-gray-900">
                Browse Top Categories
            </h2>
            <p class="mt-3 text-gray-600 text-sm sm:text-base">
                Discover the perfect course from our wide range of categories designed to
                help you achieve your goals.
            </p>
        </section>
    </main>

    <section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pt-10">
        <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-6 gap-6">
            <div class="bg-white rounded-xl p-6 flex flex-col items-center space-y-3">
                <div class="bg-[#D6E4FF] w-12 h-12 rounded-full flex items-center justify-center">
                    <i class="fas fa-code text-[#1E40AF]">
                    </i>
                </div>
                <div class="text-center">
                    <p class="font-semibold text-sm">
                        Programming
                    </p>
                    <p class="text-xs text-gray-500">
                        248 Courses
                    </p>
                </div>
            </div>
            <div class="bg-white rounded-xl p-6 flex flex-col items-center space-y-3">
                <div class="bg-[#D9F7BE] w-12 h-12 rounded-full flex items-center justify-center">
                    <i class="fas fa-chart-line text-[#237804]">
                    </i>
                </div>
                <div class="text-center">
                    <p class="font-semibold text-sm">
                        Business
                    </p>
                    <p class="text-xs text-gray-500">
                        183 Courses
                    </p>
                </div>
            </div>
            <div class="bg-white rounded-xl p-6 flex flex-col items-center space-y-3">
                <div class="bg-[#F3E8FF] w-12 h-12 rounded-full flex items-center justify-center">
                    <i class="fas fa-palette text-[#8B5CF6]">
                    </i>
                </div>
                <div class="text-center">
                    <p class="font-semibold text-sm">
                        Design
                    </p>
                    <p class="text-xs text-gray-500">
                        165 Courses
                    </p>
                </div>
            </div>
            <div class="bg-white rounded-xl p-6 flex flex-col items-center space-y-3">
                <div class="bg-[#FFE7E5] w-12 h-12 rounded-full flex items-center justify-center">
                    <i class="fas fa-camera text-[#DC2626]">
                    </i>
                </div>
                <div class="text-center">
                    <p class="font-semibold text-sm">
                        Photography
                    </p>
                    <p class="text-xs text-gray-500">
                        142 Courses
                    </p>
                </div>
            </div>
            <div class="bg-white rounded-xl p-6 flex flex-col items-center space-y-3">
                <div class="bg-[#FEF3C7] w-12 h-12 rounded-full flex items-center justify-center">
                    <i class="fas fa-language text-[#D97706]">
                    </i>
                </div>
                <div class="text-center">
                    <p class="font-semibold text-sm">
                        Languages
                    </p>
                    <p class="text-xs text-gray-500">
                        129 Courses
                    </p>
                </div>
            </div>
            <div class="bg-white rounded-xl p-6 flex flex-col items-center space-y-3">
                <div class="bg-[#DBEAFE] w-12 h-12 rounded-full flex items-center justify-center">
                    <i class="fas fa-notes-medical text-[#4338CA]">
                    </i>
                </div>
                <div class="text-center">
                    <p class="font-semibold text-sm">
                        Health
                    </p>
                    <p class="text-xs text-gray-500">
                        97 Courses
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mt-16" id="courses">
        <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between mb-6">
            <div>
                <h2 class="text-2xl font-extrabold text-gray-900">
                    Featured Courses
                </h2>
                <p class="text-gray-600 text-sm mt-1 max-w-md">
                    Explore our most popular and highly-rated courses
                </p>
            </div>
            <div class="flex space-x-3 mt-4 sm:mt-0">
            </div>
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
            <?php foreach($cours as $cour) : ?>
            <!-- Card -->
            <div class="bg-white rounded-lg shadow-sm overflow-hidden relative">
                <img alt="<?php echo htmlspecialchars($cour['titre'], ENT_QUOTES, 'UTF-8'); ?>" 
                     class="w-full h-48 object-cover" 
                     src="images/<?php echo htmlspecialchars($cour['_image'], ENT_QUOTES, 'UTF-8'); ?>" 
                     width="600" 
                     height="300" />
                <div class="absolute top-3 right-3 bg-[#1E40AF] text-white text-xs font-semibold rounded-full px-3 py-1">
                    Available
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-semibold text-gray-900">
                        <?php echo htmlspecialchars($cour['titre'], ENT_QUOTES, 'UTF-8'); ?>
                    </h3>
                    <p class="mt-2 text-gray-700 text-sm">
                        <?php echo htmlspecialchars($cour['_description'], ENT_QUOTES, 'UTF-8'); ?>
                    </p>
                    <div class="mt-4">
                        <a class="text-indigo-900 text-sm font-semibold hover:underline"
                           href="cours-details.php?id=<?php echo urlencode($cour['id']); ?>">View Details</a>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </section>


   <footer>
    <?php include_once 'includes/footer.php' ?>
   </footer> 
</body>

</html>
