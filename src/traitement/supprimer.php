<?php
require_once '../bdd/bdd.php';

$sql = "DELETE FROM livre WHERE id_livre = :livre";
$req = $bdd->prepare($sql);
$req->execute(array(
    'livre' => $_POST['id_livre']
));

header('Location: ../../public/liste_livre.php');