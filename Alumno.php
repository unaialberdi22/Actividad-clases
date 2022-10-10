<?php
include 'Persona.php';

Class Alumno extends Persona{
    private $CodMatricula ="";
    private $Ciclo ="";
    
    function __construct(string $CodMatricula, $Ciclo) {
        $this->CodMatricula = $CodMatricula;
        $this->Ciclo = $Ciclo;
    }

    public function getCodMatricula()
    {
        return $this->CodMatricula;
    }

    public function getCiclo()
    {
        return $this->Ciclo;
    }

    public function setCodMatricula($CodMatricula)
    {
        $this->CodMatricula = $CodMatricula;
    }

    public function setCiclo($Ciclo)
    {
        $this->Ciclo = $Ciclo;
    }
}
?>