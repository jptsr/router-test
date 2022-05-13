<?php

namespace app\src\controllers;

    class ErrorController
    {
        public function view()
        {
            // echo 'blabl';
            return require '../../public/views/error.php';
        }
    }