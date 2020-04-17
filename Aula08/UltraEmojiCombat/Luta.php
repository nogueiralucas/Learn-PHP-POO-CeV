<?php

require_once 'Lutador.php';

class Luta {
    private $desafiado;
    private $desafiante;
    private $rounds;
    private $aprovada;

    public function marcarLuta($lutador1, $lutador2) {
        if(($lutador1->getCategoria() === $lutador2->getCategoria()) && ($lutador1 != $lutador2)) {
            $this->setAprovada(true);
            $this->setDesafiado($lutador1);
            $this->setDesafiante($lutador2);
        } else {
            $this->setAprovada(false);
            $this->setDesafiado(null);
            $this->setDesafiante(null);
        }
    }

    public function lutar() {
        if($this->getAprovada()) {
            $this->getDesafiado()->apresentar();
            $this->getDesafiante()->apresentar();
            $vencedor = rand(0, 2);
            
            switch($vencedor) {
                case 0:  // Empate
                    echo "<p>Empatou!</p>";
                    $this->getDesafiado()->empatarLuta();
                    $this->getDesafiante()->empatarLuta();
                break;
                case 1:  // Desafiado vence
                    echo "{$this->getDesafiado()->getNome()}";
                    $this->getDesafiado()->ganharLuta();
                    $this->getDesafiante()->perderLuta();
                break;
                case 2:  // Desafiante vence
                    echo "{$this->getDesafiante()->getNome()}";
                    $this->getDesafiado()->perderLuta();
                    $this->getDesafiante()->ganharLuta();
                break;
            }
        } else {
            echo "<p>A luta não pode acontecer.</p>";
        }
    }

    public function getDesafiado() {
        return $this->desafiado;
    }

    public function setDesafiado($desafiado) {
        $this->desafiado = $desafiado;
    }

    public function getDesafiante() {
        return $this->desafiante;
    }

    public function setDesafiante($desafiante) {
        $this->desafiante = $desafiante;
    }

    public function getRounds() {
        return $this->rounds;
    }

    public function setRounds($rounds) {
        $this->rounds = $rounds;
    }

    public function getAprovada() {
        return $this->aprovada;
    }

    public function setAprovada($aprovada) {
        $this->aprovada = $aprovada;
    }
}