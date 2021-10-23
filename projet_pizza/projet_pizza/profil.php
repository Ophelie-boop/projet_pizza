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

    <section class="banniere" id="banniere">
        <div class="contenu contenu-area">
            <h2>Profil client</h2>
            <!-- <p>Une large sélection de pizzas que vous allez adorer.</p> -->
            <a href="index.php" class="btn1">Accueil</a>
            <!--    <a href="#" class="btn2">Reservation</a> -->
        </div>
    </section>

    <section class="container">
        <div class="row row-area ">
            <div class="col-12">
                <div class="d-flex align-items-start">
                    <div class="row rows-area">
                        <div class="col-3">
                            <div class=" list-area p-3 nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">

                                <button class="nav-link active" id="v-pills-home-tab" data-bs-toggle="pill" data-bs-target="#v-pills-home" type="button" role="tab" aria-controls="v-pills-home" aria-selected="true">
                                    Modifier les informations
                                </button>
                                <button class="nav-link" id="v-pills-profile-tab" data-bs-toggle="pill" data-bs-target="#v-pills-profile" type="button" role="tab" aria-controls="v-pills-profile" aria-selected="false">
                                    Supprimer mon compte
                                </button>
                                <button class="nav-link" id="v-pills-messages-tab" data-bs-toggle="pill" data-bs-target="#v-pills-messages" type="button" role="tab" aria-controls="v-pills-messages" aria-selected="false">
                                    Voir mes commandes
                                </button>
                            </div>
                        </div>
                        <div class="col-9 ">
                            <div class=" tab-area p-3 tab-content" id="v-pills-tabContent">
                                <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                                    <div class="container reservation-areas">
                                        <div class="tab-footer row">
                                            <a class="tab-link active" data-ref="nouveau_client" href="javascript:void(0)">
                                                <h3 class="text-center"> Modification </h3> 
                                            </a>
                                        </div>
                                        <div class="tab-body" data-id="nouveau_client">
                                            <form method="post" action="includes/modif_info.php" class="justify-content-center p-3">
                                                <?php
                                                if (isset($_GET['modif_success']) && isset($_SESSION['id_client'])) {
                                                ?>
                                                    <div class="row rows-area">
                                                        <div class="alert alert-success" role="alert">
                                                            Modifer avec succes
                                                        </div>
                                                    </div>
                                                    <?php

                                                } else {
                                                    if (isset($_GET['modif_failed=true'])) {
                                                    ?>
                                                        <div class="row rows-area">
                                                            <div class="alert alert-danger" role="alert">
                                                                Echec de la modification
                                                            </div>
                                                        </div>
                                                <?php
                                                    }
                                                }
                                                ?>
                                                <div class="row rows-area">
                                                    <input type="email" class="input" placeholder="email" name="email" required>
                                                </div>
                                                <div class="row rows-area">
                                                    <input type="text" class="input" placeholder="téléphone" name="phone" required>
                                                </div>
                                                <div class="row rows-area mt-15">
                                                    <input type="text" class="input" placeholder="adresse de livraison" name="adresse" required>
                                                </div>
                                                <input type="submit" class="btn" value="Modifier" name="modification" onclick="validate()">
                                            </form>
                                        </div>
                                    </div>
                                </div>

                                <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                                    <div class="container reservation-areas">
                                        <!-- #### supression ###### -->
                                        <div class="tab-footer row">
                                            <a class="tab-link" data-ref="suppression" href="javascript:void(0)">
                                                <h3 class="text-center"> Suppression </h3>
                                            </a>
                                        </div>
                                        <div class="tab-body" data-id="suppression">
                                            <form method="post" action="includes/delete_compte.php" class="justify-content-center p-3">
                                                <?php
                                                if (isset($_GET['delete_failed'])) {
                                                ?>
                                                    <div class="row rows-area">
                                                        <div class="alert alert-danger" role="alert">
                                                            Le numero que vous avez saisie n'est pas le bon
                                                        </div>
                                                    </div>
                                                <?php
                                                }
                                                ?>
                                                <div class="row rows-area">
                                                    <input type="text" class="input" placeholder="votre numero client" name="num_client" required>
                                                </div>
                                                <input type="submit" class="btn" value="Supprimer" name="suppression" onclick="validate()">
                                            </form>
                                        </div>
                                    </div>
                                </div>

                                <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam necessitatibus quas dolorum quasi voluptas autem deleniti repellat, commodi accusamus a ad inventore animi ab similique, quos facere tenetur officiis incidunt!...</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- #### footer #### -->
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