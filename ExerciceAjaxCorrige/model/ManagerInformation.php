<?php
require_once 'model/Information.php';

class ManagerInformation
{
    private $informations = array();

    private function __construct()
    {
        $this->informations["Chipolatas"] = new Information("Chipolatas",0);
        $this->informations["Chipolatas aux herbes"] = new Information("Chipolatas aux herbes",1);
        $this->informations["Chorizo à griller"] = new Information("Chorizo à griller",2);
        $this->informations["Merguez"] = new Information("Merguez",3);
        /*$this->informations[4] = new Information("Soubressade piquante");
        $this->informations[5] = new Information("Saucisse au couteau");
        $this->informations[6] = new Information("Saucisse au piment d'Espelette");
        $this->informations[7] = new Information("Saucisse campagnarde");
        $this->informations[8] = new Information("Saucisse de canard");
        $this->informations[9] = new Information("Saucisse de Toulouse");
        $this->informations[10] = new Information("Saucisse échalote");
        $this->informations[11] = new Information("Saucisse méditerranéenne");
        $this->informations[12] = new Information("Saucisse T'chorizette");*/
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
    public function supprimerInfo($ligneinfo){

        unset($this->informations[$ligneinfo]);
    }
    
   
}