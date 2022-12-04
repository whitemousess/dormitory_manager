<?php
include '../../controller/m_database.php';

function add(
    $room_name,
    $price,
    $max_num,
    $user_id,
    $status
) {
    $conn = connect();
    $sql = "INSERT INTO `rooms`( `room_name`, `price`, `max_num`, `user_id`, `status`) 
    VALUES ('$room_name','$price','$max_num','$user_id','$status')";
    if ($conn->query($sql) === true) {
        header('location:../admin/header.php');
    }
}


function edit($room_name,$price,$max_num,$user_id,$status,$id)
{
    $conn = connect();
    $sql = "
    UPDATE `rooms` SET `room_name`='$room_name',`price`='$price'
    ,`max_num`='$max_num',`user_id`='$user_id',`status`='$status'  
    WHERE id = '$id'";
    if ($conn->query($sql) === true) {
        header('location:../admin/header.php');
    }
}

