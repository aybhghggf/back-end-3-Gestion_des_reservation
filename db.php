<?php 
$username= "root";
$password= "";

try {
    $pdo = new PDO("mysql:host=localhost;dbname=cours;charset=utf8", $username, $password);
} catch (PDOException $pdo) {
    echo'Connexion echoué';
}

?>