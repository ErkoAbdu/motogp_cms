<?php
  if(isset($_GET['delete'])){
    $id = $_GET['id'];

    include ('connect.php');

    $query = "DELETE FROM riders_table WHERE `id` = '$id'";
    $rider = mysqli_query($connect, $query);

    if($rider){
      header("Location: ../home.php");
      }else{
          echo "Failed" . mysqli_error($connect);
      }
      }else{
          echo "You shouldnt be here";
  }
?>