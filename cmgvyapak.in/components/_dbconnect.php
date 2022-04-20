<?php
$username = "cmgvyapa_dbAdmin";
$password = "Ehsaas@Database18";
$database = "cmgvyapa_db";

$conn = mysqli_connect($username, $password, $database);

if (!$conn){
    // die("Sorry we failed to connect: ". mysqli_connect_error());
}
else{
    // echo "Connection was successful";
}

?>
