<?php
include '../../model/insert/statusbill.php';
$conn = connect();
if (isset($_POST['add'])) {
    $e_first = $_POST['e_first'];
    $e_last = $_POST['e_last'];
    $price_per_e = $_POST['price_per_e'];
    $w_first = $_POST['w_first'];
    $w_last = $_POST['w_last'];
    $price_per_w = $_POST['price_per_w'];
    $rooms_id = $_POST['rooms_id'];
    $start_date = $_POST['start_date'];
    $end_date = $_POST['end_date'];
    $payment = $_POST['payment'];
    $status = $_POST['status'];

    add($e_first,$e_last,$price_per_e,$w_first,$w_last,$price_per_w,$rooms_id,$start_date,$end_date,$payment,$status);
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
                <h1>STATUS BILL </h1>
            </div>

            <div class="body">
                <ul>
                    <li>
                        <p>Tên phòng</p>
                    </li>
                    <li>
                        <select name="rooms_id">
                            <?php
                            $sql = "SELECT * FROM rooms";
                            $result = mysqli_query($conn, $sql);
                            if (mysqli_num_rows($result) > 0) {
                                while ($row = mysqli_fetch_assoc($result)) { ?>
                                    <option value="<?php echo $row['id'] ?>"><?php echo $row['room_name'] ?></option>
                            <?php }
                            }
                            ?>
                        </select>
                    </li>
                    <!-- Số điện tiêu thụ -->
                    <li>
                        <p>Số điện đầu vào</p>
                    </li>
                    <li><input type="text" name="e_first" placeholder="Nhập số đầu vào"></li>
                    <li>
                        <p>Số điện đầu ra</p>
                    </li>
                    <li><input type="text" name="e_last" placeholder="Nhập số đầu ra"></li>
                    <li>
                        <p>Số tiền điện trên 1 số</p>
                    </li>
                    <li><input type="text" name="price_per_e" placeholder="Nhập số tiền trên số"></li>
                    <!-- số nước tiêu thụ -->
                    <li>
                        <p>Số nước đầu vào</p>
                    </li>
                    <li><input type="text" name="w_first" placeholder="Nhập số đầu vào"></li>
                    <li>
                        <p>Số nước đầu ra</p>
                    </li>
                    <li><input type="text" name="w_last" placeholder="Nhập số đầu ra"></li>
                    <li>
                        <p>Số tiền nước trên 1 số</p>
                    </li>
                    <li><input type="text" name="price_per_w" placeholder="Nhập số tiền trên số"></li>

                    <li>
                        <p>Từ ngày</p>
                    </li>
                    <li><input type="date" name="start_date"></li>
                    <li>
                        <p>Đến ngày</p>
                    </li>
                    <li><input type="date" name="end_date"></li>
                    <li>
                        <p>Trạng thái</p>
                    </li>
                    <li>
                        <select name="status">
                            <option value="0">Chưa thanh toán</option>
                            <option value="1">Đã thanh toán</option>
                        </select>
                    </li>
                    <li>
                        <p>Phương thức</p>
                    </li>
                    <li>
                        <select name="payment">
                            <option value="0">Chuyển khoản</option>
                            <option value="1">Tiền mặt</option>
                        </select>
                    </li>

                    <li>
                        <input type="submit" class="btn" name="add" value="THÊM">
                    </li>
                </ul>
            </div>
        </div>
    </form>
</body>

</html>