<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Travel Website</title>

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
             <!---- <li class="nav-item">
                <a class="nav-link active" href="index.html">Home</a>
              </li>
               <li class="nav-item">
                <a class="nav-link" href="#booking">Booking</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#packages">Packages</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#services">Services</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#gallery">Gallery</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#about">About</a>
              </li> -->

            </ul>
            <!-- <form class="d-flex">
              <input class="form-control me-2" type="text" placeholder="Search">
              <button class="btn btn-primary" type="button">Search</button> -->
              
              <div class="navbar-nav ms-auto">              	
                <li class="nav-item">
                  <a class="nav-link" href="login.php">Signin</a>
                </li><li class="nav-item">
                  <a class="nav-link" href="signup.php">Signup</a>
                </li>
            </div>
            <!-- </form> -->
          </div>
        </div>
      </nav>
    <!-- Navbar End -->





    <!-- Home Section Start -->
    <div class="home">
        <div class="content">
            <h5>Welcome To World</h5>
            <h1>Visit <span class="changecontent"></span></h1>
            <p>Welcome to the World tour around the world in the Tourism spot.</p>
            <a href="booking.php">Book Place</a>
        </div>
    </div>
    <!-- Home Section End -->





    <!-- Section Book Start -->
    <!-- <section class="book" id="booking">
      <div class="container">

        <div class="main-text">
          <h1><span>B</span>ooking</h1>
        </div>
        
        <div class="row">

          <div class="col-md-6 py-2 py-md-0">
            <div class="card">
              <img src="./images/book-img.png" alt="">
            </div>
          </div>

          <div class="col-md-6  py-2 py-md-0">
            <form action="#">

              <input type="text" class="form-control" placeholder="Where To" required><br>
              <input type="text" class="form-control" placeholder="How Many" required><br>
              <input type="date" class="form-control" placeholder="Arrivals" required><br>
              <input type="date" class="form-control" placeholder="Leaving" required><br>
              <textarea class="form-control" rows="5" name="text" placeholder="Enter Your Name & Details"></textarea>
              <input type="submit" value="Book Now" class="submit" required>

            </form>
          </div>

        </div>
      </div>
    </section> -->
    <!-- Section Book End -->








    <!-- Section Packages Start -->
    <!-- <section class="packages" id="packages">
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
                <a href="#book">Book Now</a>
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
                <a href="#book">Book Now</a>
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
                <a href="#book">Book Now</a>
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
                <a href="#book">Book Now</a>
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
                <a href="#book">Book Now</a>
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
                <a href="#book">Book Now</a>
              </div>
            </div>

          </div>



        </div>


      </div>
    </section> -->
    <!-- Section Packages End -->







    <!-- Section Services Start -->
    <!-- <section class="services" id="services">
      <div class="container">

        <div class="main-txt">
          <h1><span>S</span>ervices</h1>
        </div>

        <div class="row" style="margin-top: 10px;">

          <div class="col-md-4 py-1 py-md-0">

            <div class="card">
              <i class="fas fa-hotel"></i>
              <div class="card-body">
                <h3>Affordable Hotel</h3>
                <p>High quality 5star Hotel and your comfortable and afforadable price.</p>
              </div>
            </div>

          </div>
          <div class="col-md-4 py-1 py-md-0">

            <div class="card">
              <i class="fas fa-utensils"></i>
              <div class="card-body">
                <h3>Food & Drinks</h3>
                <p>Very hyigene and neat home made food and very tasty.</p>
              </div>
            </div>

          </div>
          <div class="col-md-4 py-1 py-md-0">

            <div class="card">
              <i class="fas fa-bullhorn"></i>
              <div class="card-body">
                <h3>Safty Guide</h3>
                <p>Very safety travel and safety guide person and lead to your travel.</p>
              </div>
            </div>

          </div>



        </div>


        <div class="row" style="margin-top: 10px;">

          <div class="col-md-4 py-1py-md-0">

            <div class="card">
              <i class="fas fa-globe-asia"></i>
              <div class="card-body">
                <h3>Around The World</h3>
                <p>Entire world is beautiful and you asfe and travel and like nature.</p>
              </div>
            </div>

          </div>
          <div class="col-md-4 py-1 py-md-0">

            <div class="card">
              <i class="fas fa-plane"></i>
              <div class="card-body">
                <h3>Fastest Travel</h3>
                <p> Fastest  safety tarvel  and easy to Move on your place.</p>
              </div>
            </div>

          </div>
          <div class="col-md-4 py-1 py-md-0">

            <div class="card">
              <i class="fas fa-hiking"></i>
              <div class="card-body">
                <h3>Adventures</h3>
                <p> You go to the action adventure and thrilling the place .</p>
              </div>
            </div>

          </div>



        </div>

      </div>
    </section> -->
    <!-- Section Services End -->




    <!-- Section Gallery Start -->
    <!-- <section class="gallery" id="gallery">
      <div class="container">

        <div class="main-txt">
          <h1><span>G</span>allery</h1>
        </div>

        <div class="row" style="margin-top: 30px;">
          <div class="col-md-4 py-3 py-md-0">
            <div class="card">
              <img src="./images/g1.png" alt="" height="230px">
            </div>
          </div>
          <div class="col-md-4 py-3 py-md-0">
            <div class="card">
              <img src="./images/g2.png" alt="" height="230px">
            </div>
          </div>
          <div class="col-md-4 py-3 py-md-0">
            <div class="card">
              <img src="./images/g3.png" alt="" height="230px">
            </div>
          </div>
        </div>


        <div class="row" style="margin-top: 30px;">
          <div class="col-md-4 py-3 py-md-0">
            <div class="card">
              <img src="./images/g4.png" alt="" height="230px">
            </div>
          </div>
          <div class="col-md-4 py-3 py-md-0">
            <div class="card">
              <img src="./images/g5.png" alt="" height="230px">
            </div>
          </div>
          <div class="col-md-4 py-3 py-md-0">
            <div class="card">
              <img src="./images/g6.png" alt="" height="230px">
            </div>
          </div>
        </div>

      </div>
    </section> -->
    <!-- Section Gallery End -->







    <!-- About Start -->
    <!-- <section class="about" id="about">
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
    </section> -->
    <!-- About End -->




    <!-- Footer Start -->
    <!-- <footer id="footer" >
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
      
    </footer> -->
    <!-- Footer End -->







    


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>