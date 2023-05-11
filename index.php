<?php
// DEFINICION DE LA CLASE PRODUCTO
class Producto{
    // DEFINICION DE ATRIBUTOS
    public $precio;
    public $nombre;
    public $disponible;

    // DEFINICION DE METODOS

    public function mostrarNombreProducto() : void{
        echo $this->nombre;
    }

    public function mostrarPrecioProducto() : void{
        echo $this->precio;
    }

}

// CREACIÓN DE UN OBJETO
// CREAR UNA INSTANCIA
$mesa = new Producto(); 

$mesa->nombre = "Mesa";
$mesa->precio = 500;
$mesa->disponible = true;

$silla = new Producto(); 

$mesa->nombre = "Silla grande";
$mesa->precio = 100;
$mesa->disponible = false;



echo "<pre>";
var_dump($mesa);
echo "</pre>";
echo "<pre>";
var_dump($silla);
echo "</pre>";

$mesa->mostrarNombreProducto();
$silla->mostrarNombreProducto();
$mesa->mostrarPrecioProducto();