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
   
    <div class="jumbotron">
        <h3>Are you adding new product</h3>
    </div>
    <div class="container">
        <form method="post" enctype="multipart/form-data" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <div class="form-group">
                <label for="pro_name">Pro_name</label>
                <input name="pro_name" type="text" class="form-control" id="pro_name">
            </div>
            <div class="form-group">
                <label for="pro_price">Pro_price</label>
                <input name="pro_price" type="text" class="form-control" id="pro_price">
            </div>
            <div class="form-group">
                <label for="pro_image">Pro_image</label>
                <input name="pro_image" type="file" class="form-control" id="pro_image">
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <input name="description" type="text" class="form-control" id="description">
            </div>
            <button type="submit" class="btn btn-warning">Add Product</button>
            <a href="dashboard.php" class="btn btn-danger">Cancel</a>
        </form>

        <?php

            if($productAdded!=null){
                echo($productAdded==true?"Product Added":"Failed"); 
            }

            ?>

        

    </div>
</body>

</html>