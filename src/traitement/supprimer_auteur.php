<?php
$bdd = null;
require_once '../bdd/connexion.php';

$sql = "DELETE FROM auteur WHERE id_auteur = :auteur";
$req = $bdd->prepare($sql);
$req->execute(array(
    'auteur' => $_POST['id_auteur']
));

header('Location: ../../public/liste_auteur.php');