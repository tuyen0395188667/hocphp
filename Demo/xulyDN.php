<?php
    session_start();
    //Khai báo utf-8 để hiển thị được tiếng việt
    header('Content-Type: text/html; charset=UTF-8');

    // Kết nối Database
    global $conn;
    include ('ketnoi.php');
    connect_db();

    $error = [];
    if(isset($_POST['email'])){
        $email = $_POST['email'];
        $password = $_POST['password'];

        if(empty($email))
        {
            $error['email'] = "Bạn chưa nhập email";
        } 
        else if(empty($password))
        {
            $error['password'] = "Bạn chưa nhập mật khẩu";
        }

        $sql = "SELECT * FROM users WHERE email = '$email' ";
        // Thực hiện truy vấn Do dùng Unique nên giá trị có sẽ num_col = 1, không có sẽ bằng 0
        $query = mysqli_query($conn, $sql);
        // $query đăng ở dạng Object sử dụng hàm mysqli_fetch_assoc() để lấy mảng
        $data = mysqli_fetch_assoc($query);
        $checkEmail = mysqli_num_rows($query);

        if(empty($error))
        {
            if($checkEmail == 1){
                if ($password == $data['password']){
                    $_SESSION['user'] = $data;
                    header('location: index.php');
                }
                else {
                    $error['password'] = "Password không chính xác";
                }
            }
            else {
                $error['email'] = "Email không tồn tại";
            }
        }
    }
?>