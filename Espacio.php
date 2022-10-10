<?php
abstract class Espacio {
    private $wifi = true;
    private $puntosRed = 0;

    function __construct(bool $wifi, string $puntosRed) {
        $this->wifi = $wifi;
        $this->puntosRed = $puntosRed;
    }
    public function getWifi()
    {
        return $this->wifi;
    }

    public function getPuntosRed()
    {
        return $this->puntosRed;
    }

    public function setWifi($wifi)
    {
        $this->wifi = $wifi;
    }

    public function setPuntosRed($puntosRed)
    {
        $this->puntosRed = $puntosRed;
    }

   
}
?>