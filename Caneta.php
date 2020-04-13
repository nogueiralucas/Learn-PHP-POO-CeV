<?php
class Caneta {
    var $modelo;
    var $cor;
    var $carga;
    var $tampada;

    function rabiscar() {
        if(!$this->tampada)
            echo('<p>Estou rabiscando...</p>');
        else {
            echo('<p>Não posso rabiscar!</p>');
        }
    }

    function tampar() {
        $this->tampada = true;
    }

    function destampar() {
        $this->tampada = false;
    }
}