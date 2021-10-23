<!-- #### header start ##### -->
<header>
    <a href="#" class="logo">Miam-Miam <span>Pizza</span> <br>
        <p class="slogan">Le top 1 des pizzerias</p>
    </a>

    <div class="menuToggle"></div>
    <div class="classynav">
        <ul class="navbar">

            <li><a href="index.php#banniere">Accueil</a></li>
            <li><a href="index.php#apropos">A propos</a></li>
            <li><a href="index.php#menu">Menu</a></li>
            <li><a href="index.php#expert">Experts</a></li>
            <li><a href="index.php#temoignage">Témoignages</a></li>
            <?php
            if (isset($_SESSION['id_client'])) {
            ?>
                <li>
                    <div class="dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="far fa-user-circle"></i><?php echo $_SESSION['nom'] ?>
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                            <li>
                                <a class="dropdown-item" href="profil.php">Profil</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="includes/deconnexion.php">deconnexion</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <a href="voirPlus.php" class="btn-reserve">Reservation</a>
            <?php
            } else {
            ?>
                <a href="index.php#user_contact" class="btn-reserve">Se Connecter</a>
            <?php
            }
            ?>
        </ul>
    </div>

</header>
<!-- #### header start ##### -->