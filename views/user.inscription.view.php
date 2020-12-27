<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <link rel="shortcut icon" type="image/ico" href="img/favicon.gif" />
    <link rel="stylesheet" type="text/css" href="style.css" />
    <title> Inscription </title>
</head>
<body>
    <h1>Inscription</h1>
    <a href="user.connexion.view.php">Connexion</a>
    <form method="post" action="../controllers/user.controller.php">
        <input placeholder="Entrer votre prénom" type="text" name="first_name" required>
        <input placeholder="Entrer votre nom" type="text" name="name" required>
        <input placeholder="Entrer votre adresse e-mail" type="email" name="mail" required>
        <input placeholder="Mot de passe" name="password" type="password" required>
        <input name="inscription" type="hidden">
        <input value="M'inscrire" type="submit">

    </form>
</body>
</html>
