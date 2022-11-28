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
            <span class="input-group-text bg-transparent" id="basic-addon1"><i class="bi bi-search"></i></span>
          </div>
          <input type="text" class="form-control search bg-transparent text-white" placeholder="search product..." aria-label="Username" aria-describedby="basic-addon1" />
        </div>
      </div>
      <div class="container card-produk">
        <div class="row gap-4">
          <div class="card bg-transparent card-order p-2" style="width: 226px">
            <img src="./Assets/images/Drink/ayran.png" class="card-img-top" alt="..." />
            <div class="card-body p-1">
              <p class="nama-produk mb-1">Ayran</p>
              <p class="detail-produk">Minuman berbahan dasar yogurt asam dingin, Bahan-bahan utamanya adalah yogurt, air dan garam.</p>
              <p class="harga-produk mb-0">Rp. 30.000</p>
            </div>
          </div>
          <div class="card bg-transparent card-order p-2" style="width: 226px">
            <img src="./Assets/images/Drink/arabian coffe.png" class="card-img-top" alt="..." />
            <div class="card-body p-1">
              <p class="nama-produk mb-1">Arabian coffee</p>
              <p class="detail-produk">Kopi yang diseduh dari biji kopi arabika. Dengan rempah-rempah seperti kapulaga, jahe, serai, cengkih, kayu manis.</p>
              <p class="harga-produk mb-0">Rp. 25.000</p>
            </div>
          </div>
          <div class="card bg-transparent card-order p-2" style="width: 226px">
            <img src="./Assets/images/Drink/saffron milk.png" class="card-img-top" alt="..." />
            <div class="card-body p-1">
              <p class="nama-produk mb-1">Saffron Milk</p>
              <p class="detail-produk">Susu unta dengan helaian saffron. Dengan ditaburi buah-buahan & kacang-kacangan kering diatas nya.</p>
              <p class="harga-produk mb-0">Rp. 20.000</p>
            </div>
          </div>
          <div class="card bg-transparent card-order p-2" style="width: 226px">
            <img src="./Assets/images/Drink/tamer hindi.png" class="card-img-top" alt="..." />
            <div class="card-body p-1">
              <p class="nama-produk mb-1">Tamer Hindi</p>
              <p class="detail-produk">Perpaduan antara asam jawa dan cairan gula. Sehingga menghasilkan rasa asam segar.</p>
              <p class="harga-produk mb-0">Rp. 30.000</p>
            </div>
          </div>
          <div class="card bg-transparent card-order p-2" style="width: 226px">
            <img src="./Assets/images/Drink/qishr.png" class="card-img-top" alt="..." />
            <div class="card-body p-1">
              <p class="nama-produk mb-1">Qishr</p>
              <p class="detail-produk">Minuman hangat yang terbuat dari kopi, jahe, kapulaga, dan kayu manis.</p>
              <p class="harga-produk mb-0">Rp. 35.000</p>
            </div>
          </div>
          <div class="card bg-transparent card-order p-2" style="width: 226px">
            <img src="./Assets/images/Drink/sahlab.png" class="card-img-top" alt="..." />
            <div class="card-body p-1">
              <p class="nama-produk mb-1">Sahlab</p>
              <p class="detail-produk">Terbuat dari susu, gula, dan bubuk yang terbuat dari umbi-umbian, yang membuatnya lebih creamy.</p>
              <p class="harga-produk mb-0">Rp. 35.000</p>
            </div>
          </div>
          <div class="card bg-transparent card-order p-2" style="width: 226px">
            <img src="./Assets/images/Drink/Haleeb Ma' Hal.png" class="card-img-top" alt="..." />
            <div class="card-body p-1">
              <p class="nama-produk mb-1">Haleeb Ma' Hal</p>
              <p class="detail-produk">Susu yang terbuat dari campuran kapulaga dan bermanfaat untuk menghangatkan perut.</p>
              <p class="harga-produk mb-0">Rp. 25.000</p>
            </div>
          </div>
          <div class="card bg-transparent card-order p-2" style="width: 226px">
            <img src="./Assets/images/Drink/karkadeh.png" class="card-img-top" alt="..." />
            <div class="card-body p-1">
              <p class="nama-produk mb-1">Karkadeh</p>
              <p class="detail-produk">Terbuat dari sejenis bunga yang disebut dengan Hibiscus Sabdariffa. ditambahkan cranberry, gula, dan madu.</p>
              <p class="harga-produk mb-0">Rp. 20.000</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- end Content -->

    <!-- RightBar -->
    <div class="d-flex flex-column flex-shrink-0 p-4 right-navbar">
      <div class="header-container">
        <h3 class="header-right-navbar">Your Order</h3>
      </div>
      <div class="container-produk-order">
        <div class="header-card pt-2">
          <img src="./Assets/images/Drink/sahlab.png" alt="" width="100px" height="80px" />
          <div class="detail-card ps-2">
            <h4 class="nama-produk-card">Sahlab</h4>
            <h4 class="harga-produk-card pt-2">Rp 50.000</h4>
            <div class="button-card">
              <button type="button" class="btn btn-light"><i class="bi bi-plus"></i></button>
              <span class="badge text-bg-light">1</span>
              <button type="button" class="btn btn-light"><i class="bi bi-dash"></i></button>
              <button type="button" class="btn btn-light ms-3"><i class="bi bi-trash3-fill"></i></button>
            </div>
          </div>
        </div>
        <div class="header-card pt-3">
          <img src="./Assets/images/Drink/Haleeb Ma' Hal.png" alt="" width="100px" height="80px" />
          <div class="detail-card ps-2">
            <h4 class="nama-produk-card">Haleeb Ma' Hal</h4>
            <h4 class="harga-produk-card pt-2">Rp 25.000</h4>
            <div class="button-card">
              <button type="button" class="btn btn-light"><i class="bi bi-plus"></i></button>
              <span class="badge text-bg-light">1</span>
              <button type="button" class="btn btn-light"><i class="bi bi-dash"></i></button>
              <button type="button" class="btn btn-light ms-3"><i class="bi bi-trash3-fill"></i></button>
            </div>
          </div>
        </div>
        <div class="header-card pt-3">
          <img src="./Assets/images/order1.png" alt="" width="100px" height="80px" />
          <div class="detail-card ps-2">
            <h4 class="nama-produk-card">Lamb Kabulii</h4>
            <h4 class="harga-produk-card pt-2">Rp 50.000</h4>
            <div class="button-card">
              <button type="button" class="btn btn-light"><i class="bi bi-plus"></i></button>
              <span class="badge text-bg-light">1</span>
              <button type="button" class="btn btn-light"><i class="bi bi-dash"></i></button>
              <button type="button" class="btn btn-light ms-3"><i class="bi bi-trash3-fill"></i></button>
            </div>
          </div>
        </div>
        <div class="header-card pt-3">
          <img src="./Assets/images/Rectangle 14.png" alt="" width="100px" height="80px" />
          <div class="detail-card ps-2">
            <h4 class="nama-produk-card">Chicken Kabuli</h4>
            <h4 class="harga-produk-card pt-2">Rp 45.000</h4>
            <div class="button-card">
              <button type="button" class="btn btn-light"><i class="bi bi-plus"></i></button>
              <span class="badge text-bg-light">1</span>
              <button type="button" class="btn btn-light"><i class="bi bi-dash"></i></button>
              <button type="button" class="btn btn-light ms-3"><i class="bi bi-trash3-fill"></i></button>
            </div>
          </div>
        </div>
      </div>
      <div class="container-total">
        <div class="total-space">
          <p class="mb-1">Subtotal</p>
          <p class="mb-1">Rp. 155.000</p>
        </div>
        <div class="total-space">
          <p class="mb-2">Tax</p>
          <p class="mb-2">Rp. 15.500</p>
        </div>
        <hr class="hr-total" />
        <div class="total-space">
          <h6>Total</h6>
          <h6>Rp. 165.500</h6>
        </div>
      </div>
      <button type="button" class="btn btn-checkout">CheckOut</button>
    </div>
  </div>
</body>

</html>