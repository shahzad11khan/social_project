<?php

$servername="localhost";
$username="root";
$password="";
$dbname="social";
$con=new mysqli($servername,$username,$password,$dbname);

if ($con->connect_error){
die("not connected".$con->connect_error);
}
//echo "connected";
?>