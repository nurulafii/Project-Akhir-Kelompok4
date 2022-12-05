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
            <ul class="nav nav-pills nav-flush flex-column mb-auto text-center">
                <img src="Assets/images/Logo.png" alt="" width="35" height="35" class="mb-1 mt-2 ms-3" />
                <li class="nav-item">
                    <a href=" <?= base_url("/") ?>" class="nav-link py-3 border-bottom" aria-current="page" title="Home" data-bs-toggle="tooltip" data-bs-placement="right">
                        <img src="./Assets/images/homepage.png" height="35px" width="35px" alt="homepage" />
                    </a>
                </li>
                <li>
                    <a href="<?= base_url("/order") ?>" class="nav-link py-3 border-bottom" title="Food" data-bs-toggle="tooltip" data-bs-placement="right">
                        <img src="assets/images/eat.png" height="35px" width="35px" alt="Food" />
                    </a>
                </li>
                <li>
                    <a href="<?= base_url("order/drink") ?>" class="nav-link py-3 border-bottom" title="Drink" data-bs-toggle="tooltip" data-bs-placement="right">
                        <img src="assets/images/drink1.png" height="35px" width="35px" alt="Drink" />
                    </a>
                </li>
                <li>
                    <a href="<?= base_url("/checkout") ?>" class="nav-link active py-3 border-bottom" title="cart" data-bs-toggle="tooltip" data-bs-placement="right">
                        <img src="Assets/images/cart.png" height="35px" width="35px" alt="Cart" />
                        <span class="position-absolute top-80 start-25 translate-middle badge rounded-circle bg-danger">
                            <span><?= $total; ?></span>
                        </span>
                    </a>
                </li>
            </ul>
        </div>

        <div class="container-fluid content d-flex justify-content-center p-4">
            <div class="container-main text-white">
                <div class="container-judul">
                    CheckOut
                </div>
                <h6 class="text-subjudul"> Name Costumer</h6>
                <input type="text" class="input bg-transparent" id="nama" placeholder="name costumer" required>
                <h6 class="text-subjudul"> Location Costumer</h6>
                <input type="text" class="input bg-transparent" id="exampleFormControlInput1" placeholder="location costumer">
                <h6 class="text-subjudul">Option</h6>
                <div class="d-flex ">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                        <label class="form-check-label" for="flexRadioDefault1">
                            Delivery
                        </label>
                    </div>
                    <div class="form-check ms-4">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                        <label class="form-check-label" for="flexRadioDefault2">
                            Dine in
                        </label>
                    </div>
                </div>
                <div class="container-checkout mt-1">
                    <div class="d-flex flex-column mt-3">
                        <?php foreach ($product as $i => $p) : ?>
                            <div class="card mb-3 bg-transparent border-0" style="width: 70% ;">
                                <div class=" d-flex">
                                    <img src="../Assets/images/<?= $p['gambar']; ?>" class="card-img-top" alt="..." style="height: 100px; width:150px" />
                                    <div class="card-body d-flex flex-column justify-content-between">
                                        <div class="d-flex justify-content-between">
                                            <p class="nama-produk mb-1"><?= $p['nama']; ?></p>
                                            <p class="mb-1"><i>Rp. <?= $p['harga']; ?></i></p>
                                        </div>
                                        <div class="d-flex justify-content-between">
                                            <p data-subtotal="<?= $p['harga'] * $p['quantity']; ?>" class="subtotal mb-1" onchange="handleSubtotal()">
                                                Rp. <?= $p['harga'] * $p['quantity']; ?>
                                            </p>
                                            <p class="mb-1">x <?= $p['quantity']; ?> </p>
                                            <button type="button" class="edit-order ms-5" data-bs-toggle="modal" data-bs-target="#exampleModal<?= $p['id']; ?>">
                                                <i class="bi bi-pen"></i>
                                            </button>
                                            <form action="/checkout/delete_order/<?= $p['id']; ?>" method="post" class="d-inline">
                                                <input type="hidden" name="_method" value="DELETE">
                                                <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Apakah anda yakin Di hapus?');"><i class="bi bi-trash3"></i></button>
                                            </form>


                                            <div class="modal fade" id="exampleModal<?= $p['id']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content text-dark">
                                                        <div class="modal-header">
                                                            <h1 class="modal-title fs-5" id="exampleModalLabel">Edit <span><?= $p['nama']; ?></span>
                                                            </h1>
                                                        </div>
                                                        <form action="/checkout/update/<?= $p['id']; ?>" method="POST" enctype="multipart/form-data">
                                                            <div class="modal-body">
                                                                <label for="exampleFormControlInput1" class="form-label">Quantity Order :</label>
                                                                <input type="text" pattern="[0-9]" name="quantityEdit" id="quantityEdit" value="<?= $p['quantity'] ?>" required onkeyup="editQuantity(this)">
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                                <button type="submit" class="btn btn-primary">Save Edit</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
                <div class="d-flex align-items-center mt-4">
                    <div class="container text-white total" style="background-color: transparent">
                        <div class="d-flex justify-content-between ">
                            <p class="mb-0">Subtotal :</p>
                            <p class="mb-0">1001001</p>
                        </div>
                        <div class="d-flex justify-content-between">
                            <p class="mb-0">Subtotal :</p>
                            <p class="mb-0">1001001</p>
                        </div>
                        <hr>
                        <div class="d-flex justify-content-between">
                            <p>Subtotal :</p>
                            <p>1001001</p>
                        </div>
                    </div>
                </div>
                <button class="btn-order mb-4" onclick="alertFunct()">Order</button>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
        <script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script tipe="text/Javascript">
            function alertFunct() {
                const nama = document.getElementById("nama").value;
                if (nama != "") {
                    alert("Pesanan atas nama " + nama + " segera dibuat")
                    location.href = "/checkout/delete_all"
                } else {
                    alert("masukkan nama terlebih dahulu")
                }
            }

            function handleSubtotal() {
                const subtotals = document.querySelectorAll('.subtotal')
                subtotals.forEach(subtotal => {
                    console.log(subtotal)
                })
            }

            function editQuantity(e) {
                const quantity = e.value
                document.getElementsByName('quantity').value = quantity;
            }
        </script>
</body>

</html>