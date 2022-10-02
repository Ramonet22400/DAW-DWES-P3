<?php
class Empleado {
        public $nombre;
        public $sueldo;

    function __constructor($nombre, $sueldo){
        $this-> nombre = $nombre;
        $this-> sueldo = $sueldo;
    }

    public function impuestos()
    {
        if ($this->sueldo < 2000) {

            echo $this->nombre . "as de pagar impuestos";
        } else {

            echo $this->nombre . "no es necesario pagar impuestos";
        }

    }
}

$Empleado= new Empleado('Ramonet', 2500);
$Empleado->impuestos();