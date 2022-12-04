<?php
include '../../model/insert/rooms.php';
$conn = connect();
if (isset($_GET['edit'])) {
    $conn = connect();
    $getid =  $_GET['id'];
    $sql = "SELECT * FROM rooms where id = $getid";
    $result = $conn->query($sql);

    while ($row = mysqli_fetch_assoc($result)) {
        $DATA[] = $row;
    }

    if (isset($_POST['edit'])) {
        $room_name = $_POST['room_name'];
        $price = $_POST['price'];
        $max_num = $_POST['max_num'];
        $user_id = $_POST['user_id'];
        $status = $_POST['status'];
        edit($room_name, $price, $max_num, $user_id, $status, $_GET['id']);
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
    <title>LOGIN | EDIT</title>
</head>

<body>
    <form method="POST">
        <div id="container">
            <div class="header_login pull_right">
                <h1>ROOM </h1>
            </div>
            <?php foreach ($DATA as  $value) : ?>

                <div class="body">
                    <ul>
                        <li>
                            <p>Tên phòng : </p>
                        </li>
                        <li><input type="text" name="room_name" readonly value="<?php echo $value['room_name'] ?>" placeholder="Nhập tên phòng"></li>
                        <li>Già phòng : </li>
                        <li><input type="text" name="price" value="<?php echo $value['price'] ?>" placeholder="Nhập giá"></li>
                        <li>
                            <p>Số người</p>
                        </li>
                        <li><input type="text" name="max_num" value="<?php echo $value['max_num'] ?>" placeholder="Nhập Số người"></li>

                        <li>Quản lý</li>
                        <li>
                            <select name="user_id">
                                <?php
                                $sqla = "SELECT * FROM users WHERE role = 0";
                                $resulta = mysqli_query($conn, $sqla);
                                if (mysqli_num_rows($resulta) > 0) {
                                    while ($rowa = mysqli_fetch_assoc($resulta)) { ?>
                                        <option value="<?php echo $rowa['id'] ?>"><?php echo $rowa['name'] ?></option>
                                <?php }
                                }
                                ?>
                            </select>
                        </li>

                        <li>
                            <p>Tình trạng</p>
                        </li>
                        <li><select name="status">
                                <option value="0">Bảo trì</option>
                                <option value="1">Hoạt động</option>
                            </select></li>
                        <li>
                        <?php endforeach; ?>
                        <input type="submit" class="btn" name="edit" value="SỬA">
                        </li>
                    </ul>
                </div>
        </div>
    </form>
</body>

</html>