<?php
$bdd = null;
require_once '../src/bdd/connexion.php';

$idAuteur = $_GET['id_auteur'];
$sql = "SELECT * FROM auteur WHERE ID_auteur = :auteur";
$req = $bdd->prepare($sql);
$res = $req->execute(array(
    'auteur' => $idAuteur
));
$auteur = $req->fetch();
if($auteur == false){
    header("Location: liste_auteur.php");
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Modification</title>
</head>
<body>
<h1>Modification d'un auteur</h1>
<form method="post" action="../src/traitement/modifier_auteurs.php">
    <label>Nom :</label>
    <input type="text" name="nom" value="<?=$auteur['nom']?>">
    <label>Prénom :</label>
    <input type="text" name="prenom"  value="<?=$auteur['prenom']?>">
    <label>Date de naissance :</label>
    <input type="text" name="date_naissance"  value="<?=$auteur['date_naissance']?>">
    <label>Pays</label>
    <select name="Pays">
        <?php
        $bdd = null;
        require_once "../src/bdd/connexion.php";
        $sql = "SELECT * FROM pays";
        $req = $bdd->prepare($sql);
        $req->execute();
        $res = $req->fetchAll();
        foreach ($res as $pays) {
            echo "<option value='".$pays["id_pays"]."'>".$pays['nom']."</option>";
        }
        ?>
    </select>
    <input type="hidden" name="id_auteur"  value="<?=$auteur['id_auteur']?>">
    <input type="submit" name="modifier" value="Modifier">
</form>

</body>
</html>