<?php

$database_server_name = "localhost";
$database_user_name = "root";
$database_password = "";
$database_name = "mmb_website";

// Χρησιμοποιείται για τη σύνδεση με τη βάση δεδομένων
$conn = mysqli_connect($database_server_name, $database_user_name, $database_password, $database_name);

if ($conn == FALSE) {
    die("Connection Unsuccessful");
}
// Επιστρέφει ένα αντικείμενο που αντιστοιχεί τη σύνδεση 
// Εάν η σύνδεση αποτύχει τότε επιστρέφει FALSE

?>