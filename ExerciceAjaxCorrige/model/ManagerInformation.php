<?php
require_once 'model/Information.php';

class ManagerInformation
{
    private $informations = array();

    private function __construct()
    {
        $this->informations[0] = new Information("");
        $this->informations[1] = new Information("");
        $this->informations[2] = new Information("");
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
}