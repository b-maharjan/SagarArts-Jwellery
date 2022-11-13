<?php

$server = "localhost";
$user = "root";
$pass = "";
$database = "webhead";

$conn = mysqli_connect($server, $user, $pass, $database);

if (!$conn) {
    die("<script>alert('Connection Failed!!!!')</script>");
}

?>
