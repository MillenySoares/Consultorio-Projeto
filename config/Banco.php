<?php
    class Banco {
        private static $instance;

        public static function getConnection(){

            if(self::$instance === null) {
                self::$instance = new PDO("mysql:host=localhost;dbname=projetoConsultorio", "root", "mscode@2022");
            }
            
            return self::$instance;
        }
    }
?>