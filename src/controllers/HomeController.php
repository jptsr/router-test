<?php

namespace app\src\controllers;

class HomeController
{
    public function view()
    {
        // appeler la validation et afficher si validation ok
        
        require __DIR__.'/../../public/views/home.php';
    }
}