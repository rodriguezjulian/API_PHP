<?php
include ("accesoDatos.php");
class EncuestaSQL
{
    public static function InsertarEncuesta($encuesta)
    {
        $objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso();
        $consulta = $objetoAccesoDato->RetornarConsulta("INSERT INTO encuesta (nombreCliente,descripcion,puntuacionMesa,puntuacionMozo,puntuacionCocinero,puntuacionRestaurant) VALUES('$encuesta->nombreCliente','$encuesta->descripcion','$encuesta->puntuacionMesa','$encuesta->puntuacionMozo','$encuesta->puntuacionCocinero','$encuesta->puntuacionRestaurant')");
        $consulta->execute();
        return $objetoAccesoDato->RetornarUltimoIdInsertado();
    }
}
?>