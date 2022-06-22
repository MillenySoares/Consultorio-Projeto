<?php
    ini_set('display_errors', 1);
    error_reporting(E_ALL);

    require_once("User.php");

    class Patients extends User{
        public string $plan;
        public string $description;


            
        public function __construct(
            string $plan,string $description, string $name,
            string $dataNasc, string $cpf, string $rg, string $phone, 
            string $email, string $cep, string $road,string $district, int $number, string $complement, 
            string $city, string $state,string $country, string $password
            ){

            $this->plan = $plan;
            $this->description = $description;
            $this->name = $name;
            $this->dataNasc = $dataNasc; 
            $this->cpf = $cpf;
            $this->rg = $rg;
            $this->phone = $phone;
            $this->email = $email;
            $this->cep = $cep;
            $this->road = $road;
            $this->district = $district;
            $this->number = $number;
            $this->complement = $complement;
            $this->city = $city;
            $this->state = $state;
            $this->country = $country;
            $this->password = password_hash($password, PASSWORD_BCRYPT);
        }

    }
?>