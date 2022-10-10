<?php
class CentroFp{
    private $cod ="";
    private $nombre ="";
    
    function __construct(string $cod, string $nombre) {
        $this->cod = $cod;
        $this->nombre = $nombre;
    }
   
    public function getCod()
    {
        return $this->cod;
    }

    public function getNombre()
    {
        return $this->nombre;
    }

    public function setCod($cod)
    {
        $this->cod = $cod;
    }

    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }
}
?>