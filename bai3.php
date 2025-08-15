<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Phép Tính Trên Hai Số</title>
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
        label {
            font-weight: bold;
        }
        input[type="number"] {
            width: 100px;
            text-align: center;
        }
        .button {
            margin-top: 15px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>PHÉP TÍNH TRÊN HAI SỐ</h2>
        <form method="POST" action="handle_operation.php">
            <label>Chọn phép tính:</label><br>
            <input type="radio" name="pheptinh" value="cong" checked> Cộng
            <input type="radio" name="pheptinh" value="tru"> Trừ
            <input type="radio" name="pheptinh" value="nhan"> Nhân
            <input type="radio" name="pheptinh" value="chia"> Chia
            <input type="radio" name="pheptinh" value="songuyento"> Nguyên tố
            <input type="radio" name="pheptinh" value="sochanle"> Chẵn / Lẻ
            <br><br>
            <label>Số thứ nhất:</label>
            <input type="number" name="so1" required><br><br>

            <label>Số thứ hai:</label>
            <input type="number" name="so2"><br><br>

            <input class="button" type="submit" value="Tính">
        </form>
    </div>
</body>
</html>
