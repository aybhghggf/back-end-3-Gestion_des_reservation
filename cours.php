<?php require_once 'includes/functions.php';
$cours = getProduct();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cours</title>
</head>

<body>
    <?php include_once 'includes/nav.php' ?>


    <section>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
            <?php foreach ($cours as $cour) : ?>
                <!-- Card 1 -->
                <div class="bg-white rounded-lg shadow-sm overflow-hidden relative">
                    <img alt="Computer monitor showing code editor with JavaScript code"
                        class="w-full h-48 object-cover" height="300"
                        src="images/<?php echo $cour['_image'] ?>"
                        width="600" />
                    <div class="absolute top-3 right-3 bg-[#1E40AF] text-white text-xs font-semibold rounded-full px-3 py-1">
                        Available
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-semibold text-gray-900">
                            <?php echo $cour['titre'] ?>
                        </h3>
                        <p class="mt-2 text-gray-700 text-sm">
                            <?php echo $cour['_description'] ?>
                        </p>
                        <div class="mt-4">
                            <a class="text-indigo-900 text-sm font-semibold hover:underline"
                                href="cours-details.php?id=<?php echo $cour['id'] ?>">View Details</a>
                        </div>
                    </div>
                </div>
            <?php endforeach ?>
        </div>
    </section>

<?php include_once 'includes/footer.php' ?>

    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.js"></script>

</body>

</html>