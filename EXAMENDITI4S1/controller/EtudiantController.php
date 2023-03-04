<!-- controller/etudiantController.php -->
<?php

    require_once 'model/EtudiantModel.php';

    class EtudiantController
    {
        public function __construct()
        {
            $this->etudiantModel = new EtudiantModel();
        }

        // Méthode gestionnaire de vues
        public function viewManager()
        { 
            $view = isset($_GET['view']) ? $_GET['view'] : NULL;
            switch ($view) {
                case 'add':
                    $this->includeView("ajout");
                    break;
                case 'update':
                    $this->includeView("modifier");
                    break;
                default:
                    $this->includeView("liste");
                break;
            }

            $action = isset($_GET['action']) ? $_GET['action'] : NULL;
            switch ($action) {
                case 'add':
                    if(isset($_POST["add"]))
                    {
                        extract($_POST);
                        $this->etudiantModel->insert($prenom, $nom, $classe);
                        header("location:/DITI4\EXAMENDITI4S1/index.php");
                    }
                    break;
                
                case 'supprimer':
                    if(isset($_GET["id"]))
                    {
                        $resultat = $this->etudiantModel->supprimer($_GET["id"]);
                        if($resultat)
                        {
                            echo "<script> location.replace('index.php'); </script>";
                            // header("location:/DITI4\EXAMENDITI4S1/index.php");
                        }
                    }
                    break;
                case 'modifier':
                    if(isset($_POST["modifier"]))
                    {
                        extract($_POST);
                        $this->etudiantModel->modifier($prenom, $nom, $classe, $id);
                        header("location:/DITI4\EXAMENDITI4S1/index.php");
                    }
                    break;
                default:
                    # code...
                    break;
            }
        }

        public function includeView($view)
        {
            // include_once "../view/liste.php"; no ..
            if($view  == "liste"){
                $etudiants = $this->etudiantModel->lister();
            }
            else 
            {
                if($view == "modifier" && isset($_GET["id"]))
                {
                    $etudiant = $this->etudiantModel->findEtudiantById($_GET['id']);
                }
            }
            include "view/etudiant/".$view.".php";
        }
    }
?>