<?php
//Khai báo sử dụng session
session_start();
 
//Khai báo utf-8 để hiển thị được tiếng việt
header('Content-Type: text/html; charset=UTF-8');
 
//Xử lý đăng nhập
if (isset($_POST['dangnhap'])) 
{
    //Lấy dữ liệu nhập vào
    $username = addslashes($_POST['txtUsername']);
    $password = addslashes($_POST['txtPassword']);
     
    // Gọi biến toàn cục $conn
    global $conn;
    // Kết nối  require để sử dụng file ketnoi.php
    require 'ketnoi.php';
    connect_db();

    // Lấy giá trị username trong db
    $sql = "SELECT username, password FROM member WHERE username='$username'";
    $query = mysqli_query($conn, $sql);
    
    if (mysqli_num_rows($query) == 0) {
        echo "Tên đăng nhập này không tồn tại. Vui lòng kiểm tra lại. <a href='javascript: history.go(-1)'>Trở lại</a>";
        exit;
    }
     
    //Lấy mật khẩu trong database ra
    $row = mysqli_fetch_array($query);
     
    //So sánh 2 mật khẩu có trùng khớp hay không
    if ($password != $row['password']) {
        // Cách 1
        echo "Mật khẩu không đúng. Vui lòng nhập lại. <a href='javascript: history.go(-1)'>Trở lại</a>";
        exit;

        // Cách 2
        // Sử dụng javascript để thông báo
        // echo '<script language="javascript">alert("Thông tin đăng nhập bị sai"); window.location="dangnhap.php";</script>';
          
        // Dừng chương trình
        // die ();
    }
     
    //Lưu tên đăng nhập
    $_SESSION['username'] = $username;
    echo "Xin chào" . $username . ". Bạn đã đăng nhập thành công. <a href='trangchu.php'>Về trang chủ</a>";
    die();
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Form đăng nhập</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="style.css">
        <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
        <!-- Load jquery trước khi load bootstrap js -->
        <script src="jquery-3.3.1.min.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
        <style>
            *{
            margin: 0;
            padding: 0;
            }
            .container{
                margin-top: 250px;
            }

	</style>
</head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-md-4">

                </div>
                <div class="col-md-5">
                    <form action="dangnhap.php?do=login" method="POST">
                        <h2>Đăng nhập</h2>
                        <div class="form-group">
                            <label>Tên đăng nhập</label>
                            <input type="text" class="form-control" name="txtUsername" required placeholder="Username">
                        </div>
                        <div class="form-group">
                            <label>Mật khẩu</label>
                            <input type="password" class="form-control" name="txtPassword" required placeholder="Password">
                        </div>
                        <div class="form-group">
                            <input type="submit" name="dangnhap" class="btn btn-success" title="Đăng nhập" value="Đăng nhập"> 
                            <hr>
                            Đăng ký tài khoản mới: <a href='dangky.php' title='Đăng ký'>Click Here?</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>