<?php
    ini_set('display_errors', 1);
    error_reporting(E_ALL);

    require_once("../models/User.php");
    require_once("../DAO/UserDAO.php");
    
    $user = UserDAO::getInstance()->findByMail($_POST['email']);

    if(password_verify($_POST['password'], $user->password)){

        session_start();

        $_SESSION['logedIn'] = true;
        $_SESSION['userId'] = $user->userId;
        $_SESSION["email"] = $user->email;
        $_SESSION["name"] = $user->name;
        
        header('Location: ../index.html');
    }
?>