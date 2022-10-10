<?php

//trait Getters {
    //public function __get($prop) {
        //return $this->$prop;
    //}
    
//}

class ordenador {
    private $SO ="";
    private $CodHZ ="";
    private $esSobremesa="";

    function __construct(string $SO, string $CodHZ, string $esSobremesa) {
        $this->SO = $SO;
        $this->CodHZ = $CodHZ;
        $this->esSobremesa = $esSobremesa;
    }

    public function getSO()
    {
        return $this->SO;
    }
    
    public function getCodHZ()
    {
        return $this->CodHZ;
    }
    
    public function getEsSobremesa()
    {
        return $this->esSobremesa;
    }
    
    //public function __set($prop, $value) {
       // if (...($prop)) {
            //$this->$prop = $value;
        //}
    //}
    
    public function setSO($SO)
    {
        $this->SO = $SO;
    }

    public function setCodHZ($CodHZ)
    {
        $this->CodHZ = $CodHZ;
    }
    public function setesSobremesa($esSobremesa)
    {
        $this->esSobremesa = $esSobremesa;
    }
    
    public function printHTML()
    {
        echo '<h2>Datos del ordenador</h2>';
        echo '<p>Sistema operaivo : '. $this->SO.'</p>';
        echo '<p>Codigo HZ : '.$this->CodHZ.'</p>';
        echo '<p>Es sobremesa? : '.$this->esSobremesa.'</p>';
    }
    
    public function toHTML(){
        return  '<h2>Datos del ordenador</h2>'.
            '<p>Sistema operaivo : '. $this->SO.'</p>'.
            '<p>Codigo HZ : '.$this->CodHZ.'</p>'.
            '<p>Es sobremesa? : '.$this->esSobremesa.'</p>';
    }
    
    /*
     * srializa un array de coches
     * y guarda en un fichero
     */
    public static function guardarSerializado($nombreFichero, $ordenadores){
        // guardar coches en archivo
        $s = serialize($ordenadores);
        // almacenamos $s en algún lugar en el que page2.php puede encontrarlo.
        file_put_contents($nombreFichero, $s);
    }
    
    /*de un fichero con coches serializados guardado
     devuelve un arrray de coches*/
    public static function getOrdenadoresUnselizados($nombreFichero){
        
        $s = file_get_contents($nombreFichero);
        $ordenadores = unserialize($s);
        return $ordenadores;
    }
    
}

?>