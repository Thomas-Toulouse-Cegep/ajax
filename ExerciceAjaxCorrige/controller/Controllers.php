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

   // if (isset($_POST['index']) ){
        $managerInformation = ManagerInformation::getInstance();
        $managerInformation->supprimerInfo($_POST["index"]);

       // if (!empty ($_POST['index'])){
           // $info = new ManagerInformation;
            //echo json_encode($info->supprimerInfo());
            
        //}
        
   // }
   // echo json_encode($info->supprimerInfo());
   
   // echo json_encode($info->supprimerInfo());

}