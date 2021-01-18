<?php
    //Khai báo utf-8 để hiển thị được tiếng việt
    header('Content-Type: text/html; charset=UTF-8');

    // Kết nối Database
    global $conn;
    include ('ketnoi.php');
    connect_db();
    
    // Kiểm tra lỗi
    $error = [];
    if(isset($_POST['name']))
    {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $rPassword = $_POST['rPassword'];

        if(empty($name)){
            $error['name'] = "Bạn chưa nhập tên";
        } else if(empty($email)){
            $error['email'] = "Bạn chưa nhập email";
        } else if(empty($password)){
            $error['password'] = "Bạn chưa nhập password ";
        } else if($rPassword != $password){
            $error['rPassword'] = "Mật khẩu nhập lại không đúng";
        }
        
        if(empty($error)){

            $sql1 = "SELECT * FROM users WHERE name = '$name' ";
            $query1 = mysqli_query($conn, $sql1);
            $checkName = mysqli_num_rows($query1);

            $sql2 = "SELECT * FROM users WHERE email = '$email' ";
            $query2 = mysqli_query($conn, $sql2);
            $CheckEmail = mysqli_num_rows($query2);

            //Kiểm tra tên đăng nhập này đã có người dùng chưa
            if ($checkName > 0)
            {
                $error['name'] = "User đã tồn tại";
            } 
            else if ($CheckEmail == 1)
            {
                $error['email'] = "Email đã tồn tại";
                // echo "Email này đã có người dùng. Vui lòng chọn Email khác. <a href='javascript: history.go(-1)'>Trở lại</a>";
            } 
            else if(empty($error))
            {
                // Mã khóa mật khẩu
                // $password = md5($password);
                $sql = "INSERT INTO users(name, email, password) VALUE ('$name', '$email', '$password')";
                // Thực hiện truy vấn
                $query = mysqli_query($conn, $sql);
                if($query)
                {
                    header('location: dangnhap.php');
                }
            }
        }
    }
?>