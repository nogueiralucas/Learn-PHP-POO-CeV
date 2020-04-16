<?php

require_once 'Controlador.php';

class ControleRemoto implements Controlador {
    private $volume;
    private $saveVolume;
    private $ligado;
    private $tocando;

    public function ControleRemoto() {
        $this->volume = 50;
        $this->saveVolume = 0;
        $this->ligado = false;
        $this->tocando = false;
    }

    private function getVolume() {
        return $this->volume;
    }

    private function setVolume($volume) {
        $this->volume = $volume;
    }

    private function getSaveVolume() {
        return $this->saveVolume;
    }

    private function setSaveVolume($volume) {
        $this->saveVolume = $volume;
    }

    private function getLigado() {
        return $this->ligado;
    }

    private function setLigado($ligado) {
        $this->ligado = $ligado;
    }

    private function getTocando() {
        return $this->tocando;
    }

    private function setTocando($tocando) {
        $this->tocando = $tocando;
    }

    public function ligar() {
        $this->setLigado(true);
    }

    public function desligar() {
        $this->setLigado(false);
    }

    public function abrirMenu() {
        echo "<br>Ligado: {$this->getLigado()}";
        echo "<br>Tocando: {$this->getTocando()}";
        echo "<br>Volume: {$this->getVolume()}";
        for($i=0; $i<$this->getVolume(); $i+=5)
            echo " | ";
        echo "<br>";
    }

    public function fecharMenu() {
        echo "<br>Fechando menu...";
    }

    public function maisVolume() {
        if($this->getLigado() && $this->getVolume() < 100)
            $this->setVolume($this->getVolume() + 5);
    }

    public function menosVolume() {
        if($this->getLigado() && $this->getVolume() > 0)
            $this->setVolume($this->getVolume() - 5);
    }

    public function ligarMudo() {
        if($this->getLigado() && $this->getVolume() > 0) {
            $this->setSaveVolume($this->getVolume());
            $this->setVolume(0);
        }
    }

    public function desligarMudo() {
        if($this->getLigado() && $this->getVolume() == 0 && $this->getSaveVolume() > 0) {
            $this->setVolume($this->getSaveVolume());
            $this->setSaveVolume(0);
        }
    }

    public function play() {
        if($this->getLigado() && !$this->getTocando())
            $this->setTocando(true);
    }

    public function pause() {
        if($this->getLigado() && $this->getTocando())
            $this->setTocando(false);
    }

}