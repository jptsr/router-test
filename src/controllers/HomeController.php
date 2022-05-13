<?php

namespace app\src\controllers;

    class HomeController
    {
        public function __construct()
        {
            
        }

        public function view()
        {
            require '../../public/views/home.php';
        }
    }