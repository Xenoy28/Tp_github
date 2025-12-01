<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Gestion des auteurs</title>
</head>
<body>
<h1>La liste des auteurs</h1>
<table>
    <tr>
        <td>Identifiant</td>
        <td>Noms</td>
        <td>Prénoms</td>
        <td>Date_naissance</td>
        <td>pays</td>
        <td>Modification</td>
        <td>Suppression</td>
    </tr>
    <?php
    $bdd = null;
    require_once '../src/bdd/connexion.php';
    $sql = 'SELECT * FROM auteur';
    $query = $bdd->prepare($sql);
    $query->execute();
    $liste = $query->fetchAll();
    foreach($liste as $row){
        ?>

        <tr>
            <td><?php echo $row['id_auteur']; ?></td>
            <td><?php echo $row['nom']; ?></td>
            <td><?php echo $row['prenom']; ?></td>
            <td><?php echo $row['date_naissance']; ?></td>
            <td><?php echo $row['ref_pays']; ?></td>
            <td><button><a href='modifier_auteur.php?id_auteur=<?php echo $row['id_auteur']; ?>'>Modifier</a> </button></td>
            <td>
                <form  action="../src/traitement/supprimer_auteur.php" method="post">
                    <input type="hidden" name="id_auteur" value="<?=$row['id_auteur'];?>">
                    <button type="submit">Supprimer</button>
                </form>
            </td>
        </tr>
    <?php } ?>
</table>
<button><a href="ajouter_auteurs.php">Ajouter un auteur</a> </button>
</body>
</html>