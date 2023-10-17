<?php

require "Conta.php";
require_once "ContaPF.php";
require_once "ContaPJ.php";

$c1 = new Conta();

$c1->numeroConta = "12345678912";
$c1->nomeTitular = "José";
$c1->saldo = "1000";


$c1->depositar(300);
$c1->sacar(200);
$c1->mostrarSaldo();
$c1->dados();

echo "-------------------------------------------------- <br>";

$c2 = new ContaPF();

$c2->numeroConta = "8080";
$c2->nomeTitular = "Gareth de Rívia";
$c2->saldo = "1000";
$c2->rendimento = 0.01;
$c2->dados();
$c2->mostrarSaldo();
$c2->render();
$c2->mostrarSaldo();

echo "-------------------------------------------------- <br>";

$c3 = new ContaPJ();

$c3->numeroConta = "9090";
$c3->nomeTitular = "Ieniffer de Vengenberg";
$c3->saldo = "10000";
$c3->LimiteEmprestimo = 5000;
$c3->dados();
echo "-----------------------------Depois--------------------- :  <br>";

$c3->SolicitarEmprestimo(1000);
$c3->PagarEmprestimo(500);

$c3->MostrarLimite();
$c3->mostrarSaldo();

?>