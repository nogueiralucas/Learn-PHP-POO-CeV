<?php

class ContaBanco {
    public $numConta;
    protected $tipo;
    private $dono;
    private $saldo;
    private $status;


    public function ContaBanco() {
        $this->saldo = 0;
        $this->status = false;

        echo "<p>Conta criada com sucesso.</p>";
    }

    public function getNumConta() {
        return $this->numConta;
    }

    public function setNumConta($numConta) {
        $this->numConta = $numConta;
    }

    public function getTipo() {
        return $this->tipo;
    }

    public function setTipo($tipo) {
        $this->tipo = $tipo;
    }

    public function getDono() {
        return $this->dono;
    }

    public function setDono($dono) {
        $this->dono = $dono;
    }

    public function getSaldo() {
        return $this->saldo;
    }

    public function setSaldo($saldo) {
        $this->saldo = $saldo;
    }

    public function getStatus() {
        return $this->status;
    }

    public function setStatus($status) {
        $this->status = $status;
    }

    public function abrirConta($tipo) {
        $this->setTipo($tipo);
        $this->setStatus(true);

        if($tipo == "CC") {
            $this->setSaldo(50);
        } elseif($tipo == "CP") {
            $this->setSaldo(150);
        }
    }

    public function fecharConta() {
        if($this->getSaldo() > 0) {
            echo "<p>Conta possui saldo. Não é possível fechá-la.</p>";
        } elseif($this->getSaldo() < 0) {
            echo "<p>Conta está em débito. Não é possível fechá-la.</p>";
        } else {
            $this->setStatus(false);
            echo "<p>Conta encerrada.</p>";
        }
    }

    public function depositar($valor) {
        if($this->getStatus()) {
            $this->setSaldo($this->getSaldo() + $valor);
        } else {
            echo "<p>Conta fechada. Não é possível depositar.</p>";
        }
    }

    public function sacar($valor) {
        if($this->getStatus()) {
            if($this->getSaldo() >= $valor) {
                $this->setSaldo($this->getSaldo() - $valor);
            } else {
                echo "<p>Operação não realizada. Saldo insuficiente.</p>";
            }
        } else{
            echo "<p>Conta fechada. Não é possível sacar.</p>";
        }
    }

    public function pagarMensal() {
        $v;

        if($this->getTipo() == "CC") {
            $v = 12;
        } elseif($this->tipo == "CP") {
            $v = 20;
        }

        if($this->getStatus()) {
            if($this->getSaldo() > $v) {
                $this->setSaldo($this->getSaldo() - $v);
            } else {
                echo "<p>Saldo insuficiente.</p>";
            }
        } else {
            echo "<p>Impossível pagar.</p>";
        }
    }
}