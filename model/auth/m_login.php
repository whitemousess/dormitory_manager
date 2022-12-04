<?php
require '../../controller/m_database.php';

function login($username, $password)
{
    $conn = connect();
    $query = mysqli_query($conn, "SELECT * FROM users WHERE username = '$username'");
    $row = mysqli_fetch_array($query);

    if (!$username || !$password) {
        echo "Vui lòng nhập đầy đủ tên đăng nhập và mật khẩu. <a href='javascript: history.go(-1)'>Trở lại</a>";
        exit;
    }

    if (mysqli_num_rows($query) == 0) {
        echo "Tên đăng nhập này không tồn tại. Vui lòng kiểm tra lại. <a href='javascript: history.go(-1)'>Trở lại</a>";
        exit;
    }

    if ($password != $row['password']) {
        echo "Mật khẩu không đúng. Vui lòng nhập lại. <a href='javascript: history.go(-1)'>Trở lại</a>";
        exit;
    }

    if ($row['status'] == 1) {
        if ($row['role'] == 0) {
            header("location:../../view/admin/header.php");
            die();
        }

        else{
            header("location:../../view/user/header.php");
            die();
        }
    }
}
