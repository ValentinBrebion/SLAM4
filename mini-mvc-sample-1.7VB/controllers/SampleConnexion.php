<?php

namespace controllers;

use controllers\base\Web;
use utils\Template;
use models\base\Connexion;


class SampleConnexion extends Web
{
    private $SampleConnexion;

    function __construct(){
        $this->SampleConnexion = new Connexion();
    }
    function Connexion()
    {
        Template::render("views/common/authentification/connexion.php"); //générer la page avec le paramètre date
        
    }
   function Verification($login,$mdp){
    $connexion = $this->SampleConnexion->authentification($_POST['login'],$_POST['password']);
   // Template::render("views/common/authentification/verification.php", array('connexion' =>$connnexion));
    if($connexion){
        // nom de session random = $connexion possède Loginauth,mdpcompte et prenomlog
         $_SESSION['user'] = $connexion['PrenomLog'];
        $_SESSION['intAuthentification'];
        $this->redirect("/");
    }else{
        $this->redirect("/Connexion");
    }
   }

   function logout(){
       session_destroy();
       $this->redirect("/");
   }

 

}