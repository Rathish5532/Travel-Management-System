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

    <!-- Section Packages Start -->
    <section class="packages" id="packages">
      <div class="container">
        
        <div class="main-txt">
          <h1><span>P</span>ackages</h1>
        </div>

        <div class="row" style="margin-top: 10px;">

          <div class="col-md-4 py-1 py-md-0">

            <div class="card">
              <img src="./images/uk.png" alt="">
              <div class="card-body">
                <h3>United Kingdom</h3>
                <p>The world war place in very beautiful!</p>
                <div class="star">
                  <i class="fa-solid fa-star checked"></i>
                  <i class="fa-solid fa-star checked"></i>
                  <i class="fa-solid fa-star checked"></i>
                  <i class="fa-solid fa-star checked "></i>
                  <i class="fa-solid fa-star "></i>
                </div>
                <h6>Price: <strong>$1000</strong></h6>
                <a href="booking.php">Book Now</a>
              </div>
            </div>

          </div>
          <div class="col-md-4 py-1 py-md-0">

            <div class="card">
              <img src="./images/france.png" alt="">
              <div class="card-body">
                <h3>France</h3>
                <p>Very Romantice place most visitor come!</p>
                <div class="star">
                  <i class="fa-solid fa-star checked"></i>
                  <i class="fa-solid fa-star checked"></i>
                  <i class="fa-solid fa-star checked"></i>
                  <i class="fa-solid fa-star checked "></i>
                  <i class="fa-solid fa-star "></i>
                </div>
                <h6>Price: <strong>$800</strong></h6>
                <a href="booking.php">Book Now</a>
              </div>
            </div>

          </div>
          <div class="col-md-4 py-1 py-md-0">

            <div class="card">
              <img src="./images/pakistan.png" alt="">
              <div class="card-body">
                <h3>Pakistan</h3>
                <p>This the most Visted place in lahour  and karachi!</p>
                <div class="star">
                  <i class="fa-solid fa-star checked"></i>
                  <i class="fa-solid fa-star checked"></i>
                  <i class="fa-solid fa-star checked"></i>
                  <i class="fa-solid fa-star "></i>
                  <i class="fa-solid fa-star "></i>
                </div>
                <h6>Price: <strong>$500</strong></h6>
                <a href="booking.php">Book Now</a>
              </div>
            </div>

          </div>



        </div>



        <div class="row" style="margin-top: 10px;">

          <div class="col-md-4 py-1 py-md-0">

            <div class="card">
              <img src="./images/italy.png" alt="">
              <div class="card-body">
                <h3>Italy</h3>
                <p>Very Beautiful palce  and Most vistors come in the country!</p>
                <div class="star">
                  <i class="fa-solid fa-star checked"></i>
                  <i class="fa-solid fa-star checked"></i>
                  <i class="fa-solid fa-star checked"></i>
                  <i class="fa-solid fa-star "></i>
                  <i class="fa-solid fa-star "></i>
                </div>
                <h6>Price: <strong>$700</strong></h6>
                <a href="booking.php">Book Now</a>
              </div>
            </div>

          </div>
          <div class="col-md-4 py-1 py-md-0">

            <div class="card">
              <img src="./images/india.png" alt="">
              <div class="card-body">
                <h3>India</h3>
                <p>The very Traditional place and peacefull place  in World !</p>
                <div class="star">
                  <i class="fa-solid fa-star checked"></i>
                  <i class="fa-solid fa-star checked"></i>
                  <i class="fa-solid fa-star checked"></i>
                  <i class="fa-solid fa-star checked"></i>
                  <i class="fa-solid fa-star checked"></i>
                </div>
                <h6>Price: <strong>$1500</strong></h6>
                <a href="booking.php">Book Now</a>
              </div>
            </div>

          </div>
          <div class="col-md-4 py-1 py-md-0">

            <div class="card">
              <img src="./images/us.png" alt="">
              <div class="card-body">
                <h3>United States</h3>
                <p>The hollywood Movie making place  and Explore the US!</p>
                <div class="star">
                  <i class="fa-solid fa-star checked"></i>
                  <i class="fa-solid fa-star checked"></i>
                  <i class="fa-solid fa-star checked"></i>
                  <i class="fa-solid fa-star checked"></i>
                  <i class="fa-solid fa-star "></i>
                </div>
                <h6>Price: <strong>$1000</strong></h6>
                <a href="booking.php">Book Now</a>
              </div>
            </div>

          </div>



        </div>


      </div>
    </section> 
    <!-- Section Packages End -->



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