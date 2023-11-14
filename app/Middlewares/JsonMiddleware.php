<?php
use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Server\RequestHandlerInterface as RequestHandler;
use Slim\Psr7\Response;

class JsonMiddleware
{
    public function __invoke(Request $request, RequestHandler $handler): Response
    {
        $response = $handler->handle($request);

        // Verificar si el contenido ya es de tipo JSON
        $contentType = $response->getHeaderLine('Content-Type');
        if (empty($contentType) || strpos($contentType, 'json') === false) {
            // Si no es JSON, establecer el encabezado 'Content-Type' en 'application/json'
            $response = $response->withHeader('Content-Type', 'application/json');
        }

        return $response;
    }
}

/*{
    public function __invoke(Request $request, RequestHandler $handler): Response
    {
        // Registro de la solicitud
        //$this->logRequest($request);

        // Continúa al siguiente middleware o controlador
        $response = $handler->handle($request);

        // Puedes realizar acciones después de que se maneje la solicitud si es necesario
        var_dump()
          return $response->withHeader('Content-Type', 'application/json');
    }
}*/
?>