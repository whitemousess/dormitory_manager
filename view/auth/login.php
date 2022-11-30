<?php
require '../../model/auth/m_login.php';
if (isset($_POST['login'])) {
    $conn = connect();
    $username = $_POST['username'];
    $password = $_POST['password'];
    login($username,md5($password));
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
            <div class="body">
            <h1 class="text-center">ĐĂNG NHẬP</h1>
                <ul>
                    <li>
                        <p>Tài khoản</p>
                    </li>
                    <li><input type="text" name="username" placeholder="Nhập tài khoản"></li>
                    <li>
                        <p>Mật khẩu</p>
                    </li>
                    <li><input type="password" name="password" placeholder="Nhập Mật khẩu"></li>
                    <li>
                        <input type="submit" name="login" value="ĐĂNG NHẬP" class="btn">
                    </li>
                </ul>
            </div>

            <div class="header_login">
                <a class="full-height" href="./register.php">
                    <h1>REGISTER </h1>
                </a>
            </div>
        </div>
    </form>
</body>

</html>