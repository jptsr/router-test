<?php

namespace app\src\controllers;

    class ErrorController
    {
        public function view()
        {
            // echo 'blabl';
            require __DIR__. '/../../public/views/error.php';
        }
    }