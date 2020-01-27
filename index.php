<?php

require_once './vendor/autoload.php';
require_once './config/routes.php';

// On récupère le chemin complet vers la page
$full_uri = $_SERVER['REQUEST_URI'];
// ICI, on enlève la première la premiere partie du chemin
// correspondant au site actuel (multisite avec wamp)
$path = str_replace("/url-rewriting/", "", $full_uri);


// On récupère le controller 
// à éxecuter ainsi que sa méthode demandée
// selon le chemin demandé
$router = new App\Router($routes);

$route = $router->findController($path);
$controller = $route['controller'];
$methodName = $route['methodName'];


if(empty($controller)){
    // La page n'existe pas
    echo "404";
    exit();
}

// La route a été trouvée
// Le controlleur a utiliser est $controller
// Sa méthode s'appelle $methodName
$controller->$methodName();