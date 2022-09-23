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