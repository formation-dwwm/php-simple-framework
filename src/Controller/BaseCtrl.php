<?php 
namespace App\Controller;
class BaseCtrl {

    public function render($templatePath, $data){
        $loader = new \Twig\Loader\FilesystemLoader(__DIR__.'/../templates');
        $twig = new \Twig\Environment($loader, [
            'cache' => __DIR__.'/../../cache',
            'debug' => true
        ]);

        echo $twig->render($templatePath, $data);
    }

}