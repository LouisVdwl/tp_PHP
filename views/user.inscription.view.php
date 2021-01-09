<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <link rel="shortcut icon" type="image/ico" href="img/favicon.gif" />
    <link href="../assets/style1.css" rel="stylesheet">
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <title> Inscription </title>
</head>
<body>
    <div class="wrapper fadeInDown">
        <h1>Inscription</h1>
        <div id="formContent">
            <div class="fadeIn first">
                <img src="https://logodix.com/logo/1713924.png" id="icon" alt="User Icon" />
            </div>

            <!-- incrip Form -->
            <form method="post" action="../controllers/user.controller.php">
                <input placeholder="Entrer votre prénom" type="text" name="first_name" class="fadeIn first" required>
                <input placeholder="Entrer votre nom" type="text" name="name" class="fadeIn second" required>
                <input placeholder="Entrer votre adresse e-mail" type="email" name="mail" class="fadeIn third" required>
                <input placeholder="Mot de passe" name="password" type="password" class="fadeIn fourth" required>
                <input name="inscription" type="hidden">
                <input value="M'inscrire" type="submit" class="fadeIn fifth">
            </form>

            <div id="formFooter">
                <a href="user.connexion.view.php">Déjà un compte ?</a>
            </div>

        </div>
    </div>
</body>
</html>
