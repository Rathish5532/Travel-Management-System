<?php
// Retrieving data from the submitted form using the POST method
$connection= mysqli_connect('localhost','root','','travel');
//  hostname ('localhost'), username ('root'), password (''), and the database name ('travel').

if(isset($_POST['submit'])){
// 'send' parameter using the POST method
$email=$_POST['email'];
$pass=$_POST['password'];
}

// Creating an SQL query to insert data into the 'login' table

$request="insert into signin(email,password) values('$email','$pass')";

$query=mysqli_query($connection,$request);
    if($query){
        // 
        $_SESSION['ad']=$aid;
        header('location:booking.php');

    }
    // Redirecting the user to the 'book.php' page after the data is inserted
    // header('location:login.php');

   

else{
    // Displaying an error message if the 'send' parameter is not set
    echo 'somthing went wrong tryagain';
}




?>