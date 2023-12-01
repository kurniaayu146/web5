<?php

header("Content-Type: application/json; charset=UTF-8");

include "app/Routes/ProductRoutes.php"; // Corrected file name

use app\Routes\ProductRoutes;

$method = $_SERVER['REQUEST_METHOD'];
$path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

$productRoutes = new ProductRoutes(); // Corrected variable name
$productRoutes->handle($method, $path);
