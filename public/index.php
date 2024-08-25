<?php

require_once __DIR__.'/../vendor/autoload.php';

$routes = require_once __DIR__.'/../routes/web.php';

$request = $_SERVER['REQUEST_URI'];

$request = explode("?",$request)[0];

foreach ($routes as $pattern => $controllerAction) {
    if (preg_match('#^' . $pattern . '$#', $request, $matches)) {
        array_shift($matches);
        if (is_array($controllerAction) && class_exists($controllerAction[0]) && method_exists($controllerAction[0], $controllerAction[1])) {
            $ctlr = new $controllerAction[0]();
            $method = $controllerAction[1];
            call_user_func_array([$ctlr, $method], $matches);
            exit;
        } else {
            header("HTTP/1.0 500 Internal Server Error");
            echo "Controller or method not found.";
            exit;
        }
    }
}

[$controller, $action] = $routes[$request] ?? [null,null];

if ($controller && $action) {
    $controllerInstance = new $controller();
    $controllerInstance->$action();
}else {
    throw new Exception("404 Not Found");
}

?>