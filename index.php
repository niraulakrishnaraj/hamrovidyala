<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scjale=1.0">
  <title>HamroVidayala</title>

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <!-- Font Awesome -->

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

 <!-- navbar section starts here -->
<nav class="navbar navbar-expand-lg navbar-primary bg-primary fixed-top"></nav>
  <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
    <a class="navbar-brand" href="#"><img src="img/logo.png" alt="HamroVidayala" width="50" height="50"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link home" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link programs" href="#">Programs</a>
        </li>
        <li class="nav-item">
          <a class="nav-link admissions" href="Admission.php">Admissions</a>
        </li>
        <li class="nav-item">
          <a class="nav-link downloads" href="#">Downloads</a>
        </li>
        <li class="nav-item">
          <a class="nav-link about_us" href="about.php">About Us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link contact_us" href="#">Contact Us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="loginpage.php"><i class="fa fa-user-circle-o" aria-hidden="true"></i> Login</a>
        </li>
      </ul>
    </div>
  </nav>
    <!-- Navbar section ends here -->


  <!-- Sliding Image section starts here -->

  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="img/sliding/slide1.jpg" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="img/sliding/slide2.jpg" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="img/sliding/slide3.jpg" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="img/sliding/slide4.jpg" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="img/sliding/slide5.jpg" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="img/sliding/slide6.jpg" class="d-block w-100" alt="...">
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
  <!-- Welcome section css class and code is here..... -->
  <style>
    #welcome {
      height: 400;
      background-color: rgb(77, 159, 132);
    }
  </style>
  <!-- sliding all images size are same -->
  <style>
  .carousel-item img {
    height: 600px; /* Adjust as needed */
    width: auto;
    object-fit: cover;
  }
  </style>
  <!-- sliding image section ends here -->



  <!-- Welcome section of the school -->
<section id="welcome" style="padding: 50px 0;">
  <div class="container text-center">
    <h2 ><b>Welcome to HamroVidayala</b></h2>
    <p >Welcome to "Hamro Vidyalaya", a project based on the School Management System (SMS). In today's education system, the 
      quality of education plays a crucial role in the country's development. Many educational organizations are striving to 
      improve their systems, and effective management of school resources using current technology is a key aspect of this 
      improvement.</p><br>

    <!-- show more button -->
      <p id="more-text" style="display: none;">Our project aims to facilitate continuous communication between the principal, teachers, parents, and students. To achieve 
        this, we have developed a website that caters to the needs of all users. For students, the website allows them to view their 
        grades, communicate with the principal and teachers for complaints, recommendations, or absence permissions, and stay updated 
        with school news and posts from other users.</p>
      <button class="btn btn-primary" id="show-more">Show More</button>

      <script>
        const moreText = document.getElementById("more-text");
        const showMoreButton = document.getElementById("show-more");

        showMoreButton.addEventListener("click", function() {
          if (moreText.style.display === "none") {
            moreText.style.display = "block";
            showMoreButton.textContent = "Show Less";
          } else {
            moreText.style.display = "none";
            showMoreButton.textContent = "Show More";
          }
        });
      </script>

    <style>
      #welcome p {
        text-align: justify;
        font-family: roboto;
        font-size: larger;
      }
    </style>

  </div>
</section>

<!-- Welcome section ends here -->


<!-- Icon section starts here -->
<section id="icon-section" style="padding: 50px 0;">
  <div class="container text-center">
    <h2><b>Why Choose HamroVidayala?</b></h2>
    <div class="row">
      <div class="col-md-4">
        <i class="fa fa-graduation-cap fa-3x"></i>
        <h4>Quality Education</h4>
        <p>We provide high-quality education to help you achieve your academic goals.</p>
      </div>
      <div class="col-md-4">
        <i class="fa fa-users fa-3x"></i>
        <h4>Community</h4>
        <p>Join our vibrant and diverse community of learners.</p>
      </div>
      <div class="col-md-4">
        <i class="fa fa-globe fa-3x"></i>
        <h4>Global Perspective</h4>
        <p>Explore different cultures and gain a global perspective.</p>
      </div>
    </div>
  </div>
</section>
<!-- Icon section ends here -->


<!-- Photo Gallery section starts here -->
<section id="photo-gallery" style="padding: 50px 0;">
  <div class="container text-center">
    <h2><b>Photo Gallery</b></h2>
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="img/class1.jpg" class="d-block w-100" alt="Photo 1">
          <div class="carousel-caption">
            <h3>Date 1</h3>
          </div>
        </div>
        <div class="carousel-item">
          <img src="img/pencil.jpg" class="d-block w-100" alt="Photo 2">
          <div class="carousel-caption">
            <h3>Date 2</h3>
          </div>
        </div>
        <div class="carousel-item">
          <img src="img/play.jpg" class="d-block w-100" alt="Photo 3">
          <div class="carousel-caption">
            <h3>Date 3</h3>
          </div>
        </div>
        <!-- Add more carousel items with different photos and dates here -->
      </div>
      <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </div>
</section>
<!-- Photo Gallery section ends here -->

</body>
</html>
<?php include 'footer.php' ?>