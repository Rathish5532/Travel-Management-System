<?php
include('DBCONNECT.php');


extract($_POST);
$query="";
$query="select * from place_details where LOWER (placename)=LOWER ('".$pname."')";
$res=$con->query($query);
if($res->num_rows>0){
    echo 1;
}else{
    $query="";
    $query="insert into place_details (placename,price) values ('$pname',$price)";
    $con->query($query);
    echo 2;
}

?>