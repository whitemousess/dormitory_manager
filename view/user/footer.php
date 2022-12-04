<footer>
    <div id="body">

        <div class="tab-content">
            <div class="tab-pane active">
                <div class="wrap-layout">

                    <div class="box">
                        <h2>Số phòng</h2>
                    </div>

                    <div class="box">
                        <h2>Số Sinh Viên</h2>
                    </div>

                    <div class="box">
                        <h2>Số phòng còn chỗ</h2>
                    </div>

                    <div class="box">
                        <h2>Số phòng đã đầy</h2>
                    </div>

                </div>
            </div>

            <div class="tab-pane mt64">
                <ul>
                    <li>STT</li>
                    <li>Họ và Tên</li>
                    <li>Giới tính</li>
                    <li>Ngày sinh</li>
                    <li>Địa chỉ</li>
                </ul>
                <?php
                $conn = connect();
                $dem = 0;
                $sql_user = "SELECT * FROM users WHERE role = 1";
                $result = $conn->query($sql_user);
                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        $dem++;
                ?>
                            <ul class="student-list">

                                <li><?php echo $dem ?></li>
                                <li><?php echo $row['name'] ?></li>
                                <li><?php
                                    if ($row['sex'] == 0) {
                                        echo 'Nam';
                                    }
                                    if ($row['sex'] == 1) {
                                        echo 'Nữ';
                                    }
                                    ?></li>
                                <li><?php echo $row['date_birth'] ?></li>
                                <li><?php echo $row['address'] ?></li>
                            </ul>
                <?php }
                    
                }
                ?>
            </div>

            <div class="tab-pane mt64">
                <ul>
                    <li>STT</li>
                    <li>Tên phòng</li>
                    <li>Giá phòng</li>
                    <li>Trạng thái</li>
                </ul>

                <?php
                $conn = connect();
                $dem = 0;
                $sql_room = "SELECT * FROM rooms";
                $result = $conn->query($sql_room);
                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        $dem++;
                ?>
                        <ul class="student-list">

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
                        </ul>
                <?php }
                }
                ?>
            </div>

            <div class="tab-pane mt64">
                <ul>
                    <li>STT</li>
                    <li>Mã hóa đơn</li>
                    <li>Số điện trước khi dùng</li>
                    <li>Số điện sau khi dùng</li>
                    <li>Từ Ngày</li>
                    <li>Đến Ngày</li>
                </ul>
                </ul>
                <?php
                $conn = connect();
                $dem = 0;
                $sql_electric = "SELECT * FROM electric_water";
                $result = $conn->query($sql_electric);
                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        $dem++;
                ?>
                        <ul class="list">
                            <li><?php echo $dem ?></li>
                            <li><?php echo $row['id'] ?></li>
                            <li><?php echo $row['e_first'] ?></li>
                            <li><?php echo $row['e_last'] ?></li>
                            <li><?php echo $row['start_date'] ?></li>
                            <li><?php echo $row['end_date'] ?></li>
                        </ul>
                <?php }
                }
                ?>
            </div>

            <div class="tab-pane mt64">
                <ul>
                    <li>STT</li>
                    <li>Mã hóa đơn</li>
                    <li>Số nước trước khi dùng</li>
                    <li>Số nước sau khi dùng</li>
                    <li>Từ Ngày</li>
                    <li>Đến Ngày</li>
                </ul>
                </ul>
                <?php
                $conn = connect();
                $dem = 0;
                $sql_electric = "SELECT * FROM electric_water";
                $result = $conn->query($sql_electric);
                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        $dem++;
                ?>
                        <ul class="list">
                            <li><?php echo $dem ?></li>
                            <li><?php echo $row['id'] ?></li>
                            <li><?php echo $row['w_first'] ?></li>
                            <li><?php echo $row['w_last'] ?></li>
                            <li><?php echo $row['start_date'] ?></li>
                            <li><?php echo $row['end_date'] ?></li>
                        </ul>
                <?php }
                }
                ?>
            </div>

        </div>

    </div>
</footer>

<script src="../../public/js/main_client.js"></script>

</html>