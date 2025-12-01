<?php
try{
    $bdd = new pdo('mysql:host=localhost;dbname=joe', 'joe', 'lovebooks');
}catch(PDOException $e){
    echo 'Erreur : '.$e->getMessage();
}