<!-- model/SalleModel.php -->
<?php
    require_once "Database.php";

    class SalleModel
    {
        private $database;
        public function __construct()
        {
            // Instanciation de la DB
            $this->database = new Database();
        }
        public function insert($nom)
        {
            // Preparez la requete
            $queryPrepare = $this->database->ds->prepare("INSERT INTO salle(nom) VALUES (?)");  
            // Execution de la requete
            return $queryPrepare->execute(array($nom));
        }

        public function modifier($nom, $id)
        {
            $queryPrepare = $this->database->ds->prepare("UPDATE salle SET nom = ? WHERE id = ?");  
            return $queryPrepare->execute(array($nom, $id));
        }

        public function supprimer($id)
        {
            $req = $this->database->ds->prepare("DELETE FROM salle WHERE id = ?");
            
            // $req->bindValue(":idSalle",$id);

            return $req->execute(array($id));
        }
        
        public function lister()
        {
            $req = $this->database->ds->prepare("SELECT * FROM salle ORDER BY nom");
            $req->execute();
            return $req->fetchAll();
        }

        public function findSalleById($id)
        {
            $req = $this->database->ds->prepare("SELECT * FROM salle WHERE id = ?");
            $req->execute(array($id));
            return $req->fetch();
        }
    }
    
?>