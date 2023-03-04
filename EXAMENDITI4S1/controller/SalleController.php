<!-- controller/salleController.php -->
<?php

    require_once 'model/SalleModel.php';

    class SalleController
    {
        public function __construct()
        {
            $this->salleModel = new SalleModel();
        }

        // Méthode gestionnaire de vues
        public function viewManagerSalle()
        { 
            $view = isset($_GET['view']) ? $_GET['view'] : NULL;
            switch ($view) {
                case 'addSalle':
                    $this->includeView("ajoutSalle");
                    break;
                case 'updateSalle':
                    $this->includeView("modifSalle");
                    break;
                default:
                    $this->includeView("listeSalle");
                break;
            }

            $action = isset($_GET['action']) ? $_GET['action'] : NULL;
            switch ($action) {
                case 'addSalle':
                    if(isset($_POST["add"]))
                    {
                        extract($_POST);
                        $this->salleModel->insert($nom);
                        echo "<script> location.replace('index.php'); </script>";
                        //header("location:/DITI4\EXAMENDITI4S1/index.php");
                    }
                    break;
                
                case 'supprimerSalle':
                    if(isset($_GET["id"]))
                    {
                        $resultat = $this->salleModel->supprimer($_GET["id"]);
                        if($resultat)
                        {
                            echo "<script> location.replace('index.php'); </script>";
                            // header("location:/DITI4\EXAMENDITI4S1/index.php");
                        }
                    }
                    break;

                case 'modifSalle':
                    if(isset($_POST["modifier"]))
                    {
                        
                        extract($_POST);
                        $this->salleModel->modifier($nom,$id);
                        echo "<script> location.replace('index.php'); </script>";

                       // header("location:/DITI4\EXAMENDITI4S1/index.php");
                    }
                    break;
                default:
                    # code...
                    break;
            }
        }

        public function includeView($viewSalle)
        {
            // include_once "../view/liste.php"; no ..
            if($viewSalle  == "listeSalle"){
                $salles = $this->salleModel->lister();
            }
            else 
            {
                if($viewSalle == "modifierSalle" && isset($_GET["id"]))
                {
                    $salle = $this->salleModel->findSalleById($_GET['id']);
                }
            }
            include "view/salle/".$viewSalle.".php";
        }
    }
?>