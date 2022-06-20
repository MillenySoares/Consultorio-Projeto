<?php
    ini_set('display_errors', 1);
    error_reporting(E_ALL);

    require_once("../config/Banco.php"); 
    require_once("../models/Patients.php");

    class PatientsDAO {
        private static $instance;

        public static function getInstance() {

            if(self::$instance === null) {
                self::$instance = new self();
            }

            return self::$instance;
        }

        public function save(Patients $patient) {

            $stmt = Banco::getConnection()->prepare("
                SET AUTOCOMMIT=0;
                START TRASACTION;
                INSERT INTO Users(name, dataNasc, cpf, rg, phone, email,cep, road, district, number, complement, city, state, country, password) 
                VALUES (:name, :dataNasc, :cpf, :rg, :phone, :email, :cep, :road, :district, :number, :complement, :city, :state, :country, :password)
                INSERT INTO patient(code, plan, description) VALUES (:code, :plan, :description)
                COMMIT;
                SET AUTOCOMMIT=1;
            ");
            
            $stmt->bindParam("name", $patient->name);
            $stmt->bindParam("dataNasc", $patient->dataNasc);
            $stmt->bindParam("cpf", $patient->cpf);
            $stmt->bindParam("rg", $patient->rg);
            $stmt->bindParam("phone", $patient->phone);
            $stmt->bindParam("email", $patient->email);
            $stmt->bindParam("cep", $patient->cep);
            $stmt->bindParam("road", $patient->road);
            $stmt->bindParam("district", $patient->district);
            $stmt->bindParam("number", $patient->number);
            $stmt->bindParam("complement", $patient->complement);
            $stmt->bindParam("city", $patient->city);
            $stmt->bindParam("state", $patient->state);
            $stmt->bindParam("country", $patient->country);
            $stmt->bindParam("password", $patient->password);

            $stmt->bindParam("code", $patient->code);
            $stmt->bindParam("plan", $patient->plan);
            $stmt->bindParam("description", $patient->description);

            $stmt->execute();
        }

       //public function findByMail($email) {

            //$user = Banco::getConnection()->query("
                //SELECT userId,email, password, name 
                //FROM Users 
                //WHERE email = \"$email\"", PDO::FETCH_OBJ
            //);
            //$user->execute();

            //return $user->fetch();
        //}
    }
?>