<?php


$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$address = $_POST['address'];
$product = $_POST['product'];
$price = $_POST['price'];
$qty = $_POST['qty'];

if (empty($product) || empty($price)) {
    header("Location:orderinvalid.php");
}

$totalprice = $price * $qty;
// echo $name, $email, $phone, $address, $product, $price, $qty, $totalprice;


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BRIAN SHOP</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>

<body style="background-image: url(bg.jpg); background-repeat: no-repeat; background-size: cover;">
    <nav class="navbar navbar-expand-lg" data-bs-theme="dark" style="background-color:#2c306f">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php"><img src="logo.png" alt="Logo" width="30" height="30"
                    class="d-inline-block align-text-top me-3">BRIAN SHOP</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link " aria-current="page" href="index.php">Catalogue</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="order.php">Order</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="payment.php">Payment</a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>
    <div class="mt-4">
        <div class="container" style="width: 1000px; min-width: 500px; ">
            <div class="card" style="background-color: aliceblue;">
                <div class="card-body">
                    <div class="text-center">
                        <h2>Confirm Payment</h2>
                    </div>
                    <form action="ordersucces.php" method="POST">
                        <div class="card mt-3">
                            <div class="card-header">
                                <h4>Recipient Information</h4>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-6"><strong>Name</strong></div>
                                    <div class="col-6" id="name">:<?php echo $name ?></div>
                                </div>
                                <div class="row">
                                    <div class="col-6"><strong>Email</strong></div>
                                    <div class="col-6" id="email">:<?php echo $email ?></div>
                                </div>
                                <div class="row">
                                    <div class="col-6"><strong>Phone</strong></div>
                                    <div class="col-6" id="phone">:<?php echo $phone ?></div>
                                </div>
                                <div class="row">
                                    <div class="col-6"><strong>Address</strong></div>
                                    <div class="col-6" id="address">:<?php echo $address ?></div>
                                </div>
                            </div>
                        </div>

                        <div class="card mt-3">
                            <div class="card-header">
                                <h4>Oder Details</h4>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-6"><strong>Product</strong></div>
                                    <div class="col-6" id="product">:<?php echo $product ?></div>
                                </div>
                                <div class="row">
                                    <div class="col-6"><strong>Price</strong></div>
                                    <div class="col-6" id="price">:<?php echo number_format($price, 2, ',', '.') ?></div>
                                </div>
                                <div class="row">
                                    <div class="col-6"><strong>Price</strong></div>
                                    <div class="col-6" id="qty">:<?php echo $qty ?></div>
                                </div>
                            </div>
                        </div>
                        <div class="container text-center text-white mt-3" style="height: 100px; background-color: #333; border-radius: 5px;">
                            <div class="pt-3">
                                <h5>Total Price</h5>
                                <h3>
                                    Rp. <?php echo number_format($totalprice, 2, ",", ".")  ?>
                                </h3>

                                <input type="hidden" name="totalprice" value="<?php echo $totalprice; ?>">

                            </div>
                        </div>

                        <div class="mb-3 mt-3">
                            <label for="qty" class="">Pay Amount</label>
                            <div class="form-floating mb-3">
                                <input type="number" class="form-control" style="height: 60px" id="payment" name="payment" required>
                                <label for="payment" class="">Rp. <?php echo number_format($totalprice, 2, ",", ".")  ?> Recommended</label>
                            </div>
                        </div>

                        <div class="mb-2 d-grid gap-2" style="text-align: center;">
                            <input class="btn btn-primary btn-lg" type="submit" value="Confirm">
                        </div>
                        <div class="mb-2 d-grid gap-2" style="text-align: center;">
                            <input class="btn btn-danger btn-lg" type="reset" value="Cancel">
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
        integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous">
    </script>\



</body>

</html>