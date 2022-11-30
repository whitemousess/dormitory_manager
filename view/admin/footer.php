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

            <div class="tab-pane">
                <ul>
                    <li>STT</li>
                    <li>Họ và Tên</li>
                    <li>Giới tính</li>
                    <li>Ngày sinh</li>
                    <li>Địa chỉ</li>
                    <li></li>
                </ul>
                </ul>
                <?php
                $conn = connect();
                $dem = 0;
                $sql_user = "SELECT * FROM users";
                $result = $conn->query($sql_user);
                $row = mysqli_fetch_assoc($result);
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
                            <li>Thay đổi thông tin | Xóa</li>
                        </ul>
                <?php }
                }
                ?>
            </div>

            <div class="tab-pane">
                <ul>
                    <li>STT</li>
                    <li>Tên phòng</li>
                    <li>Giá phòng</li>
                    <li>Trạng thái</li>

                <?php
                $conn = connect();
                $dem = 0;
                $sql_room = "SELECT * FROM rooms";
                $result = $conn->query($sql_room);
                $row = mysqli_fetch_assoc($result);
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
                                    echo 'Bảo trì';
                                }
                                if ($row['status'] == 1) {
                                    echo 'Hoại động';
                                }
                                ?></li>


                        </ul>
                <?php }
                }
                ?>
            </div>

            <div class="tab-pane">
                4
            </div>

            <div class="tab-pane">
                5
            </div>

        </div>

    </div>
</footer>

<script src="../../public/js/main_client.js"></script>

</html>