<?php

function secure()
{
    if(!isset($_SESSION['id'])){
        header('Location: ./login.php');
        die();
    }
}