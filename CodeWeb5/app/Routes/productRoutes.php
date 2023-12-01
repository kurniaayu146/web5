<?php

namespace app\Routes;
include "app/Controller/ProductController.php";

use app\Controller\productController;


class ProductRoutes
{
    public function handle($method, $path)
    {
        if($method === 'GET' && $path === '/api/product') {
            $controller = new productController();
            echo $controller->index();
        }

        if ($method === 'GET' && strpos($path, '/api/product/') === 0) {
            $pathParts = explode('/', $path);
            $id = $pathParts[count($pathParts) - 1];

            $controller = new productController();
            echo $controller->getById($id);
        }

        if($method === 'POST' && $path === '/api/product/') {
            $controller = new productController();
            echo $controller->insert();
        }

        if($method === 'PUT' && strpos($path, '/api/product/') === 0 ) {
            $pathParts = explode('/', $path);
            $id = $pathParts[count($pathParts) - 1];

            $controller = new productController();
            echo $controller->update($id);
        
        }

        if ($method === 'DELETE' && strpos($path, '/api/product/') === 0) {
            $pathParts = explode('/', $path);
            $id = $pathParts[count($pathParts) - 1];

            $controller = new productController();
            echo $controller->delete($id);
        }
    }
}