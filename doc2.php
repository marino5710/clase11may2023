<?php

class Transporte {
    protected $ruedas; 
    public $capacidad;

    public function __construct($ruedas, $capacidad)
    {
        $this->ruedas = $ruedas; 
        $this->capacidad = $capacidad;
    }

    public function getInfo() : void {
        echo "El transporte tiene $this->ruedas ruedas, y tiene capacidad de: $this->capacidad"; 
    }

    public function getRuedas() : void {
        echo "El transporte tiene $this->ruedas ruedas"; 
    }
}
$transporte1 = new Transporte(3,5); 


class Carro extends Transporte{
    public $puertas;

    public function getInfo(): void
    {
        echo "El carro tiene $this->ruedas ruedas, y tiene capacidad de: $this->capacidad y tiene $this->puertas puertas";
    }
    
}

$carroToyota = new Carro(4,4); 
$carroToyota->puertas= 4;
$carroToyota->getInfo();

class Bicicleta extends Transporte {
    public function getInfo(): void
    {
        echo "La bicicleta tiene $this->ruedas ruedas, y tiene capacidad de: $this->capacidad";
    }

}

$bicicleta = new Bicicleta(2,1); 
$bicicleta->getInfo();
