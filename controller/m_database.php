<?php
function connect()
{
    $conn = new mysqli('localhost', 'root', '', 'ql_kytuc');
    return $conn;
}

// ////////////////////ROOMS////////////////
function show_rooms()
{
    $dem = 0;
    $sql_room = "SELECT * FROM rooms";
    $result = connect()->query($sql_room);
    if (mysqli_num_rows($result) > 0) {
        while ($row = $result->fetch_assoc()) {
            $dem++;
?>
            <ul class="list">
                <li><?php echo $dem ?></li>
                <li><?php echo $row['room_name'] ?></li>
                <li><?php echo $row['price'] ?></li>
                <li><?php
                    if ($row['status'] == 0) {
                        echo '<p style="color: red;">Bảo trì</p>';
                    } else {
                        echo '<p style="color: green;">Hoại động</p>';
                    }
                    ?></li>
                <li><a href="../edit/room.php?edit&&id=<?php echo $row['id'] ?>"><i class="fa-solid fa-pen-to-square"></i></a> |
                    <a href="?delete&&id=<?php echo $row['id'] ?>"><i class="fa-solid fa-trash"></i></a>
                </li>
            </ul>
    <?php }
    }
}

function delete_rooms($id)
{
    $sql = "DELETE FROM `rooms` WHERE id = '$id'";
    $result = connect()->query($sql);
    return $result;
}

//////////////////////STUDENTS////////////////
function show_student()
{ ?>
    <?php
    $dem = 0;
    $sql_user = "SELECT * FROM users WHERE role = 0";
    $result = connect()->query($sql_user);
    if (mysqli_num_rows($result) > 0) {
        while ($row = $result->fetch_assoc()) {
                $dem++;
    ?>
                <form method="POST">
                    <ul class="list">
                        <li><?php echo $dem ?></li>
                        <li><?php echo $row['name'] ?></li>
                        <li><?php
                            if ($row['sex'] == 0) {
                                echo 'Nam';
                            } else {
                                echo 'Nữ';
                            }
                            ?></li>
                        <li><?php echo $row['date_birth'] ?></li>
                        <li><?php echo $row['address'] ?></li>
                        <li><a href="../edit/student.php?edit&&id=<?php echo $row['id'] ?>"><i class="fa-solid fa-pen-to-square"></i></a> |
                            <a href="?delete&&id=<?php echo $row['id'] ?>"><i class="fa-solid fa-trash"></i></a>
                        </li>
                    </ul>
                </form>
            <?php }
        }
}

function delete_student($id)
{
    $sql = "DELETE FROM `users` WHERE id = '$id'";
    $result = connect()->query($sql);
    return $result;
}

//////////////////////////ADMIN////////////////////////
function show_admin()
{
    $conn = connect();
    $dem = 0;
    $sql_user = "SELECT * FROM users WHERE role = 0";
    $result = $conn->query($sql_user);
    if (mysqli_num_rows($result) > 0) {
        while ($row = $result->fetch_assoc()) {
                $dem++;
            ?>
                <ul class="list">

                    <li><?php echo $dem ?></li>
                    <li><?php echo $row['username'] ?></li>
                    <li><?php echo $row['name'] ?></li>
                    <li><?php echo $row['phone'] ?></li>
                    <li><?php echo $row['email'] ?></li>
                    <li><?php
                        if ($row['status'] == 1) {
                            echo '<p style="color: green;">Hoạt động</p>';
                        } else {
                            echo '<p style="color: red;">Khóa</p>';
                        }
                        ?></li>
                    <li><a href="../edit/admin.php?edit&&id=<?php echo $row['id'] ?>"><i class="fa-solid fa-pen-to-square"></i></a> |
                        <a href="?delete&&id=<?php echo $row['id'] ?>"><i class="fa-solid fa-trash"></i></a>
                    </li>
                </ul>
            <?php }
    }
}

function delete_admin($id)
{
    $sql = "DELETE FROM `users` WHERE id = '$id'";
    $result = connect()->query($sql);
    return $result;
}

// ///////////////////////////elic/////////////////////////////
function show_elec()
{
    $conn = connect();
    $dem = 0;
    $sql_electric = "SELECT * FROM electric_water";
    $result = $conn->query($sql_electric);
    if (mysqli_num_rows($result) > 0) {
        while ($row = $result->fetch_assoc()) {
            $dem++;
            ?>
            <ul class="list">
                <li><?php echo $dem ?></li>
                <li><?php echo $row['id'] ?></li>
                <li><?php echo $row['e_first'] ?></li>
                <li><?php echo $row['e_last'] ?></li>
                <li><?php echo $row['start_date'] ?></li>
                <li><?php echo $row['end_date'] ?></li>
                </li>
            </ul>
        <?php }
    }
}
// /////////////////////////////////water////////////////
function show_water()
{
    $conn = connect();
    $dem = 0;
    $sql_electric = "SELECT * FROM electric_water";
    $result = $conn->query($sql_electric);
    if (mysqli_num_rows($result) > 0) {
        while ($row = $result->fetch_assoc()) {
            $dem++;
        ?>
            <ul class="list">
                <li><?php echo $dem ?></li>
                <li><?php echo $row['id'] ?></li>
                <li><?php echo $row['w_first'] ?></li>
                <li><?php echo $row['w_last'] ?></li>
                <li><?php echo $row['start_date'] ?></li>
                <li><?php echo $row['end_date'] ?></li>
                </li>
            </ul>
        <?php }
    }
}

// ////////////////////status Bill //////////////////
function show_statusbill()
{
    $conn = connect();
    $dem = 0;
    $sql_electric = "SELECT * FROM electric_water";
    $result = $conn->query($sql_electric);
    if (mysqli_num_rows($result) > 0) {
        while ($row = $result->fetch_assoc()) {
            $dem++;
        ?>
            <ul class="list">
                <li><?php echo $dem ?></li>
                <li><?php echo $row['rooms_id'] ?></li>
                <li><?php
                    if ($row['status'] == 1) {
                        echo '<p style="color: green;">Đã thanh toán</p>';
                    } else {
                        echo '<p style="color: red;">Chưa thanh toán</p>';
                    }
                    ?>
                <li><a href="../edit/statusbill.php?edit&&id=<?php echo $row['id'] ?>"><i class="fa-solid fa-pen-to-square"></i></a> |
                    <a href="?delete&&id=<?php echo $row['id'] ?>"><i class="fa-solid fa-trash"></i></a>
                </li>
                </li>
            </ul>
<?php }
    }
}

function delete_statusbill($id)
{
    $sql = "DELETE FROM `electric_water` WHERE id = '$id'";
    $result = connect()->query($sql);
    return $result;
}

?>