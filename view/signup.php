<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/signup.css">
</head>
<body>
<div class="jumbotron">
        <h1>Create Your Account</h1>
        <p>We need some of information to create your account</p>
    </div>
    <div class="container card container-login">
        <form method="post" action="/sample_mvc/controller/signup.php">
            <div class="form-group">
                <label for="LABEL_USER_NAME">Name:</label>
                <input type="text" name="name" class="form-control" id="LABEL_USER_NAME">
            </div>
            <div class="form-group">
                <label for="LABEL_USER_EMAIL">Email:</label>
                <input type="text" name="email" class="form-control" id="LABEL_USER_EMAIL">
            </div>
            <div class="form-group">
                <label for="LABEL_USER_PASSWORD">Password:</label>
                <input type="password" name="password" class="form-control" id="LABEL_USER_PASSWORD">
            </div>
            <div class="form-group text_align_center">
                <input type="submit" class="btn btn-primary">
            </div>


            <?php 
            
            if($message!==null){
                echo($message);
            }
            

            ?>
</body>
</html>