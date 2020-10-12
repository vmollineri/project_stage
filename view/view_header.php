<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top background-color" style="border-radius: 0">
        <button class="navbar-toggler custom-toggler" type="button" data-toggle="collapse"
                data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="<?php echo $hrefIndex ?>">Accueil <span
                                class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Présentation</a>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto">
                <?php
                if (isset($_SESSION['idUser'])) {
                    echo '<li class="nav-item">
                          <a class="nav-link" href="' . $hrefProfile . '">Mon profil</a>
                          </li>
                          
                          <li class="nav-item">
                          <a class="nav-link" href="' . $hrefDeconnexion . '">Deconnexion</a>
                          </li>';
                } else {
                    echo '<li class="nav-item">
                          <a class="nav-link" href="' . $hrefConnexion . '">Connexion</a>
                          </li>
                          
                          <li class="nav-item">
                          <a class="nav-link" href="' . $hrefInscription . '">Inscription</a>
                          </li>';
                }
                ?>
            </ul>
        </div>
    </nav>
</header>