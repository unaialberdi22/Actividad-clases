<?php
abstract class Persona{
    private $name ="";
    private $dni ="";
    private $email ="";
    
    function __construct(string $name, $dni, $email) {
        $this->name = $name;
        $this->dni = $dni;
        $this->email = $email;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getDni()
    {
        return $this->dni;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function setDni($dni)
    {
        $this->dni = $dni;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

}
?>