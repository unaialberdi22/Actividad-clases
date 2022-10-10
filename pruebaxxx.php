<!DOCTYPE html>
<html>
<head>
<title>Insert ordenador</title>
<meta charset="UTF-8">
</head>
<body>

	<form>
		<input name="Sistema operativo" placeholder="Sistema operativo"> <input name="Codigo HZ"
			placeholder="Codigo HZ"> <input name="Es sobremesa?" placeholder="Es sobremesa?"> <input
			type="submit" value="Guardar">
	</form>
            <?php
            include 'ordenador.php';
            
            $ordenadores = ordenador::getOrdenadoresUnselizados('storePC');
            
            //imprimir los coches del fichero
            foreach ($ordenadores as $ordenador) {
                $ordenador->printHTML();
            }
            
            if (isset($_GET['SO']) && isset($_GET['CodHZ']) && isset($_GET['esSobremesa'])) {
            
            
                $SO = $_GET['SO'];
                $CodHZ = $_GET['CodHZ'];
                $esSobremesa = $_GET['esSobremesa'];
            
                if ($SO != NULL && $CodHZ != NULL && $esSobremesa != NULL) {//se ha rellenado el form
                    //echo "se va ha crear el coche";
            
                    $ordenadorNuevo = new ordenador($SO, $CodHZ, $esSobremesa);
                    $ordenadorNuevo->printHTML();
            
                    $ordenadores[] = $ordenadorNuevo;
            
                    ordenador::guardarSerializado('storePC', $ordenadores);
         
                }
            }
            
            ?>


</body>
</html>