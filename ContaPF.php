<?php

require_once "Conta.php";

class ContaPF extends Conta{
    public $rendimento;

    public function render(){
        $this->saldo += $this->saldo * $this->rendimento;
    }

}

?>