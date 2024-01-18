<?php
$server="localhost";
$user="root";
$pass="";
$database="travel";
$con=new mysqli($server,$user,$pass,$database);


if(!isset($con))
{
    die ("Database Not Found");
}

?>