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
                <h1 class="display-3 mt-4 mb-4">Update Manufacturer</h1>
            </div>
        </div>
        <?php
            $id = $_GET['id'];
            $connect = mysqli_connect('localhost', 'root', 'root', 'HTTP5225');
            $query = "SELECT * FROM manufacturer_table WHERE `id` = '$id'";
            $manufacturer = mysqli_query($connect, $query);

            $result = $manufacturer -> fetch_assoc();
        ?>

        <form action="includes/updateManufacturer.php" method="POST">
            <input type="hidden" name="id" value="<?php echo $result['id']; ?>">
            <div class="mb-3">
                <label for="manufacturer_name" class="form-label">Manufacturer Name</label>
                <input type="text" class="form-control" id="manufacturer_name" name="manufacturer_name"aria-describedby="manufacturer_name" value="<?php echo $result['manufacturer_name']; ?>">
            </div>
            <div class="mb-3">
                <label for="imageURL" class="form-label">Image URL</label>
                <input type="text" class="form-control" id="imageURL" name="imageURL" aria-describedby="imageURL" value="<?php echo $result['imageURL']; ?>">
            </div>
            <button type="submit" name="updateManufacturer"class="btn btn-primary">Submit</button>
        </form>
        <div class="container">
            <div class="row">
            </div>
        </div>
    </div> 
</body>
</html>