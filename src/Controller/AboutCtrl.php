<?php
namespace App\Controller;
class AboutCtrl extends BaseCtrl {

    public function about(){
        $this->render('about.html.twig', [
            'name' => 'Riri'
        ]);
    }

}