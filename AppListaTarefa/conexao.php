<?php

class Conexao {
    private $host = 'localhost';
    private $dbname = 'applistatarefa';
    private $user = 'root';
    private $pass = '';

    public function conectar () {
        try {
            
            $conexao = new PDO("mysql:host=$this->host;port=3307;dbname=$this->dbname",
            "$this->user",
            "$this->pass"
            );

            return $conexao;
        } catch(PDOException $e){
            echo "<p>" . $e->getMessage() . "</p>";
        }
    }
}