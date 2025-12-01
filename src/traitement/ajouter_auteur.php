<?php
$bdd = null;
require_once '../bdd/connexion.php';

if(isset($_POST['nom'])  && isset($_POST['prenom'])
    && isset($_POST['date_naissance'])  && isset($_POST['ref_pays'])
) {
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $date_naissance = $_POST['date_naissance'];
    $ref_pays = $_POST['ref_pays'];
    $sql = "INSERT INTO auteur(nom,prenom,date_naissance,ref_pays) VALUES (:nom,:prenom,:date_naissance,:ref_pays)";
    $req = $bdd->prepare($sql);
    $req->execute(array(
        'nom' => $nom,
        'prenom' => $prenom,
        'date_naissance' => $date_naissance,
        'ref_pays' => $ref_pays
    ));
}else{
    header("Location: ajouter_auteurs.php");

}

