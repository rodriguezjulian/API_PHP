<?php

enum Rol
{
    case Bartender;
    case Cervecero;
    case Cocinero;
    case Mozo;
}
enum EstadoEmpleado
{
    case Presente;
    case Ausente;
}

class Empleado
{
    public $id;
    public $rol;
    public $nombre;
    public $diponible; //disponible no disponible
    public $estado; //presente ausente

    public function __construct($rol, $nombre, $disponible, $estado) 
    {
        $this->rol = $rol;
        $this->nombre = $nombre;
        $this->disponible = $disponible;
        $this->estado = $estado;
    }
}
?>