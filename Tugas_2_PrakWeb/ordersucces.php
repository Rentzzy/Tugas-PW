<?php

$totalprice = $_POST['totalprice'];
$payment = $_POST['payment'];

$change = $payment - $totalprice;

$nominal = [100000, 50000, 20000, 10000, 5000, 2000, 1000, 500, 200, 100];
$amount = [];

$sisa = $change;
foreach ($nominal as $uang) {
    if ($sisa >= $uang) {
        $jumlah_nominal = floor($sisa / $uang);
        $amount[$uang] = $jumlah_nominal;
        $sisa = $sisa % $uang;
    }
}

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
                    <?php if ($change > 0) { ?>
                        <div class="text-center">
                            <h2>Payment Successful</h2>
                            <h4>Return to Order form and check your order</h4>
                        </div>

                        <table class="table table-bordered mt-4">
                            <thead>
                                <tr>
                                    <th>Description</th>
                                    <th>Amount (Rp)</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Total Price</td>
                                    <td><?php echo number_format($totalprice, 2, ',', '.'); ?></td>
                                </tr>
                                <tr>
                                    <td>Payment</td>
                                    <td><?php echo number_format($payment, 2, ',', '.'); ?></td>
                                </tr>
                                <tr>
                                    <td>Change</td>
                                    <td><?php echo number_format($change, 2, ',', '.'); ?></td>
                                </tr>
                            </tbody>
                        </table>
                        <h3 class="mt-4">Recommended Nominal Change:</h3>
                        <table class="table table-bordered mt-3">
                            <thead>
                                <tr>
                                    <th>Nominal (Rp)</th>
                                    <th>Quantity</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($amount as $qty => $jumlah) { ?>
                                    <tr>
                                        <td><?php echo number_format($qty, 2, ',', '.'); ?></td>
                                        <td><?php echo $jumlah; ?></td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    <?php } else if ($change < 0) { ?>
                        <div class="text-center">
                            <h2>Payment Decline</h2>
                            <h4>Return to Order form and check your order</h4>
                        </div>
                        <div class="alert alert-warning mt-4">
                            Insufficient payment. Please add Rp. <?php echo number_format(abs($change), 2, ',', '.'); ?>.
                        </div>
                    <?php } else { ?>
                        <div class="text-center">
                            <h2>Payment Successful</h2>
                            <h4>Return to Order form and check your order</h4>
                        </div>

                        <table class="table table-bordered mt-4">
                            <thead>
                                <tr>
                                    <th>Description</th>
                                    <th>Amount (Rp)</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Total Price</td>
                                    <td><?php echo number_format($totalprice, 2, ',', '.'); ?></td>
                                </tr>
                                <tr>
                                    <td>Payment</td>
                                    <td><?php echo number_format($payment, 2, ',', '.'); ?></td>
                                </tr>
                                <tr>
                                    <td>Change</td>
                                    <td><?php echo number_format($change, 2, ',', '.'); ?></td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="alert alert-success mt-4">
                            Exact payment received, no change required.
                        </div>
                    <?php } ?>
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