<?php
require_once ('../bdd/connexion.php');
$nom = $_POST["nom"];
$prenom = $_POST["prenom"];
$email = $_POST["email"];
$tel_fixe = $_POST["tel_fixe"];
$rue = $_POST["rue"];
$cp = $_POST["cp"];
$ville = $_POST["ville"];

$sql ="INSERT INTO inscrit (nom,prenom,email,tel_fixe,rue,cp,ville) VALUES (:nom,:prenom,:email,:tel_fixe,:rue,:cp,:ville)";
$rec= $bdd->prepare($sql);
$rec->execute(array(
    "nom" => $nom,
    "prenom" => $prenom,
    "email" => $email,
    "tel_fixe" => $tel_fixe,
    "rue" => $rue,
    "cp" => $cp,
    "ville" => $ville,
));
header('Location: inscription.php');