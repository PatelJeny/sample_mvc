<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/index.css">
</head>

<body>
    <div class="jumbotron">
        <h1>My website</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus totam placeat laudantium optio, eos iure dicta voluptas repellat non? Ipsa esse corrupti soluta animi nemo eius cumque minima repellat autem.</p>
    </div>
    <div class="container card container-login">
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <div class="form-group">
                <label for="LABEL_USER_EMAIL">Email</label>
                <input type="text" name="email" id="LABEL_USER_EMAIL" class="form-control">
            </div>
            <div class="form-group">
                <label for="LABEL_USER_PASSWORD">Password</label>
                <input type="password" name="password" id="LABEL_USER_PASSWORD" class="form-control">
            </div>
            <div class="form-group text_align_center">
                <input type="submit" class="btn btn-info">
                <a href="signup.php" class="btn btn-secondary">Signup</a>
            </div>

            <?php

            if ($isAuthorized === true) {
                header("Location:dashboard.php");
            } else if ($isAuthorized === false) {
            ?>


                <div class="alert alert-danger">
                    <strong>Failed</strong>Invalid credentials
                </div>

            <?php
            }


            ?>

        </form>
    </div>
</body>

</html>