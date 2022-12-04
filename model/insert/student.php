<?php
include '../../controller/m_database.php';

function add(
    $username,
    $password,
    $name,
    $gender,
    $date_birth,
    $address,
    $email,
    $phone,
) {
    $conn = connect();
    $sql = "INSERT INTO `users`( `username`, `password`, `name`, `sex`, `date_birth`, `address`, `email`, `phone`, `role`) 
    VALUES ('$username','$password','$name','$gender','$date_birth','$address','$email','$phone',1)";
    if ($conn->query($sql) === true) {
        header('location:../admin/header.php');
    }
}

function edit($password, $name, $gender, $date_birth, $address, $email, $phone,$id)
{
    $conn = connect();
    $sql = "UPDATE `users` 
    SET 
    `password`='$password',`name`='$name',
    `sex`='$gender',`date_birth`='$date_birth'
    ,`address`='$address',`email`='$email'
    ,`phone`='$phone' WHERE id = '$id'";
    if ($conn->query($sql) === true) {
        header('location:../admin/header.php');
    }
}
