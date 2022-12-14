<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />

  <!-- Font Google -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Aclonica&family=Outfit:wght@700&family=Voces&family=Walter+Turncoat&display=swap" rel="stylesheet" />

  <!-- My Style -->
  <link rel="stylesheet" href="css/menu.css" />

  <!-- Logo Title Bar -->
  <link rel="icon" href="Assets/images/Logo.png" type="image/x-icon " />

  <title>NurvAlbiky</title>
</head>

<body>
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-transparent">
    <div class="container-fluid p-4 ps-5 pe-5">
      <a class="navbar-brand" href="css/menu.css">
        <img src="Assets/images/Logo.png" alt="" width="45" height="40" />
        Nurv<span style="color: rgba(255, 138, 0, 1) ;">Albiky</span></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item mx-3">
            <a class="nav-link" aria-current="page" href="<?= base_url("/") ?>">Home</a>
          </li>
          <li class="nav-item mx-3">
            <a class="nav-link" href="<?= base_url("menu") ?>" style="color:rgba(255, 138, 0, 1)">Menu</a>
          </li>
          <li class="nav-item mx-3">
            <a class="nav-link" href="<?= base_url("order") ?>">Order</a>
          </li>
          <li class="nav-item mx-3">
            <a class="nav-link" href="#">About Us</a>
          </li>
          <li class="nav-item mx-3">
        </ul>
        <a class="navbar-link" href="#">
          <img src="Assets/images/Account.png" alt="" width="45" height="45" />
        </a>
        </li>
      </div>
    </div>
  </nav>

  <!-- Our Best Menu -->
  <section id="best-menu">
    <div class="container d-flex justify-content-center flex-column align-items-center">
      <div class=" text-center text-white">
        <h2 class="text3">Our Best Menu</h2>
      </div>
      <div class="gambar2">
        <a class="img1" href="#">
          <img src="assets/images/Ellipse 1.png" class="gambar1" alt="gambar">
          <h6 class="pt-1">Lamb Kabuli</h6>
        </a>
        <a class="img1" href="#">
          <img src="assets/images/Ellipse 2.png" class="gambar1" alt="gambar">
          <h6 class="pt-1">Lugaimat</h6>
        </a>
        <a class="img1" href="#">
          <img src="assets/images/Ellipse 3.png" class="gambar1" alt="gambar">
          <h6 class="pt-1">Shawarma</h6>
        </a>
        <a class="img1" href="#">
          <img src="assets/images/Ellipse 4.png" class="gambar1" alt="gambar">
          <h6 class="pt-1">Canay Bread</h6>
        </a>
        <a class="img1" href="#">
          <img src="assets/images/Ellipse 5.png" class="gambar1" alt="gambar">
          <h6 class="pt-1">Arabian Coffe</h6>
        </a>
      </div>
    </div>
  </section>

  <!-- section Main Course -->

  <!-- Carousel Menu -->
  <div class="container d-flex justify-content-center">
    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="Assets/images/Group 32.png" class="d-block w-100" alt="gambar">
        </div>
        <div class="carousel-item">
          <img src="Assets/images/Group 29.png" class="d-block w-100" alt="gambar">
        </div>
        <div class="carousel-item">
          <img src="Assets/images/Group 31.png" class="d-block w-100" alt="gambar">
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</body>

</html>