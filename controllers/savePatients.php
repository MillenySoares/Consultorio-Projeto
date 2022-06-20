<?php  
    ini_set('display_errors', 1);
    error_reporting(E_ALL);

    require_once("../models/Patients.php");
    require_once("../DAO/PatientsDAO.php"); 
    
    PatientsDAO::getInstance()->save(new Patients(
        $_POST['name'], $_POST['code'], $_POST['dataNasc'], 
        $_POST['email'], $_POST['phone'], $_POST['cpf'], $_POST['rg'], 
        $_POST['plan'],$_POST['description'],$_POST['cep'],$_POST['road'],
        $_POST['number'], $_POST['complement'], $_POST['district'], 
        $_POST['city'], $_POST['state'], $_POST['country'], 
        $_POST['password'])
    );
    header("Location: ../adm.html");
?>