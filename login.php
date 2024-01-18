<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="login.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>
<body>
   <form action="signin.php" method="post">
    <img src="image1/icons8-user-96.png" alt="avatar">

    <h1>Signin</h1>
              <label for="uname"><b>Email</b></label>
              <input type="text" name="email" class="box" placeholder="Enter email" name="uemail" required>
              <label for="upass"><b>Password</b></label>
              <input type="password" name="password" class="box"  placeholder="Enter password" name="upass" required>
        
     <input type="submit" value="SIGNIN" name="submit" id="submit">
     <div class="one-col">
      <div class="one">
          <label for="#"><a href="#">Forget Password</a></label>
      </div> 
  </div>
  <div class="one-col">
      <label for="">New Member? <a href="signup.php">Create an Account </a></label>

  </div>


   </form>
</body>
</html>