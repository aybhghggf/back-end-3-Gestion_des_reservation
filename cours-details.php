<?php
session_start();
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    require_once 'includes/functions.php';
    $cour = getProductById($id);
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
                    <img src="images/<?php echo htmlspecialchars($cour['_image'], ENT_QUOTES, 'UTF-8'); ?>" alt="Course Image" class="rounded-lg w-full h-auto object-cover">
                </div>

                <!-- Course Details -->
                <div class="md:w-1/2 flex flex-col justify-between">
                    <div>
                        <h1 class="text-3xl font-extrabold mb-4 text-gray-800"><?php echo htmlspecialchars($cour['titre'], ENT_QUOTES, 'UTF-8'); ?></h1>
                        <p class="text-gray-600 mb-6 leading-relaxed">
                            <?php echo htmlspecialchars($cour['_description'], ENT_QUOTES, 'UTF-8'); ?>
                        </p>

                        <ul class="space-y-3 text-gray-700">
                            <li><strong>Type:</strong> <?php echo htmlspecialchars($cour['_type'], ENT_QUOTES, 'UTF-8'); ?></li>
                            <li><strong>Prix:</strong> <?php echo htmlspecialchars($cour['prix'], ENT_QUOTES, 'UTF-8') . ' DHS'; ?></li>
                            <li><strong>Date:</strong> <?php echo htmlspecialchars($cour['_date'], ENT_QUOTES, 'UTF-8'); ?></li>
                            <li><strong>Heure:</strong> <?php echo htmlspecialchars($cour['heure'], ENT_QUOTES, 'UTF-8'); ?></li>
                        </ul>
                    </div>

                    <!-- Réserver Button -->
                    <div class="mt-8">
                        <button onclick="openModal(<?php echo htmlspecialchars($cour['id'], ENT_QUOTES, 'UTF-8'); ?>)" class="w-full bg-indigo-900 hover:bg-indigo-800 text-white font-semibold py-3 rounded-lg text-lg transition duration-300">
                            Réserver Maintenant
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!-- Modal (Hidden by default) -->
    <div id="reservationModal" class="fixed inset-0 bg-black bg-opacity-50 flex justify-center items-center hidden z-50">
    <div class="bg-white p-8 rounded-lg shadow-xl w-96 max-w-md mx-auto">
        <h2 class="text-2xl font-bold mb-4 text-gray-800">Confirmer votre réservation</h2>
        <p class="mb-6 text-gray-600">Voulez-vous réserver ce cours?</p>
        <form action="reserver.php?id=<?php echo htmlspecialchars($cour['id'], ENT_QUOTES, 'UTF-8'); ?>" method="POST">
            <input type="hidden" id="idCoursInput" name="id_cours" value="">
            <div class="flex justify-end space-x-4">
                <button type="button" onclick="closeModal()" class="bg-gray-200 hover:bg-gray-300 text-gray-800 font-medium px-5 py-2 rounded-md transition duration-200">Annuler</button>
                <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white font-medium px-5 py-2 rounded-md transition duration-200">Confirmer</button>
            </div>
        </form>
    </div>
</div>

    <!-- Footer -->
    <?php include_once 'includes/footer.php'; ?>
    <?php include_once 'includes/float.php'; ?>

    <script>
        function openModal(id) {
            const modal = document.getElementById('reservationModal');
            modal.classList.remove('hidden'); // Show the modal
            document.getElementById('idCoursInput').value = id; // Set the course ID
        }

        function closeModal() {
            const modal = document.getElementById('reservationModal');
            modal.classList.add('hidden'); // Hide the modal
        }
    </script>
</body>
</html>