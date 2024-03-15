<?php
  if(isset($_GET['delete'])){
    $id = $_GET['id'];

    include ('../includes/connect.php');

    $query = "DELETE FROM manufacturer_table WHERE `id` = '$id'";
    $manufacturer = mysqli_query($connect, $query);

    if($manufacturer){
      header("Location: ../manufacturerList.php");
      }else{
          echo "Failed" . mysqli_error($connect);
      }
      }else{
          echo "You shouldnt be here";
  }
?>