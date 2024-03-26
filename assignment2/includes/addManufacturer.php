<?php
  if(isset($_POST['newManufacturer'])){
    $manufacturerName = $_POST['manufacturer_name'];
    $imageURL = $_POST['imageURL'];

    include ('connect.php');
    $query = "INSERT INTO manufacturer_table (manufacturer_name, imageURL) VALUES ('$manufacturerName','$imageURL')";

    $manufacturers = mysqli_query($connect, $query);

    if($manufacturers){
      header ("Location: ../manufacturerList.php");
    }else{
        echo "Failed" . mysqli_error($connect);
    }
    }else{
        echo "You shouldnt be here";
    }
?>