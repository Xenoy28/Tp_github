<?php
$bdd = null;
require_once ('../bdd/connexion.php');
$sql ="INSERT INTO inscrit (nom,prenom,email,tel_fixe,rue,cp,ville,mdp) VALUES (:nom,:prenom,:email,:tel_fixe,:rue,:cp,:ville,:mdp)";
$rec= $bdd->prepare($sql);

$nom = $_POST["nom"];
$prenom = $_POST["prenom"];
$email = $_POST["email"];
$tel_fixe = $_POST["tel_fixe"];
$rue = $_POST["rue"];
$cp = $_POST["cp"];
$ville = $_POST["ville"];
$mdp = $_POST["mdp"];

$rec->execute(['nom'=> $nom,'prenom'=> $prenom,'email'=> $email,'tel_fixe'=> $tel_fixe,'rue'=> $rue,'cp'=> $cp,'ville'=> $ville,'mdp'=> $mdp]);
header('Location: ../../public/session.php');