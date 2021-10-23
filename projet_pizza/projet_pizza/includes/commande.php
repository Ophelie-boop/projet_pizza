<?php
session_start();
include 'db_connexion.php';


if (isset($_POST["valider"]) && isset($_POST['taille']) && isset($_POST['fromage']) && isset($_POST['pate'])) {
   
    $requette = $conn->prepare("INSERT INTO commandes(id_client,)VALUES id_client= :id_client");
    $requette->execute(
        array(
            'id_client' => $_POST["num_client"],
        )
    );
    $donnee_client = $requette->fetch();
    echo $donnee_client['ID_CLIENT'];
    if(isset($donnee_client['ID_CLIENT']) == $_POST["num_client"]){
        session_start();
        $_SESSION['id_client'] = $donnee_client['ID_CLIENT'];
        $_SESSION['nom'] = $donnee_client['NOM'];
        $_SESSION['tel'] = $donnee_client['TEL'];
        $_SESSION['adresse'] = $donnee_client['ADRESSE'];
        $_SESSION['email'] = $donnee_client['EMAIL'];

        header('location: ../index.php?account_sucess=true');
    }else{
        header('location: ../index.php?account_failed=true');
    }
   
}

