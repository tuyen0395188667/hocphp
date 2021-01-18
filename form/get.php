<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Get form</title>
</head>
<body>
    <h1>Ứng dụng tìm năm sinh</h1>
    <form action="get.php" method="get">
        <input type="text" name="year" value="">
        <input type="submit" value="Tìm Tuổi" name="btn">
    </form>

    <?php
        if(!empty($_GET['btn'])) 
        {
            // Người dùng đã kích vào button
            echo ($_GET['year']);
            // Bước 1: Lấy thông tin sử dụng dấu ? thay thế cho lệnh if else
            $year = isset($_GET['year']) ? (int)$_GET['year'] : 0; //Nếu trả vê true thì $year = (int)$_GET[''year]; flase thì $year = 0

            // Bước 2: Lấy năm sinh hiện tại bằng hàm date()
            $current_year = date('Y');

            // Bước 3: Kiểm tra năm sinh có hợp lệ hay không, nếu không thì thông báo
            if ($year <= 0)
            {
                echo 'Năm sinh không hợp lệ';
            }
            else if ($year > $current_year)
            {
                echo "Năm sinh bạn nhập lớn hơn năm hiện tại";
            }
            else 
            {
                echo 'Số tuổi hiện tại của bạn là ' . ($current_year - $year);
            }
        }
    ?>
</body>
</html>

