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

    if (isset($_DELETE['index']) ){
        if (!empty ($_DELETE['index'])){
            $info = new ManagerInformation;
            echo "i";
            echo json_encode($info->supprimerInfo());
            
        }
        
    }
   // echo json_encode($info->supprimerInfo());
   
   // echo json_encode($info->supprimerInfo());

}