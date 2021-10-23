<?php
session_start();
?>
<!DOCTYPE html>
<html lang="fr">

<head>


    <?php include("includes/style.php"); ?>
    <link rel="stylesheet" href="css/connect.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"> </script>

    <title>Le Top 1 des Pizzerias</title>
</head>

<body>

    <!-- #### header start ##### -->
    <?php include("includes/header.php"); ?>
    <!-- #### header start ##### -->

    <?php include("includes/baniere.php"); ?>

    <!-- #### apropos start #### -->
    <section class="apropos" id="apropos">
        <div class="row rows-area">
            <div class="col50">
                <h2 class="titre-texte"><span>A</span> Propos De Nous</h2>
                <p>Venez éveiller vos papilles chez Nous ! Depuis notre ouverture en 2019, notre mission est de ravir le palais des habitants merveilleux de <b>Dakar</b>. Nos créations originales et nos spécialités dépasseront à coup sûr vos attentes.
                    Nous sommes passionnés par la gastronomie et nous espérons continuer cette tradition de nombreuses années encore. Nos délices sont à ne pas s'en passer !
                </p>
                <br>
                <p>Nous sommes ouvert du <b>Lundi au Samedi de 10h à 23h</b>.</p>
            </div>
            <div class="col50">
                <div class="img">
                    <img src="images/droite.jpg" alt="image">
                </div>
            </div>
        </div>
    </section>
    <!-- #### apropos end #### -->


    <!-- #### menu start #### -->
    <section class="menu" id="menu">
        <div class="titre" id="voirMenu">
            <h2 class="titre-texte">Les Oeuvres de nos <span>C</span>hefs</h2>
            <p>Tout pour une dégustation sans pareil. </p>
        </div>
        <div class="contenu">
            <div class="box">
                <div class="imbox">
                    <img src="images/ok.jpg" alt="Pizza au pepperoni et fromage">
                </div>
                <div class="text">
                    <h3>Pizza au pepperoni et fromage <a href="#" class="btn1">A partir de 10$</a></h3>
                </div>
            </div>
            <div class="box">
                <div class="imbox">
                    <img src="images/bulbul.jpg" alt="Pizza aux poivrons Verts et Rouges">
                </div>
                <div class="text">
                    <h3>Pizza aux poivrons V/R <a href="#" class="btn1">A partir de 10$</a></h3>
                </div>
            </div>
            <div class="box">
                <div class="imbox">
                    <img src="images/tomate.jpg" alt="Pizza au fromage et à la Tomate">
                </div>
                <div class="text">
                    <h3>Pizza au fromage et à la Tomate <a href="#" class="btn1">A partir de 10$</a></h3>
                </div>
            </div>
            <div class="box">
                <div class="imbox">
                    <img src="images/pizza.jpg" alt="Pizza Special">
                </div>
                <div class="text">
                    <h3>Pizza Special <a href="#" class="btn1">A partir de 10$</a></h3>
                </div>
            </div>

        </div>
        </div>
        <?php

        if (isset($_SESSION['id_client'])) {
        ?>
            <div class="titre">
                <a href="voirPlus.php" class="btn1">Commander une pizza</a>
            </div>
        <?php
        } else {
        ?>
            <div class="titre">
                <a href="index.php#Reservation" class="btn1">Commander une pizza</a>
            </div>
        <?php
        }
        ?>
    </section>
    <!-- #### menu end #### -->


    <!-- #### expert start #### -->
    <section class="expert" id="expert">
        <div class="titre">
            <h2 class="titre-texte">Nos <span>E</span>xperts</h2>
            <p>Des Professionnels et passionnés de la gastronomie. Nos meilleurs cuisiniers à tout jamais !</p>
        </div>
        <div class="contenu">
            <div class="box">
                <div class="imbox">
                    <img src="images/equipe5.jpg" alt="">
                </div>
                <div class="text">
                    <h3>Franck Leroi</h3>
                </div>
            </div>
            <div class="box">
                <div class="imbox">
                    <img src="images/equipe1.jpg" alt="">
                </div>
                <div class="text">
                    <h3>Thomas Jackson</h3>
                </div>
            </div>
            <div class="box">
                <div class="imbox">
                    <img src="images/equip2.jpg" alt="">
                </div>
                <div class="text">
                    <h3>Antonio Deschamps</h3>
                </div>
            </div>
            <div class="box">
                <div class="imbox">
                    <img src="images/equip4.jpg" alt="">
                </div>
                <div class="text">
                    <h3>Marie Dubois</h3>
                </div>
            </div>
        </div>
        </div>
    </section>
    <!-- #### expert end #### -->

    <!-- #### temoignage start #### -->
    <section class="temoignage" id="temoignage">
        <div class="titre blanc">
            <h2 class="titre-texte">Que Disent Nos <span>C</span>lients</h2>
            <p style="color: black;"><em>Nos meilleurs avis clients de la semaine.</em> </p>
        </div>
        <div class="contenu">
            <div class="box">
                <div class="imbox">
                    <img src="images/t1.jpeg" alt="">
                </div>
                <div class="text">
                    <p>Un choix de pizza unique comme la chèvre châtaigne miel qui est simplement une tuerie ou la westside qui explose en bouche. De loin une des meilleures pizzeria que je connaisse..</p>
                    <h3>Didier</h3>
                </div>
            </div>
            <div class="box">
                <div class="imbox">
                    <img src="images/t2.jpg" alt="">
                </div>
                <div class="text">
                    <p>Excellentes pizzas comme son nom l'indique Miam-Miam, avec beaucoup de choix selon les goûts de chacun.Vous pouvez y allez les yeux fermés.
                        Merci au chef de faire de si bonnes pizzas..</p>
                    <h3>Vivien</h3>
                </div>
            </div>
            <div class="box">
                <div class="imbox">
                    <img src="images/t3.jpg" alt="">
                </div>
                <div class="text">
                    <p>Après avoir été orientés par des clients, nous n’avons pas regretté notre commande! Pizzas goûteuses, nombreux choix et personnels souriants!
                        Nous recommandons sans hésitation.</p>
                    <h3>Damien</h3>
                </div>
            </div>
        </div>
        <div class="titre">
            <a href="connect.php" class="btn1">Donner votre Avis</a>
        </div>
    </section>
    <!-- #### temoignage end #### -->

    <!-- #### contact start #### -->
    <section class="contact" id="contact">
        <div class="titre noir">
            <h2 class="titre-text" id="Reservation"><span>C</span>ontact </h2>
            <p>Vos coordonnées svp:</p>
        </div>
        <div class="contactform">
            <h3> </h3>
            <div class="container reservation-area justify-content-center">
                <div class="user-icon" id="user_contact">
                    <i class="fas fa-user"></i>
                </div>
                <!-- #### Nouveaux ###### -->
                <div class="tab-body" data-id="nouveau_client">
                    <form method="post" action="includes/inscription.php">
                        <?php
                        if (isset($_GET['account_sucess']) && isset($_SESSION['id_client'])) {
                        ?>
                            <div class="row rows-area ">
                                <div class="col-12">
                                    <div class="alert alert-success" role="alert">
                                        Votre numero client est le <?php echo $_SESSION['id_client']; ?>
                                    </div>
                                </div>
                            </div>
                        <?php

                        } else {
                        ?>
                            <div class="row rows-area ">
                                <input type="text" class="input" placeholder="nom" name="nom" required>
                            </div>
                            <div class="row rows-area">
                                <input type="email" class="input" placeholder="email" name="email" required>
                            </div>
                            <div class="row rows-area">
                                <input type="text" class="input" placeholder="téléphone" name="phone" required>
                            </div>
                            <div class="row rows-area">
                                <input type="text" class="input" placeholder="adresse de livraison" name="adresse" required>
                            </div>
                            <input type="submit" class="btn" value="s'inscrire" name="inscription" onclick="validate()">

                        <?php
                        }
                        ?>
                    </form>
                </div>
                <!-- #### connexion ###### -->
                <div class="tab-body" data-id="ancien_client">
                    <form method="post" action="includes/get_connexion.php">
                        <?php
                        if (isset($_GET['account_failed'])) {
                        ?>
                            <div class="row rows-area ">
                                <div class="col-12">
                                    <div class="alert alert-danger" role="alert">
                                        Ce compte n'existe pas
                                    </div>
                                </div>
                            </div>
                        <?php
                        }
                        ?>
                        <div class="row rows-area">
                            <input type="text" class="input" placeholder="numero client" name="num_client" required>
                        </div>
                        <input type="submit" class="btn" value="valider" name="connexion">
                    </form>
                </div>

                <div class="tab-footer">
                    <a class="tab-link active" data-ref="nouveau_client" href="javascript:void(0)">Nouveau membre </a>
                    <a class="tab-link" data-ref="ancien_client" href="javascript:void(0)">Ancien membre</a>
                </div>
            </div>
        </div>
    </section>
    <!-- #### contact end #### -->

    <?php include("includes/footer.php"); ?>


    <!-- #### script java #### -->
    <!-- header -->
    <script type="text/javascript">
        window.addEventListener('scroll', function() {
            const header = document.querySelector('header');
            header.classList.toggle("sticky", window.scrollY > 0);
        });

        function toggleMenu() {
            const tmenuToggle = document.querySelector('.menuToggle');
            const navbar = document.querySelector('.navbar');
            navbar.classList.toggle('active');
            menuToggle.classList.toggle('active');
        }
    </script>
    <script src="js/connect.js"></script>
</body>

</html>