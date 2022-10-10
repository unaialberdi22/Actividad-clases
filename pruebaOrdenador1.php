<?php
include 'ordenador.php';

$v=new ordenador("Windows", "HZ3523", TRUE);
echo $v->getSO();
echo "<br>";
echo $v->getCodHZ();
echo "<br>";
echo $v->getesSobremesa();



?>

