<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title>
    <link rel="stylesheet" href="style1.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>
<body>
   <form  action="signup1.php" method="post">
    <img src="image2/icons8-user-96.png" alt="avatar">

    <h1>Signup</h1>
              <label for="uname"><b>UserName</b></label>
              <input type="text" name="name" class="box" placeholder="Enter name"  required>
              <label for="uname"><b>Email</b></label>
              <input type="text" name="email" class="box" placeholder="Enter email"  required>
              <label for="upass"><b>Password</b></label>
              <input type="password" name="password" class="box"  placeholder="Enter password"  required>
        
     <input type="submit" value="SIGNUP" name="submit" id="submit">
     <div class="one-col">
      <div class="one">
          <label for="#"><a href="#">Forget Password</a></label>
      </div> 
  </div>
  <div class="one-col">
      <label for=""> <a href="login.php">Already have an  Account </a></label>

  </div>


   </form>




   <script>
  
  $('#signup-from').submit(function(event){
    //Clicking on a "Submit" button, prevent it from submitting a form 
    //meaning that the default action that belongs to the event will not occur.
   event.preventDefault()      
   if($(this).find('.alert-danger').length > 0 )
			$(this).find('.alert-danger').remove();

    $.ajax({
			url:'ajax.php?action=signup',
			method:'POST',
			data:$(this).serialize(),
			error:err=>{
			console.log(err)
        $('.signInDiv1').prepend('<div class="alert alert-danger">Error.</div>')
			},
			success:function(resp){
				if(resp == 1){
					 $('.signInDiv1').prepend('<div class="alert alert-danger">User is already exist.</div>')
				}
        else{
          alert("User saved successfully.");
          location.href ='adminhome.php';
          
				}
			}
		})

  });
  </script>
</body>
</html>