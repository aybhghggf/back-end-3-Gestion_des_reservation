<?php
require_once 'includes/functions.php'; // باش تستخدم الفونكسيونات من فايل الوظائف

// تأكد من أنك توصلت مع ID ديال الحجز
if (isset($_GET['id_reservation'])) {
    $id_reservation = $_GET['id_reservation'];
    
    // دير الحذف من جدول الحجز
    if (annulerReservation($id_reservation)) {
        header('Location: reservations.php?msg=reservation_annulee');
        exit;
    } else {
        echo "هناك مشكلة في إلغاء الحجز.";
    }
} else {
    echo "لم يتم تحديد الحجز!";
}

// الفونكسيون ديال الحذف
function annulerReservation($id_reservation)
{
    global $pdo;
    $st = $pdo->prepare('DELETE FROM `reservation` WHERE `id_reservation` = ?');
    $st->execute([$id_reservation]);

    return $st->rowCount() > 0; // خاصك تتحقق واش الداتا تم حذفها بنجاح
}
?>
