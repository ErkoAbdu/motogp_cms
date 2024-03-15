<?php
    if(isset($_POST['updateRider'])){
    // print_r($_POST);
    $id = $_POST['id'];
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $manufacturer_id = $_POST['manufacturer_id'];
    $nationality = $_POST['nationality'];
    $imageURL = $_POST['imageURL'];

    //Connection String
    include('connect.php');
    $query = "UPDATE riders_table SET fname='$fname', lname='$lname', manufacturer_id='$manufacturer_id', nationality='$nationality', imageURL='$imageURL' WHERE id = '$id'";

    $rider = mysqli_query($connect, $query);

    if($rider){
        header("Location: ../index.php");
    }else{
        echo "Failed" . mysqli_error($connect);
    }
    }else{
        echo "You shouldnt be here";
    }
?>