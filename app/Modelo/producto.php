<?php
enum tipoProducto:string
{
    case Bartender="Bartender";
    case Cervecero="Cervecero";
    case Cocinero="Cocinero";
}

class Producto
{
    public $id;
    public $nombre;
    public $precio;
    public $tipo; 
    public $tiempo;//minutos

    public function __construct($nombre, $precio, $tipo, $tiempo) 
    {
        $this->nombre = $nombre;
        $this->precio = $precio;
        $this->tipo = $tipo;
        $this->tiempo = $tiempo;
    }
}
?>