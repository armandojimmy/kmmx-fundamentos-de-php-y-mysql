<?php
    require_once "./core/autoloader.php";
    require_once "./core/helpers.php";
    define('API_CTRLS_DIR', __DIR__ . "/api");
    define('VIEWS_DIR', __DIR__ . "/views");
    define('CTRLS_DIR', __DIR__ . "/controllers");


    if (startsWith($_SERVER["REQUEST_URI"], '/api/')) {
        $apiRouter = new \core\Api\Api();
        // Start Api Route Setup
        // Stop Api Route Setup
        $apiRouter->exec(str_replace("/api", "", $_SERVER["REQUEST_URI"]));
    } else {
        $router = new \core\Router\Router();
        // Start Route View Setup
        $router->setRoute('/', 'home');
        $router->setRoute('/add-products', 'add-products');
        $router->setRoute('/product-list', 'list-products');
        $router->setRoute('/add-products-success', 'success');
        $router->setRoute('/add-user', 'add-user');
        $router->setRoute('/add-user-success', 'add-user-success');

        // End Route View Setup
        $router->loadView($_SERVER["REQUEST_URI"]);
    }

