<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Ajout d'un Auteur</title>
</head>
<body>
<form method="post" action="../src/traitement/ajouter_auteur.php">
    <label>Nom :</label>
    <input type="text" name="nom">
    <label>Prénom :</label>
    <input type="text" name="prenom">
    <label>Date de Naissance :</label>
    <input type="text" name="date_naissance">
    <label for="pays">Choisir un pays:</label>
    <select name="ref_pays" id="ref_pays">
        <?php
        $bdd = null;
        require_once '../src/bdd/connexion.php';
        $req = $bdd->prepare("SELECT * FROM pays");
        $req->execute();
        foreach ($req->fetchAll() as $pays) {
            echo "<option value='".$pays['id_pays']."'>".$pays['nom']."</option>";
        }
        ?>
    </select>
    <input type="submit" name="Ajouter">
</form>
</body>
</html>