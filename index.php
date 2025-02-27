<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100..700;1,100..700&family=Josefin+Slab:ital,wght@0,100..700;1,100..700&display=swap" 
  rel="stylesheet">
 
</head>
<body>


<!-- navbar sections -->

<?php   include 'menu.php'; ?>


<!-- hero section  -->



<div id="demo" class="carousel slide" data-ride="carousel">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  
  <!-- The slideshow -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="anuj2.jpg" alt="Los Angeles" width="1100" height="500">
    </div>
    <div class="carousel-item">
      <img src="anuj4.jpg" alt="Chicago" width="1100" height="500">
    </div>
    <div class="carousel-item">
      <img src="anuj1.jpg" alt="New York" width="1100" height="500">
    </div>
    <div class="carousel-item">
      <img src="anuj3.jpg" alt="New York" width="1100" height="500">
    </div>
  </div>
  
  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>



<!-- About Us page -->

<section class="my-5">
  <div class="py-5">
    <h2 class="text-center">About Us</h2>
  </div>


  <div class="container-fluid">
    <div class="row">
    <div class="col-lg-6 col-md-6 col-12">
      <img src="anuj6.jpg" class="img-fluid aboutimg" >
    </div>

    <div class="col-lg-6 col-md-6 col-12">
      <h2 class="display-4">I am Kapilvastu Technical</h2>
      <p class="py-3">Lorem ipsum, dolor sit amet consectetur adipisicing elit. delectus iusto aspernatur quas neque aliquam 
        repellat voluptatum? Optio culpa molestiae sint id sequi! Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae alias odio quas inventore saepe, fuga ex, sit magni error, quibusdam pariatur iure ad accusantium 
        veritatis ullam?.</p>

        <a href="about.php" class="btn btn-success">check more</a>
    </div>
  </div>
  </div>
</section>

<section class="my-5">
  <div class="py-5">
    <h2 class="text-center">Our Services</h2>
  </div>
  <div class="container-fluid">
  <div class="row">
    <div class="col-lg-4 col-md-4 col-12">
    <div class="card">
  <img class="card-img-top" src="anuj8.jpg" alt="Card image">
  <div class="card-body">
    <h4 class="card-title">Beautiful Nature</h4>
    <p class="card-text">Some example text.</p>
    <a href="#" class="btn btn-primary">See Profile</a>
  </div>
</div>
</div>

<div class="col-lg-4 col-md-4 col-12">
    <div class="card">
  <img class="card-img-top" src="anuj8.jpg" alt="Card image">
  <div class="card-body">
    <h4 class="card-title">Beautiful Nature</h4>
    <p class="card-text">Some example text.</p>
    <a href="#" class="btn btn-primary">See Profile</a>
  </div>
</div>
</div>

<div class="col-lg-4 col-md-4 col-12">
    <div class="card">
  <img class="card-img-top" src="anuj8.jpg" alt="Card image">
  <div class="card-body">
    <h4 class="card-title">Beautiful Nature</h4>
    <p class="card-text">Some example text.</p>
    <a href="#" class="btn btn-primary">See Profile</a>
  </div>
</div>
</div>
  </div>
  </div>
</section>


<section class="my-5">
  <div class="py-5">
    <h2 class="text-center">Our Gallery</h2>
  </div>

  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-4 col-md-4 col-12">
      <img src="anuj10.jpg" class="img-fluid pb-4">
    </div>

    <div class="col-lg-4 col-md-4 col-12">
      <img src="anuj10.jpg" class="img-fluid pb-4">
    </div>

    <div class="col-lg-4 col-md-4 col-12">
      <img src="anuj10.jpg" class="img-fluid pb-4">
    </div>

    <div class="col-lg-4 col-md-4 col-12">
      <img src="anuj10.jpg" class="img-fluid pb-4">
    </div>

    <div class="col-lg-4 col-md-4 col-12">
      <img src="anuj10.jpg" class="img-fluid pb-4">
    </div>

    <div class="col-lg-4 col-md-4 col-12">
      <img src="anuj10.jpg" class="img-fluid pb-4">
    </div>

    <div class="col-lg-4 col-md-4 col-12">
      <img src="anuj10.jpg" class="img-fluid pb-4">
    </div>

    <div class="col-lg-4 col-md-4 col-12">
      <img src="anuj10.jpg" class="img-fluid pb-4">
    </div>

    <div class="col-lg-4 col-md-4 col-12">
      <img src="anuj10.jpg" class="img-fluid pb-4">
    </div>
  </div>
</div>
</section>


<section class="my-5">
  <div class="py-5">
    <h2 class="text-center">Our Gallery</h2>
  </div>
  
  <div class="w-50 m-auto">
    <form action="userinfo.php" method="POST">
      <div class="form-group">
        <label>Username</label>
        <input type="text" name="user" autocomplete="off" class="form-control">
      </div>

      <div class="form-group">
        <label>Email Id</label>
        <input type="text" name="email" autocomplete="off" class="form-control">
      </div>

      <div class="form-group">
        <label>Mobile</label>
        <input type="text" name="mobile" autocomplete="off" class="form-control">
      </div>

      <!-- <div class="form-group">
        <label>Comment</label>
        <textarea class="form-control" name="comments">
        </textarea>
      </div> -->
      <button type="submit" class="btn btn-success">Submit</button>
    </form>
  </div>
</section>

<footer>
  <p class="p-3 bg-dark text-white text-center">@ kapilvastutechnical production</p>
</footer>

<!-- javascripts -->

<script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>