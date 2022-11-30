<?php
require '../../model/auth/m_register.php';

if (isset($_POST["register"])) {
    $conn = connect();
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    register($username, md5($password), $email);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../public/css/style_auth.css">
    <title>LOGIN | Manager</title>
</head>

<body>
    <form method="POST">
        <div id="container">
            <div class="header_login pull_right">
                <a class="full-height" href="./login.php">
                    <h1>LOGIN </h1>
                </a>
            </div>

            <div class="body">
                <h1 class="text-center">ĐĂNG KÝ</h1>
                <ul>
                    <li>
                        <p>Tài khoản</p>
                    </li>
                    <li><input type="text" name="username" placeholder="Nhập tài khoản"></li>
                    <li>Gmail</li>
                    <li><input type="email" name="email" placeholder="Nhập Email"></li>
                    <li>
                        <p>Mật khẩu</p>
                    </li>
                    <li><input type="password" name="password" placeholder="Nhập Mật khẩu"></li>
                    <li>
                        <input type="submit" class="btn" name="register" value="ĐĂNG KÝ">
                    </li>
                </ul>
            </div>
        </div>
    </form>
</body>

</html>