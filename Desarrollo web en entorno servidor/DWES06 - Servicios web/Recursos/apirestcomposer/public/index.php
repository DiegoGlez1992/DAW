<?php
require '../vendor/autoload.php';

use Clases\PersonController;

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");
header("Access-Control-Allow-Methods: OPTIONS, GET, POST, PUT, DELETE");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Max-Age: 3600");

// Manejar la petición de verificación preliminar de CORS.
if ($_SERVER['REQUEST_METHOD'] == 'OPTIONS') {
    // No hacer nada más y finalizar el script después de enviar los encabezados de CORS.
    exit(0);
}

//$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

//eliminamos la parte del path que no corresponde a los puntos de entrada del API
$BASE_URI = "/23_24/apirestcomposer/public";
$parsedURI = parse_url($_SERVER["REQUEST_URI"]);
$endpointName = str_replace($BASE_URI, "", $parsedURI["path"]);

$uri = explode( '/', $endpointName);
// all of our endpoints start with /person
// everything else results in a 404 Not Found
//// $n = count($uri)-1;
if ($uri[1] !== 'person') {
    header("HTTP/1.1 404 Not Found");
    exit();
}

// the user id is, of course, optional and must be a number:
$userId = null;
if (isset($uri[2])) {
    $userId = (int) $uri[2];
}

$requestMethod = $_SERVER["REQUEST_METHOD"];

// pass the request method and user ID to the PersonController and process the HTTP request:
$controller = new PersonController($requestMethod, $userId);
$controller->processRequest();