<?php
include 'Persona.php';

Class Docente extends Persona{
    private $sueldo = 1;
    
    function __construct(string $sueldo) {
        $this->sueldo = $sueldo;
    }
    
    public function getSueldo()
    {
        return $this->sueldo;
    }

    public function setSueldo($sueldo)
    {
        $this->sueldo = $sueldo;
    }   
}
?>