<?php
session_start();
include 'db_connexion.php';


if (isset($_POST["modification"])) {
    //modifier les identifiant 
    $requette = $conn->prepare("UPDATE client SET EMAIL= :email, TEL= :numero, ADRESSE= :adresse WHERE ID_CLIENT= :id_client");
    $requette->execute(
        array(
            'email' => $_POST['email'],
            'numero' => $_POST['phone'],
            'adresse' => $_POST['adresse'],  
            'id_client' => $_SESSION['id_client'], 
        )
    );
    //recuperer le dernier id 
    $query = $conn->prepare("SELECT * FROM client WHERE ID_CLIENT= :id_client");
    $query->execute(
        array(
            'id_client' => $_SESSION['id_client'],
        )
    );
    $donnee_client = $query->fetch();
    if(isset($donnee_client['EMAIL']) == $_POST['email']){
       
        header('location: ../profil.php?modif_success=true');
    }else{
        header('location: ../profil.php?modif_failed=true');
    }
   
}

