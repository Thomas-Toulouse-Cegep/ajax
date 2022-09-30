<?php
require_once 'model/Information.php';

class ManagerInformation
{
    private $informations = array();

    private function __construct()
    {
        $this->informations["Chipolatas"];
        $this->informations["Chipolatas aux herbes"];
        $this->informations["Chorizo à griller"];
        $this->informations["Merguez"];
        $this->informations["Soubressade piquante"];
        $this->informations["Saucisse au couteau"];
        $this->informations["Saucisse au piment d'Espelette"];
        $this->informations["Saucisse campagnarde"];
        $this->informations["Saucisse de canard"];
        $this->informations["Saucisse de Toulouse"];
        $this->informations["Saucisse échalote"];
        $this->informations["Saucisse méditerranéenne"];
        $this->informations["Saucisse T'chorizette"] ;
    }

    public static function getInstance()
    {
        // On place le manager dans session pour simuler une base de données
        session_start();
        $instance = $_SESSION["ManagerInformationInstance"];
        if (!isset($_SESSION["ManagerInformationInstance"]) ||
            empty($_SESSION["ManagerInformationInstance"])) {
            $_SESSION["ManagerInformationInstance"] = new ManagerInformation();
        }
        return $_SESSION["ManagerInformationInstance"];
    }

    public function getInformations()
    {
        return $this->informations;
    }
    public function supprimerInfo(){

        return $this->informations;
    }
    
   
}