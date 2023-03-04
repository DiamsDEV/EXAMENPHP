<?php
    require_once "Utils/utils.php";
    include_once "view/shared/header.php";
    require_once "controller/EtudiantController.php";
    require_once "controller/SalleController.php";
    $etudiantController = new EtudiantController();
    $etudiantController->viewManager();
    $salleController = new SalleController();
    $salleController->viewManagerSalle();
    
    /*$type = isset($_GET['type']) ? $_GET['type'] : NULL;
    if($type=="etudiant"){
         $etudiantController = new EtudiantController();
     $etudiantController->viewManager();
    }elseif($type=="salle"){
        
        $salleController = new SalleController();
        $salleController->viewManagerSalle();
    } */   


    include_once "view/shared/footer.php";
?>