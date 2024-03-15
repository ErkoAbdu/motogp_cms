<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MotoGP 2024</title>
    <link rel = "stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <script src= "https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
 <?php include("includes/nav.php") ?>
    <div class = "container">
        <div class = "row">
            <div class="col">
                <h1 class="display-3 mt-4 mb-4">Update Rider</h1>
            </div>
        </div>
        <?php
            $id = $_GET['id'];
            $connect = mysqli_connect('localhost', 'root', 'root', 'HTTP5225');
            $query = "SELECT * FROM riders_table WHERE `id` = '$id'";
            $rider = mysqli_query($connect, $query);

            $result = $rider -> fetch_assoc();
        ?>

        <form action="includes/updateRider.php" method="POST">
            <input type="hidden" name="id" value="<?php echo $result['id']; ?>">
            <div class="mb-3">
                <label for="fname" class="form-label">First Name</label>
                <input type="text" class="form-control" id="fname" name="fname"aria-describedby="fname" value="<?php echo $result['fname']; ?>">
                <div id="emailHelp" class="form-text"></div>
            </div>
            <div class="mb-3">
                <label for="lname" class="form-label">Last Name</label>
                <input type="text" class="form-control" id="lname" name="lname" aria-describedby="lname" value="<?php echo $result['lname']; ?>">
            </div>
            <div class="mb-3">
                <label for="team" class="form-label">Team</label>
                <input type="text" class="form-control" id="team" name="team" aria-describedby="team"value="<?php echo $result['team']; ?>">
            </div>
            <div class="mb-3">
                <label for="nationality" class="form-label">Nationality</label>
                <input type="text" class="form-control" id="nationality" name="nationality" aria-describedby="nationality" value="<?php echo $result['nationality']; ?>">
            </div>
            <div class="mb-3">
                <label for="manufacturer_id" class="form-label">Manufacturer ID</label>
                <input type="number" class="form-control" id="manufacturer_id" name="manufacturer_id" aria-describedby="manufacturer_id" value="<?php echo $result['manufacturer_id']; ?>">
            </div>
            <div class="mb-3">
                <label for="imageURL" class="form-label">Image URL</label>
                <input type="text" class="form-control" id="imageURL" name="imageURL" aria-describedby="imageURL" value="<?php echo $result['imageURL']; ?>">
            </div>
            <button type="submit" name="updateRider"class="btn btn-primary">Submit</button>
        </form>
        <div class="container">
            <div class="row">
            </div>
        </div>
    </div> 
</body>
</html>