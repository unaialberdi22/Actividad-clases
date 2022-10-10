<?php
include 'Espacio.php';

Class Variado extends Espacio{
    private $tipo ="";
    
    function __construct(string $tipo) {
        $this->tipo = $tipo;
    }
       

    public function getTipo()
    {
        return $this->tipo;
    }

    public function setTipo($tipo)
    {
        $this->tipo = $tipo;
    }

    
}

// $v=new Variado("zuzendaritza");
// echo $v->getTipo();
// echo $v->getWifi();
// echo $v->getPuntosRed();
?>