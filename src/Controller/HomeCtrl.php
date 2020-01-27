<?php
namespace App\Controller;
class HomeCtrl extends BaseCtrl {

    public function index(){
        $this->render('home.html.twig', [
            "name" => "Fifi"
        ]);
    }

    public function dashboard(){
        $this->render('dashboard.html.twig', []);
    }

}