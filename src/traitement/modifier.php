<?php
require_once '../bdd/bdd.php';


if(isset($_POST['titre'])  && isset($_POST['annee'])
    && isset($_POST['resume']) && isset($_POST['id_livre'])
){
    $titre = $_POST['titre'];
    $annee = $_POST['annee'];
    $resume = $_POST['resume'];
    $id_livre = $_POST['id_livre'];
    $sql = "UPDATE livre SET titre = :titre,
                    annee = :annee,
                    resume = :resume
                 WHERE id_livre = :id_livre";
    $req = $bdd->prepare($sql);
    $req->execute(array(
        'titre' => $titre,
        'annee' => $annee,
        'resume' => $resume,
        'id_livre' => $id_livre
    ));
    header('Location: ../../public/liste_livre.php');
}else{
    header("Location: ../../public/form_modifier.php?id_livre=".$_POST['id_livre']);

}

