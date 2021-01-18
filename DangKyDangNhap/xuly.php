<?php
   
    //Khai báo utf-8 để hiển thị được tiếng việt
    header('Content-Type: text/html; charset=UTF-8');
          
    //Lấy dữ liệu từ file dangky.php
    $username   = addslashes($_POST['txtUsername']);
    $password   = addslashes($_POST['txtPassword']);
    $email      = addslashes($_POST['txtEmail']);
    // $fullname   = addslashes($_POST['txtFullname']);
    $birthday   = addslashes($_POST['txtBirthday']);
    $sex        = addslashes($_POST['txtSex']);
          
    // Gọi tới biến toàn cục $conn
    global $conn;

    //Nhúng file kết nối với database
    include('ketnoi.php');
    // require 'ketnoi.php';
    connect_db();

    $sql1 = "SELECT username FROM member WHERE username='$username'";
    $query = mysqli_query($conn, $sql1);
    $rum = mysqli_num_rows($query);
    //Kiểm tra tên đăng nhập này đã có người dùng chưa
    if ($rum > 0){
        echo "Tên đăng nhập này đã có người dùng. Vui lòng chọn tên đăng nhập khác. <a href='javascript: history.go(-1)'>Trở lại</a>";
        exit;
    }
          
    $sql2 = "SELECT email FROM member WHERE email='$email'";
    $query2 = mysqli_query($conn, $sql2);
    $rum = mysqli_num_rows($query2);
    //Kiểm tra email đã có người dùng chưa
    if ($rum > 0)
    {
        echo "Email này đã có người dùng. Vui lòng chọn Email khác. <a href='javascript: history.go(-1)'>Trở lại</a>";
        exit;
    }

    //Lưu thông tin thành viên vào bảng
    $sql = "INSERT INTO member (username, password, email, birthday, sex)
        VALUE ('$username','$password','$email','$birthday','$sex')";
    $addmember = mysqli_query($conn, $sql);
                          
    //Thông báo quá trình lưu
    if ($addmember)
        echo "Quá trình đăng ký thành công. <a href='dangnhap.php'>Đăng nhập</a>";
    else
        echo "Có lỗi xảy ra trong quá trình đăng ký. <a href='dangky.php'>Thử lại</a>";
?>