<?php
namespace models;

use models\base\SQL;

class TodoModel extends SQL
{
    public function __construct()
    {
        parent::__construct('todos', 'id');
    }
      /**
     * Permet de marquer une tâche comme terminé 
     */
    function marquerCommeTermine($id){
        $stmt = $this->pdo->prepare("UPDATE todos SET termine = 1 WHERE id = ?");
        $stmt->execute([$id]);
    }

    function ajouterTodo($texte){
        $add = $this->pdo->prepare("INSERT INTO todos VALUES(null,?,0,NULL)");
        $add->execute([$texte]);
    }
    function supprimer($id){
        $suppr = $this->pdo->prepare("DELETE FROM todos WHERE id= ?");
        $suppr->execute([$id]);
    }

    
}