<?php
try {
    $bdd = new PDO('mysql:host=localhost;dbname=joe', 'root');
}catch (PDOException $e){
    echo "Erreur : " . $e->getMessage();
}
