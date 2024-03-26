<?php
  include('includes/connect.php');
  include('includes/functions.php');
  if(isset($_POST['addUser'])){
    $query = 'INSERT INTO users(name, email, password) 
      VALUES (
        "' . mysqli_real_escape_string($connect, $_POST['name']) . '",
        "' . mysqli_real_escape_string($connect, $_POST['email']) . '",
        "' . md5($_POST['password']) . '"
    )';

    mysqli_query($connect, $query);
    
    set_message('User has been created');
    header('Location: index.php');
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MotoGP | Create User</title>
    <link rel = "stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
</head>
<body>
 <?php include("./includes/nav.php") ?>
    <div class = "container">
        <div class = "row">
            <div class="col">
                <?php echo get_message(); ?>
            </div>
        </div>
        <div class = "row">
            <div class="col">
                <h1 class="display-3 mt-4 mb-4">Create User</h1>
            </div>
        </div>
        <form action="" method="POST">
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" name="name"aria-describedby="Name">
                <div id="emailHelp" class="form-text"></div>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" aria-describedby="Email">
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="password" aria-describedby="Password">
            </div>
            <button type="submit" name="addUser" class="btn btn-primary">Submit</button>
            <a href="index.php" name="cancel" class="btn btn-danger">Cancel</a>
        </form>
        <div class="container">
            <div class="row">
            </div>
        </div>
    </div> 
</body>
</html>