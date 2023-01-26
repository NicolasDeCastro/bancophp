<?php
require_once 'funcoes.php';

$contacorrente=[
    '123.456.789-10' => ['titular'=>'nicolas','saldo'=>1569],
    '123.456.789-11' => ['titular'=>'marilda','saldo'=>2000],
    '123.456.789-12' => ['titular'=>'pedro','saldo'=>1900]];

$contacorrente['123.456.789-10'] = sacar($contacorrente['123.456.789-10'],500);
$contacorrente['123.456.789-11'] = depositar($contacorrente['123.456.789-11'],250);

NomeMaiusculo($contacorrente['123.456.789-10']);

unset($contacorrente[ '123.456.789-12']);

/*echo "<ul>";
    foreach($contacorrente as $cpf=> $conta){
       // list('titular'=>$titular,'saldo'=>$saldo)=$conta;
      //  echo " $cpf $titular $saldo". '<br>';
        exibeconta($conta);
        //echo "$cpf {$conta['titular']}  {$conta['saldo']}".'<br>';
     
     } 
echo "</ul>"; */
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>contascorrentes<h1>
    <dl>
     <?php foreach ($contacorrente as $cpf => $conta) { ?>
   
        <dt><h3> 
            <?php echo $conta['titular'];?> - <?php echo $cpf; ?>
        </h3></dt>    
        <dd>
         saldo:<?php  echo $conta['saldo']; ?>
        </dd>
        <?php } ?>
    </dl>  

</body>
</html>