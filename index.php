<?php

require 'vendor/autoload.php';

use GuzzleHttp\Client;
use Infrastructure\Adapters\AirportController;
use Infrastructure\Http\AirportApiClient;
use Application\Services\AirportService;
echo 'PHP version: ' . phpversion();

// Crear cliente HTTP (Guzzle)
$client = new Client();
//
//// Crear cliente API
//$airportApiClient = new AirportApiClient();
//
//// Crear servicio
//$airportService = new AirportService($airportApiClient);
//
//// Crear controlador
//$airportController = new AirportController($airportService);
//
//// Llamar al controlador
//echo $airportController->getAirports('mia');
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Testes</title>
</head>
<body>
    <header>
        <h1>Bienvenido a Mi Página</h1>
    </header>

    <main>

    </main>

    <footer>

    </footer>


</body>
</html>
