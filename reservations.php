<?php
require_once 'includes/functions.php';
getSession();
getMsgReservation();
if (!isset($_SESSION['user'])) {
    header('location:index.php?msg=noaccount');
    exit;
} else {
    $id_user = $_SESSION['id'];
    $Resrvation = getReservation($id_user);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reservation</title>
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
    <?php include_once 'includes/nav.php'; ?>

    <!-- Main Content -->
    <main class="max-w-7xl mx-auto px-6 py-12">
        <h1 class="text-2xl font-extrabold text-gray-800 mb-6">Your Reservations</h1>
        <div class="container mx-auto px-4 py-8 max-w-6xl">
            <h1 class="text-3xl font-bold text-gray-800 mb-6">Your reservation will be confirmed soon!</h1>
            <!-- Section des filtres ou recherche -->


            <!-- Display Reservations -->
            <?php if ($Resrvation) { ?>
                <div class="space-y-4">
                    <?php foreach ($Resrvation as $Reserv): ?>
                        <!-- New Reservation Card -->
                        <div class="bg-white rounded-lg shadow-md overflow-hidden">
                            <div class="md:flex">
                                <!-- Course Image -->
                                <div class="md:w-1/4 bg-gray-200 md:h-auto h-48">
                                    <img src="images/<?php echo $Reserv['_image'] ?>" alt="Image du cours" class="w-full h-full object-cover">
                                </div>

                                <!-- Course Information -->
                                <div class="p-6 md:w-3/4">
                                    <div class="flex flex-col md:flex-row md:justify-between">
                                        <div>
                                            <h2 class="text-xl font-bold text-gray-800 mb-2"><?php echo htmlspecialchars($Reserv['titre'], ENT_QUOTES, 'UTF-8'); ?></h2>


                                            <div class="flex items-center mb-4">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-500 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                                </svg>
                                                <span class="text-gray-700"><?php echo htmlspecialchars($Reserv['_date'], ENT_QUOTES, 'UTF-8'); ?>, <?php echo htmlspecialchars($Reserv['heure'], ENT_QUOTES, 'UTF-8'); ?></span>
                                            </div>

                                            <div class="flex items-center mb-4">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-500 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                                </svg>
                                                <span class="text-gray-700">Morroco</span>
                                            </div>
                                        </div>

                                        <div class="mt-4 md:mt-0">
                                            <span class="inline-block bg-green-100 text-green-800 text-sm font-medium px-3 py-1 rounded-full mb-4"><?php echo $Reserv['_status'] ?></span>
                                            <p class="text-gray-700 font-medium">Réservé le: <?php echo $Reserv['date_creation'] ?> </p>
                                        </div>
                                    </div>

                                    <div class="mt-6 flex flex-wrap gap-2">
                                        <a href="cours-details.php?id=<?php echo urlencode($Reserv['id_cours']); ?>" class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-md transition duration-200">Voir détails</a>
                                        <button class="bg-red-600 hover:bg-red-700 text-white px-4 py-2 rounded-md transition duration-200">
                                            <a href="Anuller.php?id_reservation=<?php echo $Reserv['id_reservation']; ?>" onclick="return confirm('هل أنت متأكد أنك تريد إلغاء الحجز؟')">Annuler</a>
                                        </button>


                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            <?php } else { ?>
                <!-- Message si aucune réservation -->
                <div class="bg-white rounded-lg shadow-md p-8 text-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-16 w-16 text-gray-400 mx-auto mb-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                    </svg>
                    <h3 class="text-xl font-medium text-gray-800 mb-2">Aucune réservation trouvée</h3>
                    <p class="text-gray-600 mb-6">Vous n'avez pas encore réservé de cours.</p>
                    <a href="cours.php" class="inline-block bg-blue-600 hover:bg-blue-700 text-white px-6 py-2 rounded-md transition duration-200">Explorer les cours disponibles</a>
                </div>
            <?php } ?>
        </div>
    </main>
        <?php include_once 'includes/float.php'; ?>
    <footer>
        <?php include_once 'includes/footer.php'; ?>
    </footer>
</body>

</html>