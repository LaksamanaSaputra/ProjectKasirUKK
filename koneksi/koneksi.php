<?php 
$server = "localhost";
$user = "root" ;
$password = "";
$database = "db_kasirmbot";

$con = new mysqli ($server, $user, $password, $database);

if (!$con) {
    die("<script>alert('Tidak terhubung dengan database')</script>");
}
?>