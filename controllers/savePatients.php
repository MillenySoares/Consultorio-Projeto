<?php  
    ini_set('display_errors', 1);
    error_reporting(E_ALL);

    require_once("../models/Patients.php");
    require_once("../DAO/PatientsDAO.php"); 

    $patient = new Patients(
        $_POST['plan'],  $_POST['description'],  $_POST['name'],
        $_POST['dataNasc'],  $_POST['cpf'],  $_POST['rg'],  $_POST['phone'], 
        $_POST['email'],  $_POST['cep'],  $_POST['road'], $_POST['district'],  $_POST['number'],  $_POST['complement'], 
        $_POST['city'],  $_POST['state'], $_POST['country'],  $_POST['password']);
    
    var_dump($patient);
    
    PatientsDAO::getInstance()->save($patient);
   // header("Location: ../adm.html");
?>