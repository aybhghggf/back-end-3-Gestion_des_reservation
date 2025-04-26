<?php
session_start();
if (!isset($_SESSION['user'])) {
  header('location:login.php?msg=plslogin');
}
if (isset($_GET['id'])) {
  $id = $_GET['id'];
}
if (isset($_SESSION['id'])) {
  $id_user = $_SESSION['id'];
  require_once 'includes/functions.php';
  reserver($id, $id_user);
  header('location:reservations.php?msg=bienreserver');
  exit;
} else {
  header('location:login.php?msg=plslogin');
}
?>