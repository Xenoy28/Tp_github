<?php
var_dump($_POST);
require_once '../bdd/bdd.php';

if(isset($_POST['titre'])  && isset($_POST['annee'])
    && isset($_POST['resume'])
) {
    $titre = $_POST['titre'];
    $annee = $_POST['annee'];
    $resume = $_POST['resume'];
    $sql = "INSERT INTO livre(titre,annee,resume) VALUES (:titre,:annee,:resume)";
    $req = $bdd->prepare($sql);
    $req->execute(array(
        'titre' => $titre,
        'annee' => $annee,
        'resume' => $resume,
    ));

    header('Location: ../../public/liste_livre.php');
}else{
    header("Location: ../../public/ajouter_livre.html");

}

