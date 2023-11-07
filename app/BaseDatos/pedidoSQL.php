<?php
include ("accesoDatos.php");

class PedidoSQL
{
    public static function InsertarPedido($pedido)
    {
        
        $estado=$pedido->estado->value;
        $objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso();
        //echo pedido->id
        //$consulta = $objetoAccesoDato->RetornarConsulta("INSERT INTO pedido (id,nombreCliente,idProductoPedido,totalPrecio,estado,tiempoEstimado,numeroMesa) VALUES('$pedido->id','$pedido->nombreCliente','$pedido->idProductoPedido','$pedido->$totalPrecio','$estado','$pedido->$tiempoEstimado','$pedido->$numeroMesa')");
        $consulta = $objetoAccesoDato->RetornarConsulta ("INSERT into pedido (id,nombreCliente,totalPrecio,estado,tiempoEstimado,numeroMesa)values(:id,:nombreCliente,:totalPrecio,:estado,:tiempoEstimado,:numeroMesa)");
        $consulta->bindValue(':id', $pedido->id);
        $consulta->bindValue(':nombreCliente', $pedido->nombreCliente);
        $consulta->bindValue(':totalPrecio', $pedido->totalPrecio);
        $consulta->bindValue(':estado', $estado);
        $consulta->bindValue(':tiempoEstimado', $pedido->tiempoEstimado);
        $consulta->bindValue(':numeroMesa', $pedido->numeroMesa);
        $consulta->execute();
    }
   /* public static function BuscarPedido($idPedido)
    {
        $objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso();
        $consulta = $objetoAccesoDato->RetornarConsulta("SELECT `id`, `nombreCliente`, `totalPrecio`, `estado`, `tiempoEstimado`, `numeroMesa` FROM `pedido` WHERE id=$idPedido;");
        $consulta->bindValue(':id', $pedido->id);
        $consulta->execute();
        $resultado = $consulta->fetchObject(PDO::FETCH_ASSOC);

        return $resultado;
    }*/
    public static function ObtenerTodos()
    {
        $objAccesoDatos = AccesoDatos::dameUnObjetoAcceso();
        $consulta = $objAccesoDatos->RetornarConsulta("SELECT id, nombreCliente, totalPrecio, estado, tiempoEstimado, numeroMesa FROM pedido");
        $consulta->execute();

        return $consulta->fetchAll(PDO::FETCH_CLASS, 'Pedido');
    }

    
      /* public static function obtenerTodos()
        {
            $objAccesoDatos = AccesoDatos::obtenerInstancia();
            $consulta = $objAccesoDatos->prepararConsulta("SELECT id, usuario, clave FROM usuarios");
            $consulta->execute();

            return $consulta->fetchAll(PDO::FETCH_CLASS, 'Usuario');
        }*/
    



}
?>