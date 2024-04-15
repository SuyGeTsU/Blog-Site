<?php

$server = "localhost";
$username = "root";
$password = "";
$db = "proj_blog";

$conn = mysqli_connect($server, $username, $password, $db);

if (!$conn) {
   echo "<script>alert('Connection Failed')</script>";
}
?>