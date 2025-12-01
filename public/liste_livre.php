<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Liste de Livre</title>

</head>
<body>
<h1>La liste des livres</h1>
<table>
    <tr>
        <td>id_livre</td>
        <td>titre</td>
        <td>annee</td>
        <td>resume</td>
    </tr>
    <?php
    require_once '../src/bdd/bdd.php';
    $sql = 'SELECT * FROM livre';
    $query = $bdd->prepare($sql);
    $query->execute();
    $liste = $query->fetchAll();
    foreach($liste as $row){
        ?>

        <tr>
            <td><?php echo $row['id_livre']; ?></td>
            <td><?php echo $row['titre']; ?></td>
            <td><?php echo $row['annee']; ?></td>
            <td><?php echo $row['resume']; ?></td>
            <td><button><a href='form_modifier.php?id_livre=<?php echo $row['id_livre']; ?>'>Modifier</a> </button></td>
            <td>
                <form  action="../src/traitement/supprimer.php" method="post">
                    <input type="hidden" name="id_livre" value="<?=$row['id_livre'];?>">
                    <button type="submit">Supprimer</button>
                </form>
            </td>
        </tr>
    <?php } ?>
</table>
<button><a href="ajouter_livre.html">Ajouter un livre</a> </button>
</body>
</html>