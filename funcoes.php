<?php

function sacar( array $conta, float $valor):array
{
    if($conta['saldo']<$valor){

        echo "vc não pode depositar".PHP_EOL;

    }
    $conta['saldo'] -= $valor;

return $conta;
}

function depositar(array $conta, float $valor):array 
{
 $conta['saldo'] += $valor;   
 return $conta;
 }


 function NomeMaiusculo(array &$conta)
 {

$conta['titular']=mb_strtoupper($conta['titular']);
 }


 function exibeconta(array $conta)
 {
    list('titular'=>$titular,'saldo'=>$saldo)=$conta;
 echo "<li>Titular: $titular. saldo: $saldo</li>";
 }
 