<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bài Tập Lập Trình Web</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            background-color: #e6f0ff; /* nền xanh nhạt */
        }

        header {
            background-color: #0059b3; /* xanh đậm */
            color: white;
            padding: 20px;
            text-align: center;
        }

        header h1 {
            margin: 0;
            font-size: 28px;
        }

        header p {
            margin: 5px 0 0;
            font-size: 16px;
        }

        .container {
            max-width: 900px;
            margin: 20px auto;
            padding: 0 15px;
        }

        .week {
            background-color: white;
            padding: 20px;
            margin-bottom: 20px;
            border-radius: 10px;
            box-shadow: 0px 2px 6px rgba(0, 0, 0, 0.1);
        }

        .week h2 {
            margin-top: 0;
            font-size: 22px;
            color: #004080;
        }

        .buttons {
            margin-top: 10px;
        }

        .buttons a {
            display: inline-block;
            background-color: #0073e6; /* xanh tươi */
            color: white;
            padding: 8px 15px;
            border-radius: 5px;
            text-decoration: none;
            margin-right: 8px;
            font-size: 15px;
            transition: background-color 0.3s;
        }

        .buttons a:hover {
            background-color: #0059b3;
        }
    </style>
</head>
<body>

    <header>
        <h1>Lập Trình Web - Bài Tập</h1>
        <p>Bài tập các tuần học</p>
    </header>

    <div class="container">
        <div class="week">
            <h2>Tuần 1</h2>
            <div class="buttons">
                <a href="#">Bài 1</a>
                <a href="#">Bài 2</a>
                <a href="#">Bài 3</a>
            </div>
        </div>

        <div class="week">
            <h2>Tuần 2</h2>
            <div class="buttons">
                <a href="#">Chưa có bài tập</a>

            </div>
        </div>

        <div class="week">
            <h2>Tuần 3</h2>
            <div class="buttons">
                <a href="#">Chưa có bài tập</a>

            </div>
        </div>
    </div>

</body>
</html>
