<?php
require 'controller/Controllers.php';

try {
    // J'utilise un Guard Clause pour diminuer le nesting
    // https://refactoring.com/catalog/replaceNestedConditionalWithGuardClauses.html
    if (!isset($_GET['action'])) {
        return accueil();
    }
    switch ($_GET['action']) {
        case 'accueil':
            accueil();
            break;
        case 'information':
            information();
            break;
        default:
            throw new Exception('Aucune page spécifique demandée');
    }
} catch (PDOException $e) {
    $msgErreur = $e->getMessage();
    require 'view/viewErreur.php';
} catch (Exception $ex) {
    $msgErreur = $ex->getMessage();
    require 'view/viewErreur.php';
}