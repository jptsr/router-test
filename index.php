<?php

// namespace app;

use app\src\controllers\ErrorController;
use app\src\controllers\HomeController;
use app\src\controllers\LoginController;

require __DIR__.'/vendor/autoload.php';

$url = $_SERVER['REQUEST_URI'];

    switch($url)
    {
        case '/connexion':
            // echo 'connexion';
            $loginCtrl = new LoginController();
            $loginCtrl -> view();
            break;
        case '/menu-principal':
            $homeCtrl = new HomeController();
            $homeCtrl -> view();
            break;
        case '/liste-entreprises':
            break;
        case '/liste-entreprises/details-entreprise':
            break;
        case '/liste-contacts':
            break;
        case '/liste-contacts/details-contact':
            break;
        case '/liste-factures/details-facture':
            break;
        case '/modification':
            break;
        case '/nouvelle-entreprise':
            break;
        case '/nouveau-contact':
            break;
        case '/nouvelle-facture':
            break;
        default:
            // echo 'bou';
            
            $error = new ErrorController();
            $error -> view();

            // require 'public/views/error.php'; // OK-views-avec-layout + OK-switch
            break;
    }