<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <link rel="shortcut icon" type="image/ico" href="img/favicon.gif" />
    <link href="../assets/style1.css" rel="stylesheet">
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <title> Connexion </title>
</head>
<body>
    <div class="wrapper fadeInDown">
        <h1>Connexion</h1>
        <div id="formContent">
            <div class="fadeIn first">
                <img src="https://logodix.com/logo/1713924.png" id="icon" alt="User Icon" />
            </div>

            <!-- Login Form -->
            <form method="post" action="../controllers/user.controller.php">
                <input placeholder="Entrer votre adresse e-mail" type="email" name="mail" class="fadeIn first" required>
                <input placeholder="Mot de passe" name="password" type="password" class="fadeIn second" required>
                <input name="connexion" type="hidden">
                <input value="Se connecter" class="fadeIn fourth" type="submit">
            </form>

            <div id="formFooter">
                <a href="user.inscription.view.php">Pas de compte ?</a>
            </div>

        </div>
    </div>
</body>
</html>


