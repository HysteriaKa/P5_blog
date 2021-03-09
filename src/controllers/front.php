<?php
namespace Blog\Ctrl;

use Blog\Ctrl\Page;

class Front extends Page{


    // public function __construct(Array $uri){
    // }

    private function home(){
        $this->template ="home";
        $this->data = []; //données du modele
    }

    private function bidule(){

    }
}