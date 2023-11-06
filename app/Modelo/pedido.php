<?php

enum EstadoPedido: string
{
    case Preparacion="Preparacion";
    case Cancelado="Cancelado";
    case Entregado="Entregado";
}

class Pedido
{
    public $id;
    public $nombreCliente;
    public $totalPrecio;
    public $estado;
    public $tiempoEstimado;
    public $numeroMesa;

    public function __construct()
    {
        //obtengo un array con los parámetros enviados a la función
        $params = func_get_args();
        //saco el número de parámetros que estoy recibiendo
        $num_params = func_num_args();
        //cada constructor de un número dado de parámtros tendrá un nombre de función
        //atendiendo al siguiente modelo __construct1() __construct2()...
        $funcion_constructor ='__construct'.$num_params;
        //compruebo si hay un constructor con ese número de parámetros
        if (method_exists($this,$funcion_constructor)) {
            //si existía esa función, la invoco, reenviando los parámetros que recibí en el constructor original
            call_user_func_array(array($this,$funcion_constructor),$params);
        }
    }

    public function __construct6($nombreCliente, $totalPrecio, $estado = EstadoPedido::Preparacion, $tiempoEstimado, $numeroMesa) 
    {
        $this->id = self::GenerarId();
        $this->nombreCliente = $nombreCliente;
        $this->totalPrecio = $totalPrecio;
        $this->estado = $estado;
        $this->tiempoEstimado = $tiempoEstimado;
        $this->numeroMesa = $numeroMesa;
    }
    public static function GenerarId()
    {
        $id = "";
        $caracteres = "0123456789abcdefghijklmnopqrstuvwxyz";

        for($i = 0; $i < 5; $i++)
        {
            $id .= $caracteres[rand(0, strlen($caracteres)-1)];
        }

        return $id;
    }

}





?>