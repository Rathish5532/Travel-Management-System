<?php
include('DBCONNECT.php');

$action=$_GET['action'];
if($action === 'deleteplace'){
    extract ($_POST);
    $query="";
    $query="delete from place_details where id=".$id;
    $res=$con->query($query);
    if($res){
        echo 1;
    }
}
if($action === 'editplace'){
    extract($_POST);
    $query="";
    $query="update place_details set price= '".$price."'where id=".$id;
    $res=$con->query($query);
    if($res){
        echo 1;
    }
}



?>