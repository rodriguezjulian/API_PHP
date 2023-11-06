<?php
//C:\xampp\htdocs\slim-php-deployment\app\Modelo
include ("./Controlador/empleadoControlador.php");
include ("./Controlador/encuestaControlador.php");
//include ("./Controlador/mesaControlador.php");
include ("./Controlador/pedidoControlador.php");
include ("./Controlador/productoControlador.php");

// Error Handling
error_reporting(-1);
ini_set('display_errors', 1);

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Factory\AppFactory;
use Slim\Routing\RouteCollectorProxy;

require __DIR__ . '/../vendor/autoload.php';
//productoSQL::InsertarProducto(new producto("Pizza",2000,tipoProducto::Cocinero,15));

// Instantiate App
$app = AppFactory::create();
$app->setBasePath("/slim-php-deployment/app");
// Add error middleware
$app->addErrorMiddleware(true, true, true);

// Add parse body
$app->addBodyParsingMiddleware();
//corchetes quiere decir opcional
// Routes
$app->group('/pedido', function (RouteCollectorProxy $group) {
    $group->get('[/]', \pedidoControlador::class . ':TraerTodos');
    //$group->get('/{id}', \pedidoControlador::class . ':TraerUno');
    $group->post('[/]', \pedidoControlador::class . ':Insertar');
  });

$app->run();
?>
