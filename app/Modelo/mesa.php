<?php

enum EstadoMesa
{
    case Esperando;
    case Comiendo;
    case Pagando;
    case Cerrado;
}

class Mesa
{
    public $id;
    public $idPedido;
    public $idMozo;
    public $estado;

    public function __construct($idPedido = null, $idMozo = null, $estado = Estado::Cerrado) 
    {
        $this->idPedido = $idPedido;
        $this->idMozo = $idMozo;
        $this->estado = $estado;
    }





}









?>