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
          <a href="<?= base_url("/order") ?>" class="nav-link py-3 border-bottom" title="Food" data-bs-toggle="tooltip" data-bs-placement="right">
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
          <?php foreach ($product as $p) : ?>
            <div class="card bg-transparent card-order p-2" style="width: 226px">
              <button type="button" class="btn btn-transparent text-white" data-bs-toggle="modal" data-bs-target="#exampleModal<?= $p['id']; ?>">
                <img src="../Assets/images/<?= $p['gambar']; ?>" class="card-img-top" alt="..." />
                <div class="card-body p-1">
                  <p class="nama-produk mb-1"><?= $p['nama']; ?></p>
                  <p class="detail-produk"><?= $p['keterangan']; ?></p>
                  <p class="harga-produk mb-0">Rp. <?= $p['harga']; ?></p>
                </div>
              </button>
            </div>
          <?php endforeach; ?>
          <!-- Modal -->
          <?php foreach ($product as $p) : ?>
            <div class="modal text-dark fade" id="exampleModal<?= $p['id']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header d-flex">
                    <h1 class="modal-title fs-5" id="exampleModalLabel"><?= $p['nama']; ?></h1>
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Rp. <?= $p['harga']; ?></h1>
                  </div>
                  <div class="modal-body">
                    <h6 class="fw-bold">Total Harga :</h6>
                    <h6 class="fw-normal">Rp 160000</h6>
                    <h6 class="fw-bold">Jumlah :</h6>
                    <div class="d-flex align-items-center">
                      <button type="button" class="btn btn-dark"><i class="bi bi-plus"></i></button>
                      <h6 class="fw-normal m-3">1</h6>
                      <button type="button" class="btn btn-dark"><i class="bi bi-dash"></i></button>
                    </div>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Pesan</button>
                  </div>
                </div>
              </div>
            </div>
          <?php endforeach; ?>
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
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>