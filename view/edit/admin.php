<?php
include '../../model/insert/student.php';
if (isset($_GET['edit'])) {
    $conn = connect();
    $getid =  $_GET['id'];
    $sql = "SELECT * FROM users where id = $getid";
    $result = $conn->query($sql);

    while ($row = mysqli_fetch_assoc($result)) {
        $DATA[] = $row;
    }

    if(isset($_POST['edit'])){
    $password = $_POST['password'];
    $name = $_POST['name'];
    $gender = $_POST['gender'];
    $date_birth = $_POST['date_birth'];
    $address = $_POST['address'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];

    edit(md5($password),$name,$gender,$date_birth,$address,$email,$phone, $_GET['id']);
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../public/css/style_auth.css">
    <title>STUDENT | EDIT</title>
</head>

<body>
    <form method="POST">
        <div id="container">
            <div class="header_login pull_right">
                <h1>ADMIN ACCOUNT</h1>
            </div>

            <?php foreach ($DATA as  $value) : ?>
                <div class="body">
                    <ul>
                        <li>
                            <p>Tài khoản</p>
                        </li>
                        <li><input type="text" readonly name="username" value="<?php echo $value['username'] ?>"></li>
                        <li>
                            <p>Mật khẩu</p>
                        </li>
                        <li><input type="password" name="password" placeholder="Nhập mật khẩu ..."></li>
                        <li>Họ tên</li>
                        <li><input type="text" value="<?php echo $value['name'] ?>" name="name"></li>

                        <li>Giới tính</li>
                        <li><select name="gender">
                                <option value="0">Nam</option>
                                <option value="1">Nữ</option>
                            </select></li>

                        <li>Ngày sinh</li>
                        <li><input type="date" value="<?php echo $value['date_birth'] ?>" name="date_birth"></li>

                        <li>Địa chỉ</li>
                        <li><input type="text" value="<?php echo $value['address'] ?>" name="address"></li>

                        <li>Email</li>
                        <li><input type="email" value="<?php echo $value['email'] ?>" name="email">

                        <li>Điện thoại</li>
                        <li><input type="text" value="<?php echo $value['phone'] ?>" name="phone"></li>
                        <li><input type="submit" class="btn" name="edit" value="SỬA"></li>
                    </ul>
                </div>
            <?php endforeach; ?>
        </div>
    </form>
</body>

</html>