<?php
$bdd = null;
require_once '../bdd/connexion.php';

if(isset($_POST['nom'])  && isset($_POST['prenom'])
    && isset($_POST['date_naissance']) && isset($_POST['id_auteur']) && isset($_POST['ref_pays'])
){
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $date_naissance = $_POST['date_naissance'];
    $ref_pays = $_POST['ref_pays'];
    $id_auteur = $_POST['id_auteur'];
    $sql = "UPDATE auteur SET nom = :nom,
                    prenom = :prenom,
                    date_naissance = :date_naissance,
                    ref_pays = :ref_pays
                 WHERE id_auteur = :id_auteur";
    $req = $bdd->prepare($sql);
    $req->execute(array(
        'nom' => $nom,
        'prenom' => $prenom,
        'date_naissance' => $date_naissance,
        'ref_pays' => $ref_pays,
        'id_auteur' => $id_auteur
    ));
    header("Location: ../../public/liste_auteur.php");
}else{
    header("Location: ../../public/modifier_auteurs.php?id_auteur=".$_POST['id_auteur']);

}


