<?php
use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Server\RequestHandlerInterface as RequestHandler;
use Slim\Psr7\Response;

    class AutorizacionMiddleware
    {
        public $autorizado;
        public function __construct($autorizado) 
        {
            $this->autorizado = $autorizado;
        }
        public function __invoke(Request $request, RequestHandler $handler): Response
        {   
            $parametros = $request->getQueryParams();
    
            $rol = $parametros['rol'];
    
            if ($rol === "Socio" || $rol === $this->autorizado) 
            {
                //PERMITO QUE SE CONTINUE CON EL FLUJO NORMAL
                $response = $handler->handle($request);
            } 
            else 
            {
                //Utilizo Response para construir la respuesta para el cliente que hizo la solicitud http
                $response = new Response();
                $payload = json_encode(array('mensaje' => 'ERROR, no tiene los permisos'));
                $response->getBody()->write($payload);
            }
            return $response->withHeader('Content-Type', 'application/json');
        }
    }
?>