


<?php 

$servername = "free-tier13.aws-eu-central-1.cockroachlabs.cloud";
$username = "oraspot";
$password = "26257;
$databasename = "starry-pigeon-425.defaultdb";

//connessione
$connection = new mysqli($servername,$username,$password,
$databasename);

//test connessione
if($connection->connect_error){
    die("Errore di connessione:" . $connection->connect_error);
}



?>
