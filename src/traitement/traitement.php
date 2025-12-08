<?php
$bdd = null;
require_once '../bdd/connexion.php';

session_start();
if (isset($_POST['email']) && isset($_POST['mdp'])) {
    $email = $_POST['email'];
    $mdp = $_POST['mdp'];

    $sql= "SELECT * FROM `inscrit`WHERE email = :email AND mdp = :mdp";
    $rec = $bdd->prepare($sql);
    $rec->execute([':email'=> $email,':mdp'=> $mdp]);
    $user = $rec->fetch();
    if ($user) {
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['email']   = $user['email'];
        header("Location: ../../public/liste_auteur.php");
        exit();
    } else {
        header("Location: ../../public/session.php");
        exit();
    }
} else {
    header("Location: ../../public/session.php");
    exit();
}
