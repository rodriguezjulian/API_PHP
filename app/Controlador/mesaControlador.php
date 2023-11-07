<?php
include ("./Modelo/mesa.php");
include ("./BaseDatos/mesaSQL.php");
class MesaControlador
{
    public function Insertar($request, $response, $args)
    { 
        //Obtengo los parametros que el servidor me envio
        $parametros = $request->getParsedBody();
        if(isset($parametros['idPedido']) && isset($parametros['idMozo']) && isset($parametros['estado']))
        {
            //$consulta = $objetoAccesoDato->RetornarConsulta("INSERT INTO empleado(`id`, `rol`, `nombre`, `diponible`, `estado`);
            $rol = $parametros['rol'];
            $nombre = $parametros['nombre'];
            $diponible = $parametros['diponible'];
            $estado = $parametros['estado'];
            //Creo el objeto
            $mesa = new Mesa();
            $mesa->idPedido = $idPedido;
            $mesa->idMozo = $idMozo;
            $mesa->estado =EstadoMesa::from($estado);    
            MesaSQL::InsertarMesa($mesa);
            $payload = json_encode(array("mensaje" => "Mesa creada con exito"));
        }
        else
        {
            $payload = json_encode(array("mensaje" => "ERROR al crear la mesa"));
        }
        $response->getBody()->write($payload);
        return $response
          ->withHeader('Content-Type', 'application/json');
    } 

    public function TraerMesas($request, $response, $args)
    {
        $lista = mesaSQL::ObtenerTodos();
        $payload = json_encode(array("listapedidos" => $lista));
        $response->getBody()->write($payload);
        return $response
          ->withHeader('Content-Type', 'application/json');
    }



}