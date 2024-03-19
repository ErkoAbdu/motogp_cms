<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>MotoGP Grid 2024</title>
  <link rel = "stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
  <script src= "https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
  <?php include('includes/nav.php');?>
  <?php
    include("includes/connect.php");
    // $connect = mysqli_connect('sql311.infinityfree.com', 'if0_35758274', 'x96gqbkkqqrl', 'if0_35758274_http5225');
    $query = 'SELECT manufacturer_table.id, manufacturer_table.imageURL, manufacturer_table.manufacturer_name
    FROM manufacturer_table';

    $manufacturers= mysqli_query($connect, $query);

    if(mysqli_connect_error()){
      die("Connection error: " . mysqli_connect_error());
    }
  ?>
  <div class="container">
    <div class="row">
      <?php
        foreach ($manufacturers as $manufacturer){
          echo 
            '<div class="col-md-4 mb-3">
              <div class="card" style="width: 18rem;">
                <img src="'. $manufacturer['imageURL'] . '" class="card-img-top" alt="MotoGP Manufacturer Logo">
                <div class="card-body">
                  <h5 class="card-title">'. $manufacturer['manufacturer_name'].'</h5>
                </div>
                <div class ="card-footer d-flex display-flex:row justify-content-center">
                    <form method="GET" action="updateManufacturerForm.php">
                      <input type="hidden" name="id" value="' . $manufacturer['id'] . '">
                      <button type="submit" name="edit" class="btn btn-sm btn-info m-1">Edit</button>
                    </form>
                    <form method="GET" action="includes/deleteManufacturer.php">
                        <input type="hidden" name="id" value="' . $manufacturer['id'] . '">
                        <button type="submit" name="delete" class="btn btn-sm btn-danger m-1">Delete</button>
                    </form>
                </div>
              </div>
            </div>';
        }
      ?>
    </div>
  </div>
</body>
</html>