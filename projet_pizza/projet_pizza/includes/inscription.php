<?php
session_start();
include 'db_connexion.php';


if (isset($_POST["inscription"])) {
    //inserer des donnee dans la table 
    $req = $conn->prepare("INSERT INTO client (NOM,TEL,ADRESSE,EMAIL) VALUES (:nom, :numero, :adresse, :email)");
    $req->execute(
        array(
            'nom' => $_POST['nom'],
            'numero' => $_POST['phone'],
            'adresse' => $_POST['adresse'],
            'email' => $_POST['email']
        )
    );
    //recuperer le dernier id 
    $query = $conn->query("SELECT max(id_client) FROM client");
    $result = $query->fetchcolumn();
    $num_client = (int) $result;
    //recuperer les donnee lier a cette id 
    $requette = $conn->prepare("SELECT * FROM client WHERE id_client= :id_client");
    $requette->execute(
        array(
            'id_client' => $num_client,
        )
    );
    $donnee_client = $requette->fetch();
    echo $donnee_client['ID_CLIENT'];
    if(isset($donnee_client['ID_CLIENT']) == $num_client){
        session_start();
        $_SESSION['id_client'] = $donnee_client['ID_CLIENT'];
        $_SESSION['nom'] = $donnee_client['NOM'];
        $_SESSION['tel'] = $donnee_client['TEL'];
        $_SESSION['adresse'] = $donnee_client['ADRESSE'];
        $_SESSION['email'] = $donnee_client['EMAIL'];

        header('location: ../index.php?account_sucess=true');
    }else{
        echo 'null';
    }
   
}

