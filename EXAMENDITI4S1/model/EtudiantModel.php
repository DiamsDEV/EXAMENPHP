<!-- model/EtudiantModel.php -->
<?php
    require_once "Database.php";

    class EtudiantModel
    {
        private $database;
        public function __construct()
        {
            // Instanciation de la DB
            $this->database = new Database();
        }
        
        public function insert($prenom, $nom, $classe)
        {
            // Preparez la requete
            $queryPrepare = $this->database->ds->prepare("INSERT INTO etudiant(prenom, nom, classe) VALUES (?, ?, ?)");  
            // Execution de la requete
            return $queryPrepare->execute(array($prenom, $nom, $classe));
        }

        public function modifier($prenom, $nom, $classe, $id)
        {
            $queryPrepare = $this->database->ds->prepare("UPDATE etudiant SET prenom = ?, nom = ?, classe = ? WHERE id = ?");  
            return $queryPrepare->execute(array($prenom, $nom, $classe, $id));
        }

        public function supprimer($id)
        {
            $req = $this->database->ds->prepare("DELETE FROM etudiant WHERE id = ?");
            
            // $req->bindValue(":idEtudiant",$id);

            return $req->execute(array($id));
        }
        
        public function lister()
        {
            $req = $this->database->ds->prepare("SELECT * FROM etudiant ORDER BY nom");
            $req->execute();
            return $req->fetchAll();
        }

        public function findEtudiantById($id)
        {
            $req = $this->database->ds->prepare("SELECT * FROM etudiant WHERE id = ?");
            $req->execute(array($id));
            return $req->fetch();
        }
    }