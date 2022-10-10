<?php
include 'ordenador.php';

$miArray = array();

array_push($miArray, new ordenador("Windows", "HZ3523", TRUE));
array_push($miArray, new ordenador("Linux", "HZ3545", TRUE));
array_push($miArray, new ordenador("Ubuntu", "HZ3545", TRUE));
array_push($miArray, new ordenador("Windows", "HZ3572", FALSE));
array_push($miArray, new ordenador("AppleOS", "HZ3589", TRUE));

?>
<table border=1em;>
<?php 
    foreach ($miArray as $ordenador){
        {
            echo '<tr>';
            echo '<td>' . $ordenador->SO . '</td>';
            echo '<td>' . $ordenador->CodHZ . '</td>';
            echo '<td>' . $ordenador->esSobremesa . '</td>';
            echo '</tr>';
        }
    }
?>
</table>