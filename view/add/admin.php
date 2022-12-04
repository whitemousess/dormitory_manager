<?php
include '../../model/insert/admin.php';
if (isset($_POST['add'])) {
    $conn = connect();
    $username = $_POST['username'];
    $password = $_POST['password'];
    $name = $_POST['name'];
    $gender = $_POST['gender'];
    $date_birth = $_POST['date_birth'];
    $address = $_POST['address'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    add($username, md5($password), $name, $gender, $date_birth, $address, $email, $phone);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../public/css/style_auth.css">
    <title>STUDENT | Manager</title>
</head>

<body>
    <form method="POST">
        <div id="container">
            <div class="header_login pull_right">
                <h1>ADMIN ACCOUNT</h1>
            </div>

            <div class="body">
                <ul>
                    <li>
                        <p>Tài khoản</p>
                    </li>
                    <li><input type="text" name="username" placeholder="Nhập tài khoản"></li>
                    <li>
                        <p>Mật khẩu</p>
                    </li>
                    <li><input type="password" name="password" placeholder="Nhập Mật khẩu"></li>

                    <li>Họ tên</li>
                    <li><input type="text" name="name" placeholder="Nhập họ và tên"></li>

                    <li>Giới tính</li>
                    <li><select name="gender">
                            <option value="0">Nam</option>
                            <option value="1">Nữ</option>
                        </select></li>

                    <li>Ngày sinh</li>
                    <li><input type="date" name="date_birth"></li>

                    <li>Địa chỉ</li>
                    <li><input type="text" name="address" placeholder="Nhập địa chỉ"></li>

                    <li>Email</li>
                    <li><input type="email" name="email" placeholder="Nhập Email"></li>

                    <li>Điện thoại</li>
                    <li><input type="text" name="phone" placeholder="Nhập Số điện thoại"></li>
                    <li><input type="submit" class="btn" name="add" value="Thêm"></li>
                </ul>
            </div>
        </div>
    </form>
</body>

</html>