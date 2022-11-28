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
  <link href="https://fonts.googleapis.com/css2?family=Aclonica&family=Hind:wght@700&family=Inter:wght@700&family=Outfit:wght@700&display=swap" rel="stylesheet" />

  <!-- My Style -->
  <link rel="stylesheet" href="<?= base_url("./css/order.css") ?>" />

  <!-- Logo Title Bar -->
  <link rel="icon" href="Assets/images/Logo.png" type="image/x-icon " />

  <title>NurvAlbiky</title>
</head>

<body>
  <div class="d-flex">
    <div class="d-flex flex-column flex-shrink-0 left-navbar" style="width: 4.5rem">
      <a href="<?= base_url("/") ?>" class="d-block p-3 link-dark text-decoration-none" title="Logo" data-bs-toggle="tooltip" data-bs-placement="right">
        <img src="<?= base_url("./Assets/images/Logo.png") ?>" alt="" width="35" height="35" />
      </a>
      <ul class="nav nav-pills nav-flush flex-column mb-auto text-center">
        <li class="nav-item">
          <a href="<?= base_url("/") ?>" class="nav-link py-3 border-bottom" aria-current="page" title="Home" data-bs-toggle="tooltip" data-bs-placement="right">
            <img src=<?= base_url("./Assets/images/homepage.png") ?> height="35px" width="35px" alt="homepage" />
          </a>
        </li>
        <li>
          <a href="<?= base_url("/order/food") ?>" class="nav-link py-3 border-bottom" title="Food" data-bs-toggle="tooltip" data-bs-placement="right">
            <img src=<?= base_url("./Assets/images/eat.png") ?> height="35px" width="35px" alt="Food" />
          </a>
        </li>
        <li>
          <a href="<?= base_url("/order/drink") ?>" class="nav-link active py-3 border-bottom" title="Drink" data-bs-toggle="tooltip" data-bs-placement="right">
            <img src=<?= base_url("./Assets/images/drink1.png") ?> height="35px" width="35px" alt="Drink" />
          </a>
        </li>
        <li>
          <a href="#" class="nav-link py-3 border-bottom" title="cart" data-bs-toggle="tooltip" data-bs-placement="right">
            <img src=<?= base_url("./Assets/images/cart.png") ?> height="35px" width="35px" alt="Cart" />
          </a>
        </li>
      </ul>
    </div>

    <!-- Content -->
    <div class="container content">
      <div class="header-content d-flex align-items-baseline justify-content-between">
        <a class="navbar-brand text-white" href="/"> Nurv<span style="color: rgba(255, 138, 0, 1)">Albiky</span></a>
        <div class="input-group mb-3 w-50">
          <div class="input-group-prepend">
            <span class="input-group-text" id="basic-addon1"><i class="bi bi-search"></i></span>
          </div>
          <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1" />
        </div>
      </div>
      <div class="container card-produk">
        <div class="row gap-4">
          <div class="card bg-transparent card-order p-2" style="width: 226px">
            <img src="./Assets/images/order1.png" class="card-img-top" alt="..." />
            <div class="card-body p-1">
              <p class="nama-produk mb-1">Lamb Kabuli</p>
              <p class="detail-produk">Nasi yang dimasak bersama kaldu daging kambing, susu kambing, dan minyak samin, disajikan dengan daging kambing.</p>
              <p class="harga-produk mb-0">Rp. 50.000</p>
            </div>
          </div>
          <div class="card bg-transparent card-order p-2" style="width: 226px">
            <img src="./Assets/images/order1.png" class="card-img-top" alt="..." />
            <div class="card-body p-1">
              <p class="nama-produk mb-1">Chicken Kabuli</p>
              <p class="detail-produk">Nasi yang dimasak bersama kaldu daging kambing, susu kambing, dan minyak samin, disajikan dengan daging ayam.</p>
              <p class="harga-produk mb-0">Rp. 45.000</p>
            </div>
          </div>
          <div class="card bg-transparent card-order p-2" style="width: 226px">
            <img src="./Assets/images/order1.png" class="card-img-top" alt="..." />
            <div class="card-body p-1">
              <p class="nama-produk mb-1">Lamb Mandhi</p>
              <p class="detail-produk">Nasi yang dimasak dengan oven logam sehingga ber aroma smokey, dengan rempah-rempah berkualitas dan disajikan dengan daging kambing.</p>
              <p class="harga-produk mb-0">Rp. 60.000</p>
            </div>
          </div>
          <div class="card bg-transparent card-order p-2" style="width: 226px">
            <img src="./Assets/images/order1.png" class="card-img-top" alt="..." />
            <div class="card-body p-1">
              <p class="nama-produk mb-1">Chicken Kabuli</p>
              <p class="detail-produk">Nasi yang dimasak dengan oven logam sehingga ber aroma smokey, dengan rempah-rempah berkualitas dan disajikan dengan daging ayam.</p>
              <p class="harga-produk mb-0">Rp. 50.000</p>
            </div>
          </div>
          <div class="card bg-transparent card-order p-2" style="width: 226px">
            <img src="./Assets/images/order1.png" class="card-img-top" alt="..." />
            <div class="card-body p-1">
              <p class="nama-produk mb-1">Shawarma</p>
              <p class="detail-produk">Roti pita/tortilla dengan isian daging dan sayuran dengan saus hummus dan tahini.</p>
              <p class="harga-produk mb-0">Rp. 35.000</p>
            </div>
          </div>
          <div class="card bg-transparent card-order p-2" style="width: 226px">
            <img src="./Assets/images/order1.png" class="card-img-top" alt="..." />
            <div class="card-body p-1">
              <p class="nama-produk mb-1">Tabbouleh</p>
              <p class="detail-produk">Hidangan dari tomat, potongan paterseli, mint, bulgur, daun bawang, dan dibumbui dengan minyak zaitun & perasan lemon.</p>
              <p class="harga-produk mb-0">Rp. 40.000</p>
            </div>
          </div>
          <div class="card bg-transparent card-order p-2" style="width: 226px">
            <img src="./Assets/images/order1.png" class="card-img-top" alt="..." />
            <div class="card-body p-1">
              <p class="nama-produk mb-1">Lamb Curry</p>
              <p class="detail-produk">Makanan berkuah santan dengan potongan daging kambing dan rempah-rempah pilihan sehingga membuat kaya rasa.</p>
              <p class="harga-produk mb-0">Rp. 50.000</p>
            </div>
          </div>
          <div class="card bg-transparent card-order p-2" style="width: 226px">
            <img src="./Assets/images/order1.png" class="card-img-top" alt="..." />
            <div class="card-body p-1">
              <p class="nama-produk mb-1">Canay Bread</p>
              <p class="detail-produk">Makanan yang berbahan dasar tepung gandum berbentuk tipis bundar, berlapis dan memiliki tekstur. disajikan bersama saus curry.</p>
              <p class="harga-produk mb-0">Rp. 35.000</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- end Content -->

    <!-- RightBar -->
    <div class="d-flex flex-column flex-shrink-0 p-3 right-navbar"></div>
  </div>
</body>

</html>