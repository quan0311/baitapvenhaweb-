<?php
require 'functions.php';

$pheptinh = $_POST['pheptinh'];
$so1 = isset($_POST['so1']) ? (int)$_POST['so1'] : 0;
$so2 = isset($_POST['so2']) ? (int)$_POST['so2'] : 0;

$ketqua = "";
$label = "";

switch ($pheptinh) {
    case "cong":
        $ketqua = tinhTong($so1, $so2);
        $label = "Tổng";
        break;
    case "tru":
        $ketqua = tinhHieu($so1, $so2);
        $label = "Hiệu";
        break;
    case "nhan":
        $ketqua = tinhTich($so1, $so2);
        $label = "Tích";
        break;
    case "chia":
        $ketqua = tinhThuong($so1, $so2);
        $label = "Thương";
        break;
    case "songuyento":
        $ketqua = laSoNguyenTo($so1) ? "$so1 là số nguyên tố" : "$so1 không phải là số nguyên tố";
        $label = "Kiểm tra số nguyên tố";
        break;
    case "sochanle":
        $ketqua = laSoChan($so1) ? "$so1 là số chẵn" : "$so1 là số lẻ";
        $label = "Kiểm tra chẵn lẻ";
        break;
    default:
        $label = "Không xác định";
        $ketqua = "Vui lòng chọn phép tính.";
        break;
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Kết quả phép tính</title>
    <style>
        body {
            font-family: Arial;
            text-align: center;
        }
        .container {
            width: 400px;
            margin: 40px auto;
            border: 3px solid #0000FF;
            padding: 20px;
            background-color: #f9f9f9;
        }
        h2 {
            color: red;
        }
        p {
            font-size: 16px;
        }
        a {
            color: blue;
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>KẾT QUẢ PHÉP TÍNH</h2>
        <p>Phép tính: <strong><?= ucfirst($label) ?></strong></p>
        <p>Số 1: <?= $so1 ?></p>

        <?php if (in_array($pheptinh, ['cong', 'tru', 'nhan', 'chia'])): ?>
            <p>Số 2: <?= $so2 ?></p>
        <?php endif; ?>

        <p>Kết quả: <strong><?= $ketqua ?></strong></p>

        <a href="bai3.php">Quay lại trang trước</a>
    </div>
</body>
</html>
