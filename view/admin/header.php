<?php
require '../../controller/m_database.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../public/css/style_admin.css">
    <link rel="stylesheet" href="../../public/font/fontawesome-free-6.1.1-web/css/all.css">
    <title>USER</title>
</head>

<body>
    <div id="content">
        <div id="header">
            <ul id="nav">
                <li style="color: rgba(0, 128, 0, .5);">
                    <h1>HUNRE</h1>
                </li>
                <li>
                    <p class="tabItems active"><i class="fa-solid fa-house mr8"></i>TRANG CHỦ</p>
                </li>
                <li>
                    <p class="tabItems"><i class="fa-regular fa-calendar mr8"></i>Quản lý sinh viên</p>
                </li>
                <li>
                    <p class="tabItems"><i class="fa-regular fa-calendar mr8"></i>Quản lý phòng</p>
                </li>
                <li>
                    <p class="tabItems"><i class="fa-regular fa-calendar mr8"></i>Quản lý ngươi dùng</p>
                </li>
                <li>
                    <p class="manage-bill"><i class="fa-regular fa-calendar mr8"></i>Quản lý hóa đơn</p>
                    <ul class="subnav hide">
                        <li>
                            <p class="tabItems">Điện nước</p>
                        </li>
                        <li>
                            <p class="tabItems">Dịch vụ</p>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>

        <?php include 'footer.php' ?>
    </div>
</body>