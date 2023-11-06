<?php

enum EstadoPedido
{
    case Preparacion;
    case Cancelado;
    case Entregado;
}

class Pedido
{
    public $id;
    public $nombreCliente;
    public $idProductoPedido;
    public $totalPrecio;
    public $estado;
    public $tiempoEstimado;
    public $numeroMesa;

    public function __construct($nombreCliente, $idProductoPedido, $totalPrecio, $estado = EstadoPedido::Preparacion, $tiempoEstimado, $numeroMesa) 
    {
        $this->nombreCliente = $nombreCliente;
        $this->idProductoPedido = $idProductoPedido;
        $this->totalPrecio = $totalPrecio;
        $this->estado = $estado;
        $this->tiempoEstimado = $tiempoEstimado;
        $this->numeroMesa = $numeroMesa;
    }


}





?>