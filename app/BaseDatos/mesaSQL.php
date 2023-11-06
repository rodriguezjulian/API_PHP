<?php
include ("accesoDatos.php");
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
}
?>