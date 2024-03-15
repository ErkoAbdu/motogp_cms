<?php
    if(isset($_POST['updateManufacturer'])){
    // print_r($_POST);
    $id = $_POST['id'];
    $manufacturer_name = $_POST['manufacturer_name'];
    $imageURL = $_POST['imageURL'];

    //Connection String
    include('connect.php');
    $query = "UPDATE manufacturer_table SET manufacturer_name='$manufacturer_name', imageURL='$imageURL' WHERE id = '$id'";

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