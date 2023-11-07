<?php
//include ("accesoDatos.php");
class ProductoSQL
{
    public static function InsertarProducto($producto)
    {
        $tipo=$producto->tipo->value;
        $objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso();
        $consulta = $objetoAccesoDato->RetornarConsulta("INSERT INTO producto (nombre,precio,tipo,tiempo) VALUES('$producto->nombre','$producto->precio','$tipo','$producto->tiempo')");
        $consulta->execute();
        return $objetoAccesoDato->RetornarUltimoIdInsertado();
    }
}
?>