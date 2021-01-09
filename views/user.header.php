<?php
    require_once("../controllers/user.controller.php");
?>
<form>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="../views/car.list.view.php">Nos voitures <span class="sr-only">(current)</span></a>
                </li>
                <?php
                    if(is_admin()){
                        echo '
                        <li class="nav-item">
                            <a class="nav-link" href="../views/user.list.view.php">Liste des utilisateurs</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../views/location.list.view.php">Liste des locations</a>
                        </li>
                        ';
                    }
                ?>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Mon profil
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="../views/user.profil.view.php">Voir mon profil</a>
                        <a class="dropdown-item" href="../views/user.page.view.php">Mes locations</a>
                        <div class="dropdown-divider"></div>
                        <form method="post" action="../controllers/user.controller.php"><input name="disconnect" type="hidden"><input type="submit" value="Déconnexion" class="dropdown-item"></form>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
</form>
