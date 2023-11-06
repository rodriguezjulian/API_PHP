<?php
include ("accesoDatos.php");
class EmpleadoSQL
{
    public static function InsertarEmpleado($empleado)
    {
        $rol=$empleado->rol->value;
        $estado=$empleado->estado->value;
        $objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso();
        $consulta = $objetoAccesoDato->RetornarConsulta("INSERT INTO empleado(`id`, `rol`, `nombre`, `diponible`, `estado`) VALUES ('$rol','$empleado->nombre','$empleado->disponible','$estado'");
        $consulta->execute();
        return $objetoAccesoDato->RetornarUltimoIdInsertado();
    }
}
?>