<?php

require_once "Conta.php";

    class ContaPJ extends Conta{

    public $LimiteEmprestimo;

    

    public function SolicitarEmprestimo($valor){
        $this->saldo = $this->saldo + $valor;
        $this->LimiteEmprestimo = $this->LimiteEmprestimo - $valor;

    }
    public function PagarEmprestimo($valor){
        $this->LimiteEmprestimo = $this->LimiteEmprestimo + $valor;

    }
    public function MostrarLimite(){
        echo "O Limite de Empréstimo atual é : $this->LimiteEmprestimo <br>";

    }

    // public function imprimir(){
    //  parent::imprimir();
    // echo "Rendimento:" .this->rendimento. "<br>" ; 
    //   } issso pra adicionar mais coisas ao método imprimir do Dênis é diferente do meu. 

}

?>