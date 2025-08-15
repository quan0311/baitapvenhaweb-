<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Danh sách sách có phân trang</title>
    <style>
        table {
            border-collapse: collapse;
            width: 80%;
            margin: 20px auto;
        }
        th, td {
            border: 1px solid black;
            padding: 8px 12px;
            text-align: center;
        }
        th {
            background-color: #f2f2f2;
        }
        .pagination {
            text-align: center;
            margin-top: 20px;
        }
        .pagination a {
            margin: 0 5px;
            text-decoration: none;
            padding: 6px 12px;
            border: 1px solid #999;
            color: #333;
        }
        .pagination a.active {
            font-weight: bold;
            background-color: #ddd;
        }
    </style>
</head>
<body>

<h2 style="text-align: center;">Danh sách sách (Phân trang)</h2>

<?php
    // Tổng số dòng và số dòng mỗi trang
    $total_items = 100;
    $items_per_page = 10;

    // Tổng số trang
    $total_pages = ceil($total_items / $items_per_page);

    // Lấy trang hiện tại từ URL (mặc định là 1 nếu không có)
    $current_page = isset($_GET['page']) ? (int)$_GET['page'] : 1;

    // Đảm bảo trang hiện tại nằm trong khoảng hợp lệ
    if ($current_page < 1) $current_page = 1;
    if ($current_page > $total_pages) $current_page = $total_pages;

    // Tính vị trí bắt đầu của dòng đầu tiên trên trang hiện tại
    $start_index = ($current_page - 1) * $items_per_page + 1;
    $end_index = min($start_index + $items_per_page - 1, $total_items);
?>

<table>
    <tr>
        <th>STT</th>
        <th>Tên sách</th>
        <th>Nội dung sách</th>
    </tr>

    <?php
        for ($i = $start_index; $i <= $end_index; $i++) {
            echo "<tr>";
            echo "<td>$i</td>";
            echo "<td>Tensach$i</td>";
            echo "<td>Noidung$i</td>";
            echo "</tr>";
        }
    ?>
</table>

<div class="pagination">
    <?php
        // Nút "Trang trước"
        if ($current_page > 1) {
            $prev = $current_page - 1;
            echo "<a href='?page=$prev'>&laquo; Trước</a>";
        }

        // Hiển thị các số trang
        for ($page = 1; $page <= $total_pages; $page++) {
            if ($page == $current_page) {
                echo "<a class='active' href='?page=$page'>$page</a>";
            } else {
                echo "<a href='?page=$page'>$page</a>";
            }
        }

        // Nút "Trang sau"
        if ($current_page < $total_pages) {
            $next = $current_page + 1;
            echo "<a href='?page=$next'>Sau &raquo;</a>";
        }
    ?>
</div>

</body>
</html>
