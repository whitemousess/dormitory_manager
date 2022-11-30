<?php
require '../../controller/m_database.php';

function login($username, $password)
{
    $conn = connect();

    if (!$username || !$password) {
        echo "Vui lòng nhập đầy đủ tên đăng nhập và mật khẩu. <a href='javascript: history.go(-1)'>Trở lại</a>";
        exit;
    }

    $query = mysqli_query($conn, "SELECT username, password,role FROM users WHERE username = '$username'");
    if (mysqli_num_rows($query) == 0) {
        echo "Tên đăng nhập này không tồn tại. Vui lòng kiểm tra lại. <a href='javascript: history.go(-1)'>Trở lại</a>";
        exit;
    }

    $row = mysqli_fetch_array($query);
    if ($password != $row['password']) {
        echo "Mật khẩu không đúng. Vui lòng nhập lại. <a href='javascript: history.go(-1)'>Trở lại</a>";
        exit;
    }

    if ($row['role'] == 0) {
        header("location:../../view/admin/header.php");
        die();
    }

    if ($row['role'] == 1) {
        header("location:../../view/user/header.php");
        die();
    }
}
