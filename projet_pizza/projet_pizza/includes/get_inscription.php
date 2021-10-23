<?php

$username = "SYSTEM";                  // Use your username
$password = "ophelie";             // and your password
// $database = "localhost/XE";   // and the connect string to connect to your database
$db = "oci:dbname=localhost/XE";

try {
    $conn = new PDO($db,$username,$password); 
    //echo "Réussite de la connexion";?>
    <script type='text/javascript'>
     alert("Réussite de la connexion");
    </script>
<?php } catch (Exception $e){
    die ('Erreur : '.$e->getMessage());
}

if (isset($_POST["inscription"]) && isset($_POST["nom"]) && isset($_POST["email"])) {
    $nom=$_POST["nom"];
    $email = $_POST["email"];
    $numero = (int) $_POST["phone"];
    $adresse_livraison = $_POST["adresse"];
    
    $connexion = oci_connect($username, $password, $database);
    if (!$connexion) {
        $m = oci_error();
        trigger_error('Could not connect to database: ' . $m['message'], E_USER_ERROR);
    }

    $query = "insert into client (NOM,TEL,ADRESSE,EMAIL) VALUES ('$nom',$numero,'$adresse_livraison','$email')";

    $query_prepare = oci_parse($connexion, $query);
    if (!$query_prepare) {
        $message = oci_error($connexion);
        trigger_error('Could not parse statement: ' . $message['message'], E_USER_ERROR);
    }

    $query_execute = oci_execute($query_prepare);
    if (!$query_execute) {
        $message = oci_error($query_prepare);
        trigger_error('Could not execute statement: ' . $message['message'], E_USER_ERROR);
    }else{
        $requet= "select LAST_INSE";
        
        $requet_prepare= oci_parse($connexion,$requet);
        if (!$requet_prepare) {
            $message = oci_error($connexion);
            trigger_error('Could not parse statement: ' . $message['message'], E_USER_ERROR);
        }
    
        $requet_execute = oci_execute($requet_prepare);
        if (!$requet_execute) {
            $message = oci_error($requet_prepare);
            trigger_error('Could not execute statement: ' . $message['message'], E_USER_ERROR);
        }else{
            $row=oci_fetch($requet_execute,OCI_ASSOC);
            echo $row["id_client"];

        }

    }

    // deuxieme requette selectionné le contenu de la table et l'afficher  
    // $req = "select * from compte";
    // $prepa = oci_parse($conn, $req);
    // if (!$prepa) {
    //     $m = oci_error($conn);
    //     trigger_error('Could not parse statement: ' . $m['message'], E_USER_ERROR);
    // }
    // $exc = oci_execute($prepa);
    // if (!$exc) {
    //     $m = oci_error($prepa);
    //     trigger_error('Could not execute statement: ' . $m['message'], E_USER_ERROR);
    // } else {
    //     echo "requette2 effectuer";
    // }

    //afficher dans un tableau 
    // echo "<table border='1'>\n";
    // $ncols = oci_num_fields($prepa);
    // echo "<tr>\n";
    // for ($i = 1; $i <= $ncols; ++$i) {
    //     $colname = oci_field_name($prepa, $i);
    //     echo "  <th><b>" . htmlspecialchars($colname, ENT_QUOTES | ENT_SUBSTITUTE) . "</b></th>\n";
    // }
    // echo "</tr>\n";
    // while (($row = oci_fetch_array($prepa, OCI_ASSOC + OCI_RETURN_NULLS)) != false) {
    //     echo "<tr>\n";
    //     foreach ($row as $item) {
    //         echo "<td>";
    //         echo $item !== null ? htmlspecialchars($item, ENT_QUOTES | ENT_SUBSTITUTE) : "&nbsp;";
    //         echo "</td>\n";
    //     }
    //     echo "</tr>\n";
    // }
    // echo "</table>\n";
    
}

?>
