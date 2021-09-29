<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="css/style.css" rel="stylesheet">
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap" rel="stylesheet">

    <title>Junaid Ali</title>
</head>
<body>
    <!-- Navbar -->
<?php include "header.php"?>

<!-- Carousel -->
<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/img1.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Another Day</h5>
        <p>Some representative placeholder content for the first slide.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="images/img2.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>The Wolf Stories</h5>
        <p>Some representative placeholder content for the second slide.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="images/img3.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>The Evening Stories</h5>
        <p>Some representative placeholder content for the third slide.</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

<!-- About -->
<section class="my-5" id="about-us">
    <div class="py-5">
        <h2 class="text-center">About Us</h2>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12">
                <img src="images/about.jpg" class="img-fluid aboutimg" alt="">
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12">
                <h2 class="display-4">Junaid Ali</h2>
                <p class="py-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi ea totam porro animi dolorum cupiditate fuga reprehenderit, quas corrupti nobis.</p>
                <a href="about.php" class="btn btn-success">Check More</a>
            </div>
        </div>
    </div>
    
</section>

<!-- Services -->
<section class="my-5" id="services">

    <div class="py-5">
        <h2 class="text-center">Services</h2>
    </div>

    <div class="container-fluid">
      <div class="row">

        <div class="col-lg-4 col-md-4 col-12">
          <div class="card">
            <img src="images/img1.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Beautiful Illustrations</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-4 col-12">
          <div class="card">
            <img src="images/img2.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Twilight Saga</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-4 col-12">
          <div class="card">
            <img src="images/img3.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Evening Shining</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
          </div>
        </div>

      </div>
    </div>
    
    <!-- Gallery -->
    <section class="my-5" id="gallery">
      <div class="py-5">
          <h2 class="text-center">Gallery</h2>
      </div>

      <div class="container-fluid">
        <div class="row">

          <div class="col-lg-4 col-md-4 col-12">
            <img src="images/img1.jpg" alt="" class="img-fluid pb-3">
          </div>

          <div class="col-lg-4 col-md-4 col-12">
            <img src="images/img2.jpg" alt="" class="img-fluid pb-3">
          </div>

          <div class="col-lg-4 col-md-4 col-12">
            <img src="images/img3.jpg" alt="" class="img-fluid pb-3">
          </div>

          <div class="col-lg-4 col-md-4 col-12">
            <img src="images/img3.jpg" alt="" class="img-fluid pb-3">
          </div>

          <div class="col-lg-4 col-md-4 col-12">
            <img src="images/img5.jpg" alt="" class="img-fluid pb-3">
          </div>

          <div class="col-lg-4 col-md-4 col-12">
            <img src="images/img6.jpg" alt="" class="img-fluid pb-3">
          </div>

        </div>
      </div>
    </Section>

    <!-- Contact -->
<section class="my-5" id="contact">
  <div class="py-4">
    <h2 class="text-center">Contact</h2>
  </div>

  <div class="w-50 m-auto">
    <form action="userinfo.php" method="post">

      <div class="form-group">
        <label for="">Username</label>
        <input type="text" name="user" autocomplete="off" class="form-control">
      </div>

      <div class="form-group">
        <label for="">Email</label>
        <input type="text" name="email" autocomplete="off" class="form-control">
      </div>

      <div class="form-group">
        <label for="">Mobile</label>
        <input type="text" name="mobile" autocomplete="off" class="form-control">
      </div>

      <div class="form-group">
        <label for="">Comments</label>
        <textarea name="comment" id="" cols="30" rows="1" class="form-control"></textarea>
      </div>

      <button type="submit" class="btn btn-success my-2">Submit</button>

    </form>
  </div>
  
</section>

<?php include "footer.php"?>

  



    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>