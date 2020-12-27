<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <link rel="shortcut icon" type="image/ico" href="img/favicon.gif" />
    <link rel="stylesheet" type="text/css" href="style.css" />
    <title> Connexion </title>
</head>
<body>
    <h1>Connexion</h1>
    <a href="user.inscription.view.php">Inscription</a>
    <form method="post" action="../controllers/user.controller.php">
        <input placeholder="Entrer votre adresse e-mail" type="email" name="mail" required>
        <input placeholder="Mot de passe" name="password" type="password" required>
        <input name="connexion" type="hidden">
        <input value="Se connecter" type="submit">
    </form>
</body>
</html>
