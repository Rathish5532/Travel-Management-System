<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="style.css">

    <!-- Bootstrap Link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Bootstrap Link -->


    <!-- Font Awesome Cdn -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <!-- Font Awesome Cdn -->


    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">
    <!-- Google Fonts -->
</head>
<body>
       <!-- Navbar Start -->
    <nav class="navbar sticky-top navbar-expand-lg" id="navbar">
        <div class="container-fluid">
          <a class="navbar-brand" href="index.php" id="logo"><span>T</span>ravel</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
            <span><i class="fa-solid fa-bars"></i></span>
          </button>
          <div class="collapse navbar-collapse" id="mynavbar">
            <ul class="navbar-nav ">
              <li class="nav-item">
                <a class="nav-link active" href="index.php">Home</a>
              </li>
               <li class="nav-item">
                <a class="nav-link" href="booking.php">Booking</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="packages.php">Packages</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="services.php">Services</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="gallery.php">Gallery</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="about.php">About</a>
              </li> 

            </ul>
            <div class="navbar-nav ms-auto">              	
                <li class="nav-item">
                  <a class="nav-link" href="index.php">Logout</a>
              </div>

         </div>
     </div>
 </nav>
    <!-- Navbar End -->


   <!-- About Start -->
     <section class="about" id="about">
      <div class="container">

        <div class="main-txt">
          <h1>About <span>Us</span></h1>
        </div>

        <div class="row" style="margin-top: 50px;">

          <div class="col-md-6 py-3 py-md-0">
            <div class="card">
              <img src="./images/about-img.png" alt="">
            </div>
          </div>

          <div class="col-md-6 py-3 py-md-0">
            <h2>How Travel Agency Work</h2>
            <p> dolor sit amet consectetur adipisicing elit. Provident perferendis dolorem, numquam earum at nam beatae voluptate natus consectetur facere, saepe cupiditate ut exercitationem deserunt, facilis quam perspiciatis autem iure illo harum minima. Quas, vitae aperiam laudantium alias asperiores nulla rerum, nihil eveniet perferendis sint illum accusamus officiis aliquam nam.</p>
            <button id="about-btn"><a href="https://www.novo-monde.com/en/travel-around-world/">Read More...</a></button>
          </div>

        </div>

      </div>
    </section>
    <!-- About End -->

 <!-- Footer Start -->
     <footer id="footer" >
      <h1><span>T</span>ravel</h1>
      <div class="social-links">
        <i class="fa-brands fa-twitter"></i>
        <i class="fa-brands fa-facebook"></i>
        <i class="fa-brands fa-instagram"></i>
        <i class="fa-brands fa-youtube"></i>
        <i class="fa-brands fa-pinterest-p"></i>
      </div>
      <div class="credit">
        <p>Owner of <a href="https://earth3dmap.com/">Around the world</a></p>
      </div>
      
    </footer> 
    <!-- Footer End -->




</body>
</html>