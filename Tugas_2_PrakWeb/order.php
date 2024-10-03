<?php

$products = array(
    array(
        "name" => "Knit Sweater",
        "price" => 369500,
        "image" => "https://i.etsystatic.com/10665528/r/il/18711e/3489291821/il_fullxfull.3489291821_naz2.jpg"
    ),
    array(
        "name" => "Plaid Dress",
        "price" => 124200,
        "image" => "https://di2ponv0v5otw.cloudfront.net/posts/2023/05/19/646827e456b2f8c1bf933cbd/m_646827e456b2f8c1bf933cbe.jpg"
    ),
    array(
        "name" => "Polo Shirt",
        "price" => 89000,
        "image" => "https://img.ws.mms.shopee.co.id/0d1cb4ce6d616197e7f8b8ded3b046c0"
    ),
    array(
        "name" => "Highwaist",
        "price" => 105600,
        "image" => "https://lzd-img-global.slatic.net/g/p/4232aba9e0ab118161d63529e24bd943.jpg_960x960q80.jpg_.webp"
    ),
    array(
        "name" => "Casual Sneakers",
        "price" => 259900,
        "image" => "https://img.adidas.com.hk/resources/2022/11/22/16691120604576788.jpg?x-oss-process=image/resize,m_pad,w_2000,h_2000,limit_0,color_ffffff/quality,q_80"
    ),
    array(
        "name" => "Bucket Hat",
        "price" => 199800,
        "image" => "https://footlocker.id/media/catalog/product/cache/e81e4f913a1cad058ef66fea8e95c839/0/1/01-NIKE-E04HPNIK5-NIKDC3967010-Black.jpg"
    )
);

$selectedIndex = isset($_GET['index']) ? $_GET['index'] : -1;
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
    <script>
        document.addEventListener("DOMContentLoaded", function() {            
            var products = <?php echo json_encode($products); ?>;
            var selectedIndex = <?php echo $selectedIndex; ?>;

            
            if (selectedIndex >= 0) {
                document.getElementById("product").value = products[selectedIndex].name;
                document.getElementById("price").value = products[selectedIndex].price;
            }
           
            document.getElementById("product").addEventListener("change", function() {
                var selectedProduct = this.value;
                var selectedPrice = 0;
                
                products.forEach(function(product) {
                    if (product.name === selectedProduct) {
                        selectedPrice = product.price;
                    }
                });
                document.getElementById("price").value = selectedPrice;
            });
        });
    </script>

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
                        <a class="nav-link active" href="order.php">Order</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="payment.php">Payment</a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>

    <center>
        
        <div class="card mt-4 mb-4 ms-2 me-2" style="min-width: 500px; max-width: 1000px; background-color: aliceblue;">
            <div class="card-body" style="align-content: start;">
                <div class="border-bottom border-3 border-dark">
                    <h2>Order Form</h2>
                </div>

                <form action="payment.php" method="POST">
                    <div style="text-align: start;">
                        <div class="mt-4 mb-4 border-bottom border-3 border-dark">
                            <label for="name" class="">Full Name</label>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="name" name="name" placeholder="Name:"
                                    required>
                                <label for="name" class="">Name:</label>
                            </div>

                            <div class="mb-3">
                                <label for="name" class="">Email Address</label>
                                <div class="form-floating mb-3">
                                    <input type="email" class="form-control" style="height: 60px" id="email" name="email" placeholder="Email:" required>
                                    <label for="email" class="">Email:</label>
                                </div>
                            </div>

                            <div class="mb-3">
                                <label for="name" class="">Phone Number</label>
                                <div class="form-floating mb-3">
                                    <input type="number" class="form-control" style="height: 60px" id="phone" name="phone" placeholder="Phone" required>
                                    <label for="phone" class="">Phone</label>
                                </div>
                            </div>

                            <div class="mb-3">
                                <label for="name" class="">Address</label>
                                <div class="form-floating mb-3">
                                    <textarea class="form-control" aria-label="With textarea" id="address" name="address" placeholder="Address" required></textarea>
                                    <label for="text" class="">Address</label>
                                </div>
                            </div>
                        </div>

                        <label for="product" class="form-label">Product :</label>
                        <div class="input-group mb-3" required>
                            <select class="form-select" id="product" name="product" style="height: 60px;" required>
                                <option value="null">Select Product</option>
                                <?php
                                foreach ($products as $product) {
                                    echo '<option value="' . $product["name"] . '">' . $product["name"] . '</option>';
                                }
                                ?>
                            </select>
                            <div class="form-floating">
                                <input type="number" class="form-control" style="height: 60px" id="price" name="price" placeholder="Price" readonly>
                                <label for="price" class="">Price</label>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="qty" class="">Quantity</label>
                            <div class="form-floating mb-3">
                                <input type="number" class="form-control" style="height: 60px" id="qty" name="qty" placeholder="Quantity" min="1" max="5" required>
                                <label for="qty" class="">Quantity</label>
                            </div>
                        </div>

                        <div class="mb-2 d-grid gap-2" style="text-align: center;">
                            <input class="btn btn-primary btn-lg" type="submit" value="Order">
                        </div>
                        <div class="mb-2 d-grid gap-2" style="text-align: center;">
                            <input class="btn btn-danger btn-lg" type="reset" value="Reset">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </center>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
        integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous">
    </script>\



</body>

</html>