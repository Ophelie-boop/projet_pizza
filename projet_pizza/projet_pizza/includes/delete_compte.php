<?php
session_start();
include 'db_connexion.php';


if (isset($_POST['suppression']) && isset($_POST['num_client'])) {
  
    if ($_SESSION['id_client'] == $_POST['num_client']) {
        $requette = $conn->prepare("DELETE FROM client WHERE ID_CLIENT= :id_client");
        $requette->execute(
            array(
                'id_client' => $_SESSION['id_client'],
            )
        );
        session_unset();
        session_destroy();
        header('location:../index.php?delete_success=true');
    } else {
        header('location: ../profil.php?delete_failed=true');
    }
}

