<?php

namespace app\src\controllers;

    class LoginController
    {

        public function view()
        {
            // echo 'view';
            return require '../../public/views/login.php';
        }
    }