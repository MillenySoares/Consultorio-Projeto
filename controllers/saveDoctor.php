<?php  
    ini_set('display_errors', 1);
    error_reporting(E_ALL);

    require_once("../models/Doctor.php");
    require_once("../DAO/DoctorDAO.php"); 
    
    DoctorDAO::getInstance()->save(new Doctor(
        $_POST['name'], $_POST['crm'], $_POST['dataNasc'], 
        $_POST['email'], $_POST['phone'], $_POST['cpf'], $_POST['rg'], 
        $_POST['assistant'],$_POST['specialty'], $_POST['wage'],$_POST['cep'],$_POST['road'],
        $_POST['number'], $_POST['complement'], $_POST['district'], 
        $_POST['city'], $_POST['state'], $_POST['country'], 
        $_POST['password'])
    );

    //header("Location: ../index.html");
?>