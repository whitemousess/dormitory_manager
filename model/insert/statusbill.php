<?php
include '../../controller/m_database.php';

function add($e_first, $e_last, $price_per_e, $w_first, $w_last, $price_per_w, $rooms_id, $start_date, $end_date, $payment, $status)
{
    $conn = connect();
    $sql = "INSERT INTO `electric_water`( `e_first`, `e_last`, `price_per_e`, `w_first`, `w_last`, `price_per_w`, `rooms_id`, `start_date`, `end_date`, `payment`, `status`) 
    VALUES ('$e_first','$e_last','$price_per_e','$w_first','$w_last','$price_per_w','$rooms_id','$start_date','$end_date','$payment','$status')";

    if ($conn->query($sql) === true) {
        header('location:../admin/header.php');
    }
}

function edit($e_first,$e_last,$price_per_e,$w_first,$w_last,$price_per_w,$rooms_id,$start_date,$end_date,$payment,$status,$id)
{
    $conn = connect();
    $sql = "UPDATE `electric_water` SET `e_first`='$e_first',`e_last`='$e_last',`price_per_e`='$price_per_e',
    `w_first`='$w_first',`w_last`='$w_last',`price_per_w`='$price_per_w',
    `rooms_id`='$rooms_id',`start_date`='$start_date',`end_date`='$end_date',
    `payment`='$payment',`status`='$status' WHERE id = '$id'";
    if ($conn->query($sql) === true) {
        header('location:../admin/header.php');
    }
}
