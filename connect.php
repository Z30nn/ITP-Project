<?php
$SERVER = "localhost";
$user = "id22170288_hotel";
$password = "Aa_12345";
$db_name = "id22170288_hotel";

$conn = mysqli_connect($SERVER, $user, $password, $db_name);
if (mysqli_connect_errno()) {
    die("not connected". mysqli_connect_error());

}

?>