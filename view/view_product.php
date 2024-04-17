<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/view_product.css">
</head>
<body>
    <div class="jumbotron">
    <h2 class="company_name"><?= "Hello ".$_SESSION["name"]  ?></h2>
    <div class="row">
    <div class="col-md-4">
    <img class="product_img" src="../assets/img/product_img/<?= $product->getImg()  ?>">
    </div>
    <div class="col-md-4">
                <h3><?= $product->getName() ?></h3>
                <p><?= $product->getPrice() ?></p>
                <p><b><?= $product->getDescription() ?></b></p>
                <hr>
                <a href="" class="btn btn-primary">Buy Now</a>
                <a href="" class="btn btn-warning">Add to cart</a>
               
    </div>

    </div>
    </div>
</body>
</html>