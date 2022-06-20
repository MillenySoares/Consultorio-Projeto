<?php
    require_once("User.php");

    class Doctor extends User{
        public string $crm;
        public string $assistant;
        public string $wage;
        public string $specialty;

            
        public function __construct(
            string $crm, string $assistant,string $wage, string $specialty, string $name,
            string $dataNasc, string $cpf, string $rg, string $phone, 
            string $email, string $cep, string $road,string $district, string $number, string $complement, 
            string $city, string $state,string $country, string $password
            ){

            $this->crm = $crm;
            $this->assistant = $assistant;
            $this->wage = $wage;
            $this->specialty = $specialty;

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