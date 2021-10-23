<?php
session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="css/style-voirPlus.css">
    <?php include("includes/style.php"); ?>
    <script src="https://kit.fontawesome.com/a076d05399.js"> </script>
    <title>Liste des Pizzas du Jour</title>
</head>

<body>

    <!-- #### header start ##### -->
    <?php include("includes/header.php"); ?>
    <!-- #### header start ##### -->

    <!-- #### banniere start #### -->
    <section class="banniere" id="banniere">
        <div class="contenu contenu-area">
            <h2>Liste des pizzas</h2>
            <p>Une large sélection de pizzas que vous allez adorer.</p>
            <!-- <a href="voirPlus.php" class="btn1">Parcourir Notre Menu</a> -->
            <!--    <a href="#" class="btn2">Reservation</a> -->
        </div>
    </section>
    <!-- #### banniere end #### -->

    <div id="fond">
        <div id="fond1">
            <form id="box" action="inscription.php" method="post">

                <span class="close"> &times; </span>
                <table>
                    <tr>
                        <td><label><b>Quantité:</b></label></td>
                        <td>
                            <select id="inputState" class="form-select" name="taille">
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                                <option>6</option>
                                <option>7</option>
                                <option>8</option>
                                <option>9</option>
                                <option>10</option>
                            </select>

                        </td>
                    </tr>
                    <tr>
                        <td> <label><b>Taille:</b></label></td>
                        <td>
                            <select id="inputState" class="form-select" name="taille">
                                <option>Petit</option>
                                <option>Moyen</option>
                                <option>Grand</option>
                            </select>

                        </td>
                    </tr>
                    <tr>
                        <td> <label><b>Pate a pizza:</b></label></td>
                        <td>
                            <select  class="form-select" name="fromage">
                                <!-- <option selected>...</option> -->
                                <option value="500">simple...500</option>
                                <option value="1500">double...1500</option>
                                <option value="0">non</option>
                            </select>

                        </td>
                    </tr>
                    <tr>
                        <td>

                        </td>
                        <td> <input type="submit" value="Valider" id="btn-valider"></td>
                    </tr>
                </table>
                <div class="row mb-3">
                    <!--  name="pizzaName" POUR RECUPERER LES NOMS DES PIZZAS DANS LA BASE-->
                    <h2 class="nomPizza" name="pizzaName"> </h2>
                </div>
                <!-- <div class="row mb-3">
                   
                    <div class="col-sm-6">
                        <input type="text" class="form-control" id="inputEmail3" placeholder="quantité" name="quantite" value="" required>
                    </div>
                </div> -->
                <div class="row mb-3">
                    <label for="inputEmail3" class="col-sm-6 col-form-label">Quantité</label>
                    <div class="col-sm-6">
                        <select id="inputState" class="form-select" name="taille">
                            <option selected>...</option>
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                            <option>6</option>
                            <option>7</option>
                            <option>8</option>
                            <option>9</option>
                            <option>10</option>
                        </select>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputPassword3" class="col-sm-6 col-form-label">Taille</label>
                    <div class="col-sm-6">
                        <select id="inputState" class="form-select" name="taille">
                            <option selected>...</option>
                            <option>Petite</option>
                            <option>Moyenne</option>
                            <option>Grande</option>
                        </select>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputEmail3" class="col-sm-6 col-form-label">Fromage</label>
                    <div class="col-sm-6">
                        <select id="inputState" class="form-select" name="fromage">
                            <option selected>...</option>
                            <option>simple...500</option>
                            <option>double...1500</option>
                            <option>non</option>
                        </select>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputEmail3" class="col-sm-6 col-form-label">Pate pizza</label>
                    <div class="col-sm-6">
                        <select id="inputState" class="form-select" name="pate">
                            <option selected>...</option>
                            <option>Epaisse</option>
                            <option>Fine</option>
                            <option>non</option>
                        </select>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputEmail3" class="col-sm-6 col-form-label">Demande</label>
                    <div class="col-sm -6">
                        <input type="text" class="form-control" id="inputEmail3" placeholder="demande spécial" name="detail">
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-6">
                        <p style="color: red;" class="result"></p>
                    </div>
                    <div class="col-6">
                        <button type="submit" class="btn btn-light col-sm-6" name="valider"> valider </button>
                    </div>
                    <p> NB : les ingrédients supplémentaires sont facturées 500 F par ingrédient et par produit. </p>
                </div>

            </form>


        </div>

    </div>


    <style type="text/css">
        #btn-valider {
            height: 30px;
            width: 100%;
            background-color: #ffffff;
            color: #000000;
            cursor: pointer;
            border-radius: 10px;
        }

        #fond {

            background: #252429;
            position: absolute;
            display: none;
            top: 0;
            left: 0;
            width: 100%;
            height: 100vh;
            z-index: 1;
            align-items: center;
            justify-content: center;
            background-color: white;
            background-color: rgba(0, 0, 0, 0.4);

        }

        #fond1 {
            width: 100%;
            height: 100%;
            display: inline;
        }

        .close {
            font-size: 30px;
            text-align: right;
            cursor: pointer;
        }

        .close:hover {
            opacity: 0.8;
        }

        td {
            padding: 30px;
        }

        #box {
            height: auto;
            width: 50%;
            color: white;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            padding: 20px;
            background: #fb911f;
            display: none;
        }

        select {
            width: 100%;
            height: 35px;
        }
    </style>

    <section class="menu" id="menu">
        <div class="titre">
            <h2 class="titre-texte"><span>P</span>izza Du Jour</h2>
            <p> Ailleurs vous mangez. Chez nous, Vous savourez !! Faites votre choix et vous n'allez pas le regretter. </p>
        </div>
        <div class="contenu">

            <div class="box">
                <div class="imbox">
                    <img src="./images/food.jpg" alt="">
                </div>
                <div class="text">
                    <h3>Sur plaque en céramique<a href="#" class="btn1">Commander maintenant</a></h3>
                </div>
            </div>
            <div class="box">
                <div class="imbox">
                    <img src="./images/vert.jpg" alt="">
                </div>
                <div class="text">
                    <h3>Des feuilles vertes au dessus<a href="#" class="btn1">Commander maintenant</a></h3>
                </div>
            </div>
            <div class="box">
                <div class="imbox">
                    <img src="./images/poivrons.jpg" alt="">
                </div>
                <div class="text">
                    <h3>Pizza aux poivrons verts <a href="#" class="btn1">Commander maintenant</a></h3>
                </div>
            </div>
            <div class="box">
                <div class="imbox">
                    <img src="./images/ronde.jpg" alt="">
                </div>
                <div class="text">
                    <h3>Pizza ronde cuite <a href="#" class="btn1">Commander maintenant</a></h3>
                </div>
            </div>


            <div class="box">
                <div class="imbox">
                    <img src="./images/pero.jpg" alt="">
                </div>
                <div class="text">
                    <h3>Pizza ronde brune <a href="#" class="btn1">Commander maintenant</a></h3>
                </div>
            </div>
            <div class="box">
                <div class="imbox">
                    <img src="./images/legumes.jpg" alt="">
                </div>
                <div class="text">
                    <h3>Pizza aux légumes en tranches <a href="#" class="btn1">Commander maintenant</a></h3>
                </div>
            </div>
            <div class="box">
                <div class="imbox">
                    <img src="./images/basilics.jpg" alt="">
                </div>
                <div class="text">
                    <h3>Pizza aux basilics <a href="#" class="btn1">Commander maintenant</a></h3>
                </div>
            </div>
            <div class="box">
                <div class="imbox">
                    <img src="./images/fromage.jpg" alt="">
                </div>
                <div class="text">
                    <h3>Pizza au fromage <a href="#" class="btn1">Commander maintenant</a></h3>
                </div>
            </div>
        </div>
        </div>
    </section>
    <?php include("includes/footer.php"); ?>
    <!-- #### script java #### -->
    <!-- commande -->
    <script type="text/javascript">
        let name = ["Pizza sur plaque en céramique", "Pizza avec des feuilles vertes au dessus", "Pizza aux poivrons verts", "Pizza ronde cuite", "Pizza ronde brune", "Pizza aux légumes en tranches ", "Pizza aux basilics", "Pizza au fromage"];
        for (let i = 0; i < 9; i++) {
            document.querySelectorAll(".btn1")[i].addEventListener("click", () => {
                document.getElementById("fond").style.display = "grid";
                document.getElementById("box").style.display = "grid";
                document.querySelector(".nomPizza").innerHTML = name[i - 1];
                let total = document.querySelector(".result");
                let select = document.querySelectorAll('select');
                //Changer les prix dans le tableau
                let prix = [2500, 5000, 7500];
                let fromage = [500, 1500, 2000];
                let pate = [1500, 1000, 0];
                let demande_special = [500];
                let resultat;
                //-------------------------------
                total.textContent = "TOTAL = " + parseInt(select[0].value) * prix[0] + "FCFA";

                select[0].addEventListener('change', () => {
                    switch (select[1].value) {
                        case "Petit":
                            resultat = parseInt(select[0].value) * prix[0];
                            total.textContent = "TOTAL = " + resultat + "FCFA";
                            break;
                        case "Moyen":
                            total.textContent = "TOTAL = " + parseInt(select[0].value) * prix[1] + "FCFA";
                            break;
                        case "Grand":
                            total.textContent = "TOTAL = " + parseInt(select[0].value) * prix[2] + "FCFA";
                            break;
                    }
                })
                select[1].addEventListener('change', () => {
                    switch (select[1].value) {
                        case "Petit":
                            total.textContent = "TOTAL = " + parseInt(select[0].value) * prix[0] + "FCFA";
                            break;
                        case "Moyen":
                            total.textContent = "TOTAL = " + parseInt(select[0].value) * prix[1] + "FCFA";
                            break;
                        case "Grand":
                            total.textContent = "TOTAL = " + parseInt(select[0].value) * prix[2] + "FCFA";
                            break;
                    }
                })
                
                select[0].addEventListener('change', () => {
                    switch (select[2].value) {
                        case "500":
                            resultat = (parseInt(select[0].value) * prix[1] )+( parseInt(select[0].value) * 500);
                            break;
                        case "1500":
                            resultat = (parseInt(select[0].value) * prix[1] )+( parseInt(select[0].value) * 1500);
                            total.textContent = "TOTAL = " + resultat + "FCFA";
                            break;
                        case "0":
                            resultat = (parseInt(select[0].value) * prix[1] )+( parseInt(select[0].value) * 1);
                            total.textContent = "TOTAL = " + resultat + "FCFA";
                            break;
                    }
                })
                select[1].addEventListener('change', () => {
                    switch (select[2].value) {
                        case "500":
                            resultat = parseInt(select[0].value) * prix[0] + parseInt(select[0].value) * 1500;
                            total.textContent = "TOTAL = " + resultat + "FCFA";
                            break;
                        case "1500":
                            resultat = parseInt(select[0].value) * prix[1] + parseInt(select[0].value) * 500;
                            total.textContent = "TOTAL = " + resultat + "FCFA";
                            break;
                        case "0":
                            resultat = parseInt(select[0].value) * prix[2] + parseInt(select[0].value) * 0;
                            total.textContent = "TOTAL = " + resultat + "FCFA";
                            break;
                    }
                })
              
                select[3].addEventListener('change', () => {
                    switch (select[1].value) {
                        case "Epaisse":
                            total.textContent = "TOTAL = " + parseInt(select[0].value) * pate[0] + "FCFA";
                            break;
                        case "Fine":
                            total.textContent = "TOTAL = " + parseInt(select[0].value) * pate[1] + "FCFA";
                            break;
                        case "non":
                            total.textContent = "TOTAL = " + parseInt(select[0].value) * pate[2] + "FCFA";
                            break;
                    }
                })

            })


            document.querySelector(".close").addEventListener("click", () => {
                document.getElementById("box").style.display = "none";
                document.getElementById("fond").style.display = "none";
            })


            window.onclick = function(event) {
                if (event.target == document.getElementById("fond")) {
                    document.getElementById("box").style.display = "none";
                    document.getElementById("fond").style.display = "none";
                }
            }

        }
    </script>
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

</body>

</html>