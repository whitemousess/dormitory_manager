<?php
include '../../model/insert/rooms.php';
$conn = connect();
if(isset($_POST['add'])){
    $room_name = $_POST['room_name'];
    $price = $_POST['price'];
    $max_num = $_POST['max_num'];
    $user_id = $_POST['user_id'];
    $status = $_POST['status'];
    add($room_name,$price,$max_num,$user_id,$status);
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
                <h1>ROOM </h1>
            </div>

            <div class="body">
                <ul>
                    <li>
                        <p>Tên phòng : </p>
                    </li>
                    <li><input type="text" name="room_name" placeholder="Nhập tên phòng"></li>
                    <li>Già phòng : </li>
                    <li><input type="text" name="price" placeholder="Nhập giá"></li>
                    <li>
                        <p>Số người</p>
                    </li>
                    <li><input type="text" name="max_num" placeholder="Nhập Số người"></li>

                    <li>Quản lý</li>
                    <li>
                        <select name="user_id">
                            <?php   
                            $sql = "SELECT * FROM users WHERE role = 0";
                            $result = mysqli_query($conn , $sql);
                            if(mysqli_num_rows($result) > 0){
                                while ($row = mysqli_fetch_assoc($result)) { ?>
                                    <option value="<?php echo $row['id'] ?>"><?php echo $row['name'] ?></option>
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
                        <input type="submit" class="btn" name="add" value="THÊM">
                    </li>
                </ul>
            </div>
        </div>
    </form>
</body>

</html>