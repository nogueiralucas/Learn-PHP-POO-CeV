<?php
class Caneta {
    private $modelo;
    private $ponta;
    private $tampada;
    private $cor;

    public function Caneta($modelo, $ponta, $cor) {
        $this->modelo = $modelo;
        $this->ponta = $ponta;
        $this->cor = $cor;

        $this->tampar();
    }

    public function getModelo() {
        return $this->modelo;
    }

    public function setModelo($modelo) {
        $this->modelo = $modelo;
    }

    public function getPonta() {
        return $this->ponta;
    }

    public function setPonta($ponta) {
        $this->ponta = $ponta;
    }

    public function getTampada() {
        return $this->tampada;
    }

    public function setTampada($tampada) {
        $this->tampada = $tampada;
    }

    public function tampar() {
        if (!$this->getTampada()) {
            $this->setTampada(true);
        }
    }

    public function destampar() {
        if ($this->getTampada()) {
            $this->setTampada(false);
        }
    }
}