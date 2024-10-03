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
)

?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>BRIAN SHOP</title>
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body style="background-image: url(bg.jpg); background-repeat: no-repeat; background-size: cover;">

    <nav class="navbar navbar-expand-lg sticky-top" data-bs-theme="dark" style="background-color:#2c306f">
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
                        <a class="nav-link active" aria-current="page" href="index.php">Catalogue</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="order.php">Order</a>
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
            <h3 class="mt-2">Catalogue</h3>
            <div class="row mt-4">
                <?php foreach ($products as $index => $product) { ?>
                    <div class="col">
                        <div class="card mb-2" style="width: 18rem ;">
                            <img src="<?php echo $product['image'] ?>" class="card-img-top" style="height: 14rem;" alt="Gambar <?php echo $product['name'] ?>">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $product['name'] ?></h5>
                                <p class="card-text"> Rp. <?php echo number_format($product['price'], 2, ",", ".") ?></p>
                                <a href="order.php?index=<?php echo $index ?>" class="btn btn-primary">Buy Now</a>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </center>

    <footer class="footer position-absolute bottom-2 py-2 w-100" style="background-color: #2c306f;">
        <div class="container" style="text-align: center;">
            <div class="">
                <div class="">
                    <div class="text-center text-sm text-white">
                        © <script>
                            document.write(new Date().getFullYear())
                        </script>,
                        made with <i class="fa fa-heart"></i> by
                        <a href="https://www.instagram.com/febrianadhamumtaz/" class="font-weight-bold text-white" target="_blank">Febrian Adha M</a>
                        for a better Grade.
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>

</html>