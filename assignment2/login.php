<?php

include('includes/config.php');
include('includes/connect.php');
// include('includes/function.php');
// secure();

if (isset($_POST['email'])) {

    $query = 'SELECT *
    FROM users
    WHERE email = "' . $_POST['email'] . '"
    AND password = "' . md5($_POST['password']) . '"
    LIMIT 1';
    $result = mysqli_query($connect, $query);

    if (mysqli_num_rows($result)) {
        $record = mysqli_fetch_assoc($result);

        $_SESSION['id'] = $record['id'];
        $_SESSION['email'] = $_POST['email'];

        header('Location: /index.php');
        die();
    }
}

include('includes/header.php');
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Untitled</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="main">MotoGP Grid</div>
    <div class="register-photo">
        <div class="form-container">
            <div class="image-holder">
                <img class="racerimg" src="./images/racer.jpg" alt="">
            </div>
            <form class="formgp" method="post">
                <!-- <h2 class="text-center"><strong>Create</strong> an account.</h2> -->
                <div class="form-group"><input class="form-control" type="text" name="email" placeholder="Email"></div>
                <div class="form-group"><input class="form-control" type="password" name="password" placeholder="Password"></div>

                <div class="form-group"><button class="btn btn-primary btn-block" type="submit" value="Login"><a href="index.php">Login</a></button></div></form>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
</body>

</html>