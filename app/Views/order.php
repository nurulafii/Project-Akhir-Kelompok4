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
  <link rel="stylesheet" href="css/order.css" />

  <!-- Logo Title Bar -->
  <link rel="icon" href="Assets/images/Logo.png" type="image/x-icon " />

  <title>NurvAlbiky</title>
</head>

<body>
  <div class="d-flex">
    <div class="d-flex flex-column flex-shrink-0 left-navbar" style="width: 4.5rem">
      <a href="/" class="d-block p-3 link-dark text-decoration-none" title="Logo" data-bs-toggle="tooltip" data-bs-placement="right">
        <img src="Assets/images/Logo.png" alt="" width="35" height="35" />
      </a>
      <ul class="nav nav-pills nav-flush flex-column mb-auto text-center">
        <li class="nav-item">
          <a href=" <?= base_url("/") ?>" class="nav-link py-3 border-bottom" aria-current="page" title="Home" data-bs-toggle="tooltip" data-bs-placement="right">
            <img src="./Assets/images/homepage.png" height="35px" width="35px" alt="homepage" />
          </a>
        </li>
        <li>
          <a href="<?= base_url("order") ?>" class="nav-link active py-3 border-bottom" title="Food" data-bs-toggle="tooltip" data-bs-placement="right">
            <img src="assets/images/eat.png" height="35px" width="35px" alt="Food" />
          </a>
        </li>
        <li>
          <a href="<?= base_url("order/drink") ?>" class="nav-link py-3 border-bottom" title="Drink" data-bs-toggle="tooltip" data-bs-placement="right">
            <img src="assets/images/drink1.png" height="35px" width="35px" alt="Drink" />
          </a>
        </li>
        <li>
          <a href="#" class="nav-link py-3 border-bottom" title="cart" data-bs-toggle="tooltip" data-bs-placement="right">
            <img src="Assets/images/cart.png" height="35px" width="35px" alt="Cart" />
            <span class="position-absolute top-80 start-25 translate-middle badge rounded-circle bg-danger">
              <span><?= $total; ?></span>
            </span>
          </a>
        </li>
      </ul>
    </div>

    <!-- Content -->
    <div class="container-fluid content">
      <div class="header-content d-flex align-items-baseline justify-content-between">
        <a class="navbar-brand text-white" href="/"> Nurv<span style="color: rgba(255, 138, 0, 1)">Albiky</span></a>
      </div>
      <div class="container-fluid mt-4 card-produk">
        <div class="d-flex flex-wrap ms-5 gap-4">
          <?php foreach ($product as $p) : ?>

            <div class="card bg-transparent card-order p-2" style="width: 226px">
              <form action="/order/save" method="POST" enctype="multipart/form-data">
                <img src="./Assets/images/<?= $p['gambar']; ?>" class="card-img-top" alt="..." />
                <div class="card-body p-1">
                  <p class="nama-produk mb-1"><?= $p['nama']; ?></p>
                  <p class="detail-produk"><?= $p['keterangan']; ?></p>
                  <p class="harga-produk mt-3">Rp. <?= $p['harga']; ?></p>
                  <input type="text" name="nama" class="form-control visually-hidden" value="<?= $p['nama']; ?>">
                  <input type="text" name="gambar" class="form-control visually-hidden" value="<?= $p['gambar']; ?>">
                  <input type="text" name="harga" class="form-control visually-hidden" value="<?= $p['harga']; ?>">
                  <input type="text" name="quantity" class="form-control visually-hidden" value="1">
                  <button type="submit" class="btn btn-add" name="add">Add to Cart <i></i></button>
              </form>
            </div>
        </div>
      <?php endforeach; ?>
      </div>
    </div>
  </div>
  <!-- end Content -->
  </div>
</body>

</html>