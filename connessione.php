


<?php 

$servername = "sql11.freesqldatabase.com";
$username = "sql11406659";
$password = "k7YJyqZ76z";
$databasename = "sql11406659";

//connessione
$connection = new mysqli($servername,$username,$password,
$databasename);

//test connessione
if($connection->connect_error){
    die("Errore di connessione:" . $connection->connect_error);
}



?>