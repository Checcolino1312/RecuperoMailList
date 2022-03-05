


<?php 

$servername = "31.11.39.64";
$username = "Sql1592799@62.149.186.129";
$password = "Francesco.2022";
$databasename = "Sql1592799_2";

//connessione
$connection = new mysqli($servername,$username,$password,
$databasename);

//test connessione
if($connection->connect_error){
    die("Errore di connessione:" . $connection->connect_error);
}



?>
