<?php

namespace Blog\Ctrl;

class Page{

    public $template;
    public $data = [];
    public $status = 200;

    public function __construct(Array $uri){
        if ($uri[0] === null) $uri[0] = "home";
        if ( ! method_exists ( $this , $uri[0] )){
            $this->template ="page404";
            $this->status = 404;
            return;
        }
        $this->$uri[0]($uri);
    }

}