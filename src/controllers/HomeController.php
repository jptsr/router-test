<?php

namespace app\src\controllers;

    class HomeController
    {
        public function view()
        {
            require __DIR__.'/../../public/views/home.php';
        }
    }