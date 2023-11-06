<?php
enum EstadoProducto
{
    case Realizado;
    case Pendiente;
    case EnProceso;
}

class ProductoPedido
{
    public $id; 
    public $idProducto;
    public $idPedido;
    public $estado;

    public function __construct($idProducto, $idPedido, $estado) 
    {
        $this->idProducto = $idProducto;
        $this->idPedido = $idPedido;
        $this->estado = $estado;
    }
}
?>