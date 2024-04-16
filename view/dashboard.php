<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/dashboard.css">
</head>

<body>
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
        <h2 class="company_name">Shopping Site</h2>
        <ul class="navbar nav">
            <?php
            if($isAdmin == true) { ?>
                <li class="nav-item">
                    <a class="nav-link" href="">New</a>
                </li>
            <?php
            }
            ?>
            <li class="nav-item">
                <a class="nav-link" href="">logout</a>
            </li>
            <li class="nav-item">
                <a class="nav-link disabled" href="#">Disabled</a>
            </li>
        </ul>
    </nav>
    <div class="container">
        <?php
        if ($result->num_rows > 0) { ?>
            <div class="container p-3"></div>
            <div class="row">
                <?php while ($productRow = $result->fetch_assoc()) { ?>
                    <div class="col-md-4 p-3">
                        <div class="card card_style" style="width:280px">
                            <img class="card-img-top img_align" src="<?php echo ("../assets/img/product_img/" . $productRow['img']) ?>" alt="card image">
                            <div class="card body p-3">
                                <h3 class="card-title text_align"><?php echo ($productRow['name']) ?></h3>
                                <p class="card-title text_align"><?php echo ($productRow['price']) ?></p>
                                <b class="card-title text_align"><?php echo ($productRow['description']) ?></b>

                                <?php
                                if($isAdmin == true){?>
                                <a href="" class="btn btn-warning">Edit</a>
                                <a href="" class="btn btn-danger">Delete</a>
                              <?php      
                                }else{
                                ?>
                                <a href="product.php?id=<?= $productRow['id'] ?>" class="btn btn-primary">View product</a>
                                <?php
                                }
                                ?>



                            </div>

                        </div>
                    </div>

                <?php
                }
                ?>
            </div>

        <?php
        }
        ?>

    </div>
</body>

</html>