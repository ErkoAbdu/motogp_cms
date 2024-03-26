<?php
include ("includes/config.php");
include ("includes/functions.php");

secure();
?>
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
    $query = 'SELECT riders_table.id, riders_table.fname, riders_table.lname, riders_table.team, riders_table.nationality, manufacturer_table.manufacturer_name, riders_table.imageURL
    FROM riders_table 
    JOIN manufacturer_table  ON riders_table.manufacturer_id = manufacturer_table.id
    WHERE riders_table.nationality = "Japan"';

    $riders= mysqli_query($connect, $query);

    if(mysqli_connect_error()){
      die("Connection error: " . mysqli_connect_error());
    }
  ?>
  <div class="container">
    <div class="row">
      <?php
        foreach ($riders as $rider){
          echo 
            '<div class="col-md-4 mb-3">
              <div class="card" style="width: 18rem;">
                <img src="'. $rider['imageURL'] . '" class="card-img-top" alt="MotoGP rider">
                <div class="card-body">
                  <h5 class="card-title">'. $rider['fname']. ' ' . $rider['lname'].'</h5>
                  <p class="card-text"><strong>Team</strong>: '. $rider['team'] .'</p>
                </div>
                <ul class="list-group list-group-flush">
                  <li class="list-group-item"><strong>Nationality</strong>: '. $rider['nationality'] .'</li>
                  <li class="list-group-item"><strong>Manufacturer</strong>: '. $rider['manufacturer_name'] .'</li>
                </ul>
                <div class ="card-footer">
                    <form method="GET" action="updateRiderForm.php">
                      <input type="hidden" name="id" value="' . $rider['id'] . '">
                      <button type="submit" name="edit" class="btn btn-sm btn-info">Edit</button>
                    </form>
                    <form method="GET" action="includes/deleteRider.php">
                        <input type="hidden" name="id" value="' . $rider['id'] . '">
                        <button type="submit" name="delete" class="btn btn-sm btn-danger">Delete</button>
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