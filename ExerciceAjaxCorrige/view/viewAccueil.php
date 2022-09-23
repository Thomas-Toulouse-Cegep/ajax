<?php $titre = 'Accueil';?>

<?php ob_start();?>

<h3>Contenu de la page d'accueil</h3>

<?php $contenu = ob_get_clean();?>

<?php require 'template.php';?>