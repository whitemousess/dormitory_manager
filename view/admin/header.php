<?php
include_once '../../controller/m_database.php';
if (isset($_GET['delete'])) {
    delete_student($_GET['id']);
    delete_rooms($_GET['id']);
    delete_admin($_GET['id']);
    delete_statusbill($_GET['id']);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../public/css/style_admin.css">
    <link rel="stylesheet" href="../../public/css/base.css">
    <link rel="stylesheet" href="../../public/font/fontawesome-free-6.1.1-web/css/all.css">
    <title>ADMIN</title>
</head>

<body>
    <div id="content">
        <div id="header">
            <ul id="nav">
                <li style="color: rgba(0, 128, 0, .5);">
                    <h1>HUNRE</h1>
                </li>
                <li>
                    <p class="tabItems active"><i class="fa-solid fa-house mr8"></i>TRANG CHỦ
                    </p>
                </li>
                <li>
                    <p class="tabItems"><i class="fa-regular fa-calendar mr8"></i>Quản lý sinh viên</p>
                </li>
                <li>
                    <p class="tabItems"><i class="fa-regular fa-calendar mr8"></i>Quản lý phòng</p>
                </li>
                <li>
                    <p class="tabItems"><i class="fa-regular fa-calendar mr8"></i>Người quản lý</p>
                </li>
                <li>
                    <p class="manage-bill"><i class="fa-regular fa-calendar mr8"></i>Quản lý hóa đơn</p>
                    <ul class="subnav hide">
                        <li>
                            <p class="tabItems"><i class="fa-sharp fa-solid fa-bolt mr8"></i>Điện </p>
                        </li>
                        <li>
                            <p class="tabItems"><i class="fa-solid fa-droplet mr8"></i>nước</p>
                        </li>
                        <li>
                            <p class="tabItems">Trạng thái</p>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>

        <?php include 'footer.php' ?>
    </div>
</body>