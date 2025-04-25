<?php 
require_once 'db.php';

function getSession(){
    if(!isset($_SESSION)){
        session_start();
    }
}
function createUser($fullnom=null,$email=null,$phone=null,$hashedpassword=null){
    global $pdo;
    if($fullnom && $email && $phone && $hashedpassword){
       $st= $pdo->prepare("INSERT INTO `users`(`nom`, `email`, `phone`, `_password`) VALUES(?,?,?,?)");
        $st->execute([$fullnom,$email,$phone,$hashedpassword]);
    }
}
function conMsg(){
    if(isset($_GET['msg'])&& $_GET['msg']==1){
        echo'<div id="alert" class="fixed top-5 right-5 flex items-center p-4 mb-4 text-sm text-green-700 bg-green-100 rounded-lg shadow-lg z-50" role="alert">
        <svg class="w-5 h-5 mr-3" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
          <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm-1-11a1 1 0 112 0v4a1 1 0 11-2 0V7zm0 6a1 1 0 112 0v2a1 1 0 11-2 0v-2z" clip-rule="evenodd"/>
        </svg>
        <div>
          <span class="font-medium">Action réussie!</span> Votre action a été effectuée avec succès.
        </div>
        <button id="close-btn" class="ml-4 text-green-500 hover:text-green-700 focus:outline-none">
          <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
          </svg>
        </button>
      </div>';
      }
}
function connectUser($email = null, $password = null) {
    global $pdo;

    if ($email && $password) {
        $st = $pdo->prepare("SELECT * FROM `users` WHERE `email` = ?");
        $st->execute([$email]);
        $user = $st->fetch(PDO::FETCH_ASSOC);

        if ($user && password_verify($password, $user['_password'])) {
            session_start();
            $_SESSION['user']=true;
            $_SESSION['username']=$user['nom'];
            $_SESSION['email']=$user['email'];

            header('location:index.php?msg=3');
            exit;
        } else {
            header('location:login.php?msg=4');
            exit;
        }
    }
}

?>