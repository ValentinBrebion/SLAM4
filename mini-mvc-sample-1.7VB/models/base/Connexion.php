<?php 

namespace models\base;
use models\base\SQL;

class Connexion extends SQL
{
    public function __construct()
    {
        parent::__construct('authentification', 'intAuthentification'); // constructeur
    }
      /**
     * Permet de s'authentifier grâce à une connexion simple à la BDD
     */
   function authentification($login, $mdp){
        $connnexion = $this->pdo->prepare("SELECT LoginAuth, MdpCompte,PrenomLog FROM authentification WHERE LoginAuth = ? AND MdpCompte = PASSWORD(?)");
        $connnexion->execute([$login, $mdp]);
        return $connnexion->fetch(\PDO::FETCH_ASSOC);

        
   }
    
}




?>