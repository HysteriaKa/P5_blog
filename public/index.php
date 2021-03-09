<?php

require '../vendor/autoload.php';

use Blog\Ctrl\Admin;
use Blog\Ctrl\Front;

//routing 
$uri = filter_input ( INPUT_SERVER , 'REQUEST_URI' ,FILTER_SANITIZE_URL );
$uri = substr($uri,1);
$uri = explode("/", $uri);

switch($uri[0]){
    case "admin" : 
        $page = new Blog\Ctrl\Admin(array_slice ( $uri,1));
        break;
    default:
        $page = new Blog\Ctrl\Front($uri);
        break;
}


// rendu du template
$loader = new \Twig\Loader\FilesystemLoader(__DIR__.'/templates');
$twig = new \Twig\Environment($loader, [
    'cache' => __DIR__ . '/tmp'
]);

echo $twig->render($page->template, $page->data, $page->status);