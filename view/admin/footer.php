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
            <!-- MANAGER STUDENT -->
            <div class="tab-pane">
                <ul>
                    <h1 class="header_body">QUẢN LÝ Sinh Viên</h1>
                </ul>
                <a href="../add/student.php"><button class="btn ml16"><i class="fa-solid fa-plus"></i></button></a>
                <ul>
                    <li>STT</li>
                    <li>Họ và Tên</li>
                    <li>Giới tính</li>
                    <li>Ngày sinh</li>
                    <li>Địa chỉ</li>
                    <li></li>
                </ul>
                <?php show_student(); ?>
            </div>
            <!-- MANAGER ROOMS -->
            <div class="tab-pane">
                <ul>
                    <h1 class="header_body">QUẢN LÝ Phòng</h1>
                </ul>
                <a href="../add/room.php"><button class="btn ml16"><i class="fa-solid fa-plus"></i></button></a>
                <ul>
                    <li>STT</li>
                    <li>Tên phòng</li>
                    <li>Giá phòng</li>
                    <li>Trạng thái</li>
                    <li></li>
                </ul>
                <?php show_rooms() ?>
            </div>
            <!-- MANAGER ADMIN ACCOUNT -->
            <div class="tab-pane">
                <ul>
                    <h1 class="header_body">QUẢN LÝ Người Quản Lý</h1>
                </ul>
                <a href="../add/admin.php"><button class="btn ml16"><i class="fa-solid fa-plus"></i></button></a>
                <ul>
                    <li>STT</li>
                    <li>Tên đăng nhập</li>
                    <li>Họ tên</li>
                    <li>Số điện thoại</li>
                    <li>Email</li>
                    <li>Trạng thái</li>
                    <li></li>
                </ul>
                <?php show_admin(); ?>
            </div>
            <!-- MANAGER ELECTRIC WATER -->
            <div class="tab-pane">
                <ul>
                    <h1 class="header_body">QUẢN LÝ Điện</h1>
                </ul>
                <ul>
                    <li>STT</li>
                    <li>Mã hóa đơn</li>
                    <li>Số điện trước khi dùng</li>
                    <li>Số điện sau khi dùng</li>
                    <li>Từ Ngày</li>
                    <li>Đến Ngày</li>
                </ul>
                </ul>
                <?php show_elec(); ?>
            </div>

            <div class="tab-pane">
                <ul>
                    <h1 class="header_body">QUẢN LÝ nước</h1>
                </ul>
                <ul>
                    <li>STT</li>
                    <li>Mã hóa đơn</li>
                    <li>Số nước trước khi dùng</li>
                    <li>Số nước sau khi dùng</li>
                    <li>Từ Ngày</li>
                    <li>Đến Ngày</li>
                </ul>
                </ul>
                <?php show_water(); ?>
            </div>

            <div class="tab-pane">
                <ul>
                    <h1 class="header_body">TRẠNG THÁI HÓA ĐƠN</h1>
                </ul>
                <a href="../add/statusbill.php"><button class="btn ml16"><i class="fa-solid fa-plus"></i></button></a>
                <ul>
                    <li>STT</li>
                    <li>Mã phòng</li>
                    <li>Trạng thái thanh toán</li>
                    <li></li>
                </ul>
                <?php show_statusbill() ?>
            </div>
        </div>

    </div>
</footer>

<script src="../../public/js/main_client.js"></script>

</html>