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
  <link rel="stylesheet" href="css/style.css" />

  <!-- Logo Title Bar -->
  <link rel="icon" href="Assets/images/Logo.png" type="image/x-icon " />

  <title>NurvAlbiky</title>
</head>

<body>
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-transparent">
    <div class="container-fluid p-4 ps-5 pe-5">
      <a class="navbar-brand" href="/">
        <img src="Assets/images/Logo.png" alt="" width="45" height="40" />
        Nurv<span style="color: rgba(255, 138, 0, 1) ;">Albiky</span></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item mx-3">
            <a class="nav-link active" aria-current="page" href="<?= base_url("/") ?>" style="color:rgba(255, 138, 0, 1)">Home</a>
          </li>
          <li class="nav-item mx-3">
            <a class="nav-link" href="<?= base_url("menu") ?>">Menu</a>
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

  <!-- Hero Section -->
  <section id="hero">
    <div class="container-fluid">
      <div class="row">
        <div class="col-4 text-hero ms-5">
          <h1 class="text1 ms-5">Meet, <span>Eat</span> &
            <span>Enjoy</span> The
            Good <span>Taste</span>
          </h1>
          <p class="text2 mt-4 ms-5">We deliver 100% Fresh Food and drink. You can order right now!</p>
          <button type="button" class="btn button-primary d-flex align-self-start mt-4 ms-5">Get Started</button>
        </div>
        <div class="col-7 image-hero mt-5">
          <img src="Assets/images/Group 17.png" alt="gambar">
        </div>
      </div>
    </div>



  </section>

  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  <!-- Option 2: Separate Popper and Bootstrap JS -->
  <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>

</html>