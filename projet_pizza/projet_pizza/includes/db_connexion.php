<?php
$username = "SYSTEM";                  
$password = "ophelie";             
$db = "oci:dbname=localhost/XE";

try {
    $conn = new PDO($db,$username,$password); 
    ?>
    <script type='text/javascript'>
     alert("Réussite de la connexion");
    </script>
<?php } catch (Exception $e){
    die ('Erreur : '.$e->getMessage());
}

?>