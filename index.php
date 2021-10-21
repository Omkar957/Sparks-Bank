<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <style>
@import url('https://fonts.googleapis.com/css2?family=Anton&family=Cormorant+Garamond:wght@300&family=Fjalla+One&display=swap');
</style>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia&effect=fire|neon|outline|emboss|shadow-multiple">
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
  <link rel="stylesheet"
    href="@import url('https://fonts.googleapis.com/css2?family=Trirong&effect=neon|outline|emboss|shadow-multiple:wght@200;300;400;500;600;700;800;900&display=swap');">
  <title>Sparks Bank</title>
  <link rel='icon' href="Images/logob.png" type="image/icon type">
  <link rel="stylesheet" href="Style1.css">
  
</head>

<body>

  <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="index.php"><img src="Images/logob.png" alt="">&nbsp;Sparks Bank</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
          </li>
          &nbsp;&nbsp;&nbsp;<li class="nav-item">
            <a class="nav-link " aria-current="page" href="about.php">About </a>
          </li>
          &nbsp;&nbsp;&nbsp; <li class="nav-item">
            <a class="nav-link " aria-current="page" href="contactus.php">Contact us</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>



  <div id="carouselExampleCaptions" class="carousel-fade" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="Images/city.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h2 class="font-effect-neon" style="color:white;font-size:50px">
            <center><i> SPARKS BANK</i></center>
          </h2>
          <p style="font-size: 20px;">Satisfaction is a Rating Loyality is a brand</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="Images/city.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h2 class="font-effect-neon" style="color:white;font-size:50px">
            <center><i> SPARKS BANK</i></center>
          </h2>
          <p style="font-size:20px;">One thing that matters to us "CUSTOMER SATISFACTION".</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="Images/city.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h2 class="font-effect-neon" style="color:white;font-size:50px">
            <center><i> SPARKS BANK</i></center>
          </h2>
          <p style="font-size:20px;">Trust is our policy.</p>
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



  <div  class="container px-4 py-5" id="custom-cards">
    <h2 style="font-family: 'Fjalla One', sans-serif;"><center>THANKS FOR CHOOSING OUR SERVICE  </center></h2>

    <div class="row row-cols-1 row-cols-lg-3 align-items-stretch g-4 py-5">

      <div class="col">
        <div class="card card-cover h-100 overflow-hidden text-white bg-dark rounded-5 shadow-lg"
          style="background: linear-gradient(rgba(0,0,0,0.6),rgba(0,0,0,0.3)),url('Images/custom2.jpg');background-size:auto;">
          <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-10">
            <h2 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold"><a href="customers.php"
                style="color:white; text-decoration:none">Good Banking is produced by <span
                  style="color: red;">'GOOD'</span> customers.</a></h2>
            <ul class="d-flex list-unstyled mt-auto">
              <li class="me-auto">
                <img  src="Images/logob.png" alt="Bootstrap" width="32" height="32"
                  class="rounded-circle border border-white">
              </li>
              <li class="d-flex align-items-center me-3">
                <svg class="bi me-2" width="1em" height="1em">
                  <use xlink:href="#geo-fill"></use>
                </svg>
                <a href="customers.php" class="btn btn-outline-light" role="button">Our Customers</a>
              </li>

            </ul>
          </div>
        </div>
      </div>

      <div class="col">
        <div class="card card-cover h-100 overflow-hidden text-white bg-dark rounded-5 shadow-lg"
          style="background-image: url('Images/card3.jpg');background-repeat:no-repeat">
          <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
            <h2 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold"><a href="transfer_money.php"
                style="color:white; text-decoration:none"> Want to Transfer Money?</a></h2>
            <ul class="d-flex list-unstyled mt-auto">
              <li class="me-auto">
                <img src="Images/logob.png" alt="Bootstrap" width="32" height="32"
                  class="rounded-circle border border-white">
              </li>
              <li class="d-flex align-items-center me-3">
                <svg class="bi me-2" width="1em" height="1em">
                  <use xlink:href="#geo-fill"></use>
                </svg>
                <a href="transfer_money.php" class="btn btn-outline-light" role="button">Transact Money</a>
              </li>

            </ul>
          </div>
        </div>
      </div>

      <div class="col">
        <div class="card card-cover h-100 overflow-hidden text-white bg-dark rounded-5 shadow-lg"
          style="background-image:url(Images/card1.jpg);background-repeat:no-repeat">
          <div class="d-flex flex-column h-100 p-5 pb-3 text-shadow-1">
            <h2 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold"><a href="transaction_history.php"
                style="color:white; text-decoration:none"> Transaction History</a></h2>
            <ul class="d-flex list-unstyled mt-auto">
              <li class="me-auto">
                <img src="Images/logob.png" alt="Bootstrap" width="32" height="32"
                  class="rounded-circle border border-white">
              </li>
              <li class="d-flex align-items-center me-3">
                <svg class="bi me-2" width="1em" height="1em">
                  <use xlink:href="#geo-fill"></use>
                </svg>
                <a href="transaction_history.php" class="btn btn-outline-light" role="button">Transaction History</a>
              </li>

            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>

  <hr class="featurette-divider">

  <!-- /END THE FEATURETTES -->

  </div>

  <?php include('footer.php') ?>


  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ"
    crossorigin="anonymous"></script>

  <!-- Option 2: Separate Popper and Bootstrap JS -->
  <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>
    -->
</body>

</html>