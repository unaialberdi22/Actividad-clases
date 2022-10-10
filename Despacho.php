<?php
include 'Espacio.php';

class Despacho extends Espacio{
    private $nombre = "";
    
    function __construct(string $nombre) {
        $this->nombre = $nombre;
    }

    public function getNombre()
    {
        return $this->nombre;
    }

    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }
}
?>
