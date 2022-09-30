<?php
require_once 'model/ManagerInformation.php';

function accueil()
{
    require 'view/viewAccueil.php';
}

function information()
{
    $managerInformation = ManagerInformation::getInstance();
    $informations = $managerInformation->getInformations();
    require 'view/viewInformation.php';
}
function supprimerInfo(){

    if (isset($_POST['index'])&& (!empty ($_POST['index'])) ){
            $managerInformation = ManagerInformation::getInstance();
            echo json_encode($managerInformation->supprimerInfo($_POST['index']));            
        }
        
    }
        


