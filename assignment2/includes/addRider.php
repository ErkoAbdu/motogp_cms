<?php
  if(isset($_POST['newRider'])){
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $team = $_POST['team'];
    $nationality = $_POST['nationality'];
    $manufacturer_id = $_POST['manufacturer_id'];
    $imageURL = $_POST['imageURL'];

    include ('../includes/connect.php');
    $query = "INSERT INTO riders_table (fname, lname, team, nationality, manufacturer_id, imageURL) VALUES ('$fname', '$lname', '$team', '$nationality', '$manufacturer_id', '$imageURL')";

    $riders = mysqli_query($connect, $query);

    if($riders){
      header ("Location: ../index.php");
    }else{
        echo "Failed" . mysqli_error($connect);
    }
    }else{
        echo "You shouldnt be here";
    }
?>