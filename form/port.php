<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Port Form</title>
    <style>
    input[type=text],[type=password]  {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    box-sizing: border-box;
    }
</style>
    
</head>
<body>
    <h1>Ứng dụng đăng nhập</h1>
    <form action="port.php" method="post">
        Username: <input type="text" name="username" id="" placeholder="Name" value=""> <br />
        Password: <input type="password" name="password" id="" placeholder="Password" value=""> <br />
        <input type="Submit" value="Đăng nhập" name="btn">
    </form>
        
    <?php
        // empty: Kiểm tra có rỗng hay không
        if ($_POST['btn'])
        {
            // B1: Lấy thông tin
            $username = isset($_POST['username']) ? $_POST['username'] : '';
            $password = isset($_POST['password']) ? $_POST['password'] : '';

            // B2: Kiểm tra thông tin
            if (!$username || !$password)
            {
                echo 'Bạn chưa nhập đủ thông tin';
            }
            else if ($username != "Tuyen" || $password != '0344014411') 
            {
                echo "Thông tin đăng nhập bị sai";
            }
            else 
            {
                echo "Bạn đăng nhập thành công";
            }
        }

    ?>
</body>
</html>