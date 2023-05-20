<?php

    class conexao{
        private $usuario;
        private $senha;
        private $banco;
        private $servidor;

        private static $pdo;

        public function __contruct() {
            $this->servidor = "localhost";
            $this->banco = "asatoaca_senai";
            $this->usuario = "asatoaca_senai";
            $this->senha = "Senai10#0";
        }


        public function conectar() {
            try {
                if(is_null(self::$pdo)){
                    $conn = new PDO('mysql:host=localhost;dbname=asatoaca_senai', 'asatoaca_senai', 'Senai10#0');
                    $self::$pdo = $conn;

                    //echo "Conectou!!!";
                }
                return self::$pdo;
            }catch(PDOException $ex){
                echo "ERRO: ".$ex->getMessage();
            }
        }
    }