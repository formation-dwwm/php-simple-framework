<?php
namespace App;
class Router {

    public function __construct($routes)
    {
        $this->routes = $routes;
    }

    public function findController($path){
        $controller = null;
        $methodName = null;
        foreach($this->routes as $route){
            if($route['path'] === $path){
                // That's the one !
                // On doit alors récupérer le controller
                // Et sa méthode depuis leur nom
                // eg: HomeCtrl::index

                // Récupérer le nom de la classe ...
                // ... et le nom la méthode
                list($className, $methodName) = explode('::', "App\Controller\\" . $route['controller'], 2);

                $controller = new $className();
            break;
            }
        }

        return [
            "controller" => $controller,
            "methodName" => $methodName
        ];
    }
}