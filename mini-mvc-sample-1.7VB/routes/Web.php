<?php

namespace routes;

use routes\base\Route;
use controllers\Account;
use controllers\SampleConnexion;
use controllers\TodoWeb;
use controllers\VideoWeb;
use utils\SessionHelpers;
use controllers\SampleWeb;

class Web
{
    function __construct()
    {
        $main = new SampleWeb();
        $todo = new TodoWeb();
        $conn = new SampleConnexion();

        Route::Add('/deconnexion',[$conn,'logout']);
// route deco
        Route::Add('/verification',[$conn,'Verification']);
        //route connexion
        Route::Add('/Connexion', [$conn,'Connexion']);

        //route home
        Route::Add('/', [$main, 'home']);
       Route::Add('/apropos', [$main,'about']);
      
       //route todoweb
       Route::Add('/todo/liste', [$todo, 'liste']);
        Route::Add('/todo/ajouter', [$todo, 'ajouter']);
        Route::Add('/todo/terminer', [$todo, 'terminer']);
        Route::Add('/todo/supprimer', [$todo, 'supprimer']);
        
        

        //        Exemple de limitation d'accès à une page en fonction de la SESSION.
        //        if (SessionHelpers::isLogin()) {
        //            Route::Add('/logout', [$main, 'home']);
        //        }
    }
}

