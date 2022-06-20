<?php
    require_once("../config/Banco.php"); 
    require_once("../models/Doctor.php");

    class DoctorDAO {
        private static $instance;

        public static function getInstance() {

            if(self::$instance === null) {
                self::$instance = new self();
            }

            return self::$instance;
        }

        public function save(Doctor $doctor) {
        

            $stmt = Banco::getConnection()->prepare("
                SET AUTOCOMMIT=0;
                START TRASACTION;
                INSERT INTO Users(name, dataNasc, cpf, rg, phone, email,cep, road, district, number, complement, city, state, country, password) 
                VALUES (:name, :dataNasc, :cpf, :rg, :phone, :email, :cep, :road, :district, :number, :complement, :city, :state, :country, :password)
                INSERT INTO patient(crm, assistant, wage,specialty) VALUES (:crm, :assistant, :wage, :specialty)
                COMMIT;
                SET AUTOCOMMIT=1;
            
            ");
            
            $stmt->bindParam("name", $doctor->name);
            $stmt->bindParam("dataNasc", $doctor->dataNasc);
            $stmt->bindParam("cpf", $doctor->cpf);
            $stmt->bindParam("rg", $doctor->rg);
            $stmt->bindParam("phone", $doctor->phone);
            $stmt->bindParam("email", $doctor->email);
            $stmt->bindParam("cep", $doctor->cep);
            $stmt->bindParam("road", $doctor->road);
            $stmt->bindParam("district", $doctor->district);
            $stmt->bindParam("number", $doctor->number);
            $stmt->bindParam("complement", $doctor->complement);
            $stmt->bindParam("city", $doctor->city);
            $stmt->bindParam("state", $doctor->state);
            $stmt->bindParam("country", $doctor->country);
            $stmt->bindParam("password", $doctor->password);

            $stmt->bindParam("crm", $doctor->crm);
            $stmt->bindParam("assistant", $doctor->assistant);
            $stmt->bindParam("wage", $doctor->wage);
            $stmt->bindParam("specialty", $doctor->specialty);

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