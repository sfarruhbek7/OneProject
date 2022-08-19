<?php
$servername = "localhost";
$username = "root";
$password = "";
$db = "newdatabase";

$connection=mysqli_connect("$servername","$username","$password","$db");

if(!$connection){
    die("Xatolik".mysqli_connect_error());
}
?>