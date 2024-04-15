<?php

class Tarefa {
    private $id;
    private $id_status;
    private $tarefa;
    private $data_cadastro;

    public function __get($atibuto){
        return $this->$atibuto;
    }

    public function __set($atibuto, $valor) {
        $this->$atibuto = $valor;
    }
}

