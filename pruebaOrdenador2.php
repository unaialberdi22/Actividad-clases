<?php
include 'ordenador.php';

$miArray = array();

array_push($miArray, new ordenador("Windows", "HZ3523", TRUE));
array_push($miArray, new ordenador("Linux", "HZ3545", TRUE));
array_push($miArray, new ordenador("Linux", "HZ3545", TRUE));
array_push($miArray, new ordenador("Windows", "HZ3572", FALSE));
array_push($miArray, new ordenador("AppleOS", "HZ3589", TRUE));

print_r($miArray);

?>