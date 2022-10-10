<?php
include 'Espacio.php';

class Aula extends Espacio{
    private $Numero =1;
    private $Proyector = true;
    private $PizarraDigi = true;
    private $PantallaTact = true;
    
    function __construct(string $Numero, string $Proyector, string $PizarraDigi, string $PantallaTact) {
        $this->Numero = $Numero;
        $this->Proyector = $Proyector;
        $this->PizarraDigi = $PizarraDigi;
        $this->PantallaTact = $PantallaTact;
    }
    
    public function getNumero()
    {
        return $this->Numero;
    }

    public function getProyector()
    {
        return $this->Proyector;
    }

    public function getPizarraDigi()
    {
        return $this->PizarraDigi;
    }

    public function getPantallaTact()
    {
        return $this->PantallaTact;
    }

    public function setNumero($Numero)
    {
        $this->Numero = $Numero;
    }

    public function setProyector($Proyector)
    {
        $this->Proyector = $Proyector;
    }

    public function setPizarraDigi($PizarraDigi)
    {
        $this->PizarraDigi = $PizarraDigi;
    }
    
    public function setPantallaTact($PantallaTact)
    {
        $this->PantallaTact = $PantallaTact;
    }
}



?>