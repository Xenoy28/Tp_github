<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Connexion session</title>
</head>
<body>
<form method="post" action="../src/traitement/traitement.php">
    <label>Email:</label>
    <br>
    <input type="email" name="email" required>
    <br>
    <label>Mot de passe :</label>
    <br>
    <input type="password" name="mdp" required>
    <br>
    <input type="submit" name="Connexion">
</form>
</body>
</html>
<?php
