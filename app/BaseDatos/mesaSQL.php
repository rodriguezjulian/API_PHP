<?php
//include ("accesoDatos.php");
class MesaSQL
{
    public static function InsertarMesa($mesa)
    {
        $estado=$producto->estado->value;
        $objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso();
        $consulta = $objetoAccesoDato->RetornarConsulta("INSERT INTO mesa (idPedido,idMozo,estado) VALUES('$mesa->idPedido','$mesa->idMozo','$estado')");
        $consulta->execute();
        return $objetoAccesoDato->RetornarUltimoIdInsertado();
    }

    /*public static function ObtenerMesas()
    {
        $objAccesoDatos = AccesoDatos::dameUnObjetoAcceso();
        $consulta = $objAccesoDatos->RetornarConsulta("SELECT id, nombreCliente, totalPrecio, estado, tiempoEstimado, numeroMesa FROM pedido");
        $consulta->execute();

        return $consulta->fetchAll(PDO::FETCH_CLASS, 'Pedido');
    }*/
    
}
?>