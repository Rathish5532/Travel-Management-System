<?php 
// Retrieving data from the submitted form using the POST method
$connection = mysqli_connect('localhost','root','','book_db');
//  hostname ('localhost'), username ('root'), password (''), and the database name ('book_db').


if(isset($_POST['send'])){
// 'send' parameter using the POST method.
    
    //  $name = $_POST['name'];
    //  $email = $_POST['email'];
    //  $phone = $_POST['phone'];
    //  $address = $_POST['address'];
     $location = $_POST['location'];
     $guest = $_POST['guest'];
     $arrivals = $_POST['arrivals'];
     $leaving = $_POST['leaving'];
    //  $name = $_POST['name'];

 // Creating an SQL query to insert data into the 'book_form' table
     $request = " insert into book_form(location,guest,arrivals,leaving)
      values('$location','$guest','$arrivals','$leaving')";

 // Executing the SQL query using the mysqli_query function
    $query=mysqli_query($connection,$request);
    if($query){
        $_SESSION['ad']=$aid;
        header('location:index1.php');

    }

 // Redirecting the user to the 'book.php' page after the data is inserted
    // header('location:book.php');

   

}else{
    // Displaying an error message if the 'send' parameter is not set
    echo 'somthing went wrong tryagain';
}

?>