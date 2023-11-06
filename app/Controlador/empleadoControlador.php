<?php
class EmpleadoControlador
{
    public function Insertar($request, $response, $args)
    {
        //Obtengo los parametros que el servidor me envio
        $parametros = $request->getParsedBody();
        if(isset($parametros['rol']) && isset($parametros['nombre']) && isset($parametros['diponible']) && isset($parametros['estado']))
        {
            // $consulta = $objetoAccesoDato->RetornarConsulta("INSERT INTO empleado(`id`, `rol`, `nombre`, `diponible`, `estado`)
            $rol = $parametros['rol'];
            $nombre = $parametros['nombre'];
            $diponible = $parametros['diponible'];
            $estado = $parametros['estado'];
            //Creo el objeto
            $empleado = new Empleado();
            $empleado->rol =Rol::from($rol);
            $empleado->nombre = $nombre;
            $empleado->diponible =$diponible;
            $empleado->estado = EstadoEmpleado::from($estado);
            EmpleadoSQL::InsertarEmpleado($empleado);
            $payload = json_encode(array("mensaje" => "Empleado creado con exito"));
        }
        else
        {
            $payload = json_encode(array("mensaje" => "ERROR, No se puedo dar de alta al empleado nuevo"));
        }
        $response->getBody()->write($payload);
        return $response
          ->withHeader('Content-Type', 'application/json');
    } 
}
?>



