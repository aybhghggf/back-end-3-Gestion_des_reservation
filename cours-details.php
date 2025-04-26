<?php 
if(isset($_GET['id'])){
    $id=$_GET['id'];
    require_once 'includes/functions.php';
    $cour= getProductById($id);
}
$date = date('Y-m-d H:i:s');
$dateCreation = date('Y-m-d H:i:s', strtotime($cour['date_creation']));
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Course Details</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet" />
    <style>
        body {
            font-family: 'Inter', sans-serif;
        }
    </style>
</head>

<body class="bg-gray-50 text-gray-900">

    <!-- Navigation Bar -->
    <?php include_once 'includes/nav.php'; ?>

    <!-- Main Content -->
    <main class="max-w-7xl mx-auto px-6 py-12">
        <div class="bg-white rounded-lg shadow-lg p-8">

            <!-- Image and Title -->
            <div class="flex flex-col md:flex-row gap-8">

                <!-- Course Image -->
                <div class="md:w-1/2">
                    <img src="images/<?php echo $cour['_image'] ?>" alt="Course Image" class="rounded-lg w-full h-auto object-cover">
                </div>

                <!-- Course Details -->
                <div class="md:w-1/2 flex flex-col justify-between">
                    <div>
                        <h1 class="text-3xl font-extrabold mb-4 text-gray-800"><?php echo $cour['titre'] ?>s</h1>
                        <p class="text-gray-600 mb-6 leading-relaxed">
                            <?php echo $cour['_description'] ?>
                        </p>

                        <ul class="space-y-3 text-gray-700">
                            <li><strong>Type:</strong><?php echo $cour['_type'] ?></li>
                            <li><strong>Prix:</strong> <?php echo $cour['prix'] ?></li>
                            <li><strong>Date:</strong><?php echo $cour['_date'] ?></li>
                            <li><strong>Heure:</strong><?php echo $cour['heure'] ?> </li>
                            <li><strong>Date de Création:</strong> </li>
                        </ul>
                    </div>

                    <!-- Réserver Button -->
                    <div class="mt-8">
                        <button class="w-full bg-indigo-900 hover:bg-indigo-800 text-white font-semibold py-3 rounded-lg text-lg transition duration-300">
                            <a href="reserver.php">Reserver Maintenant</a>
                        </button>
                    </div>
                </div>

            </div>

        </div>
    </main>

    <!-- Footer -->
    <?php include_once 'includes/footer.php';
        include_once 'includes/float.php';
    ?>

</body>

</html>