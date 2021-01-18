<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>validate form js</title>

    <style>
        input[type=text],[type=password]  {
        width: 100%;
        padding: 12px 20px;
        margin: 8px 0;
        box-sizing: border-box;
        }
    </style>
    <script langueage="javascript"> 
        function validateForm()
        {
            // B1: Lấy giá trị của username và password
            var username = document.getElementById('username').value;
            var password = document.getElementById('password').value;

            // B2: Kiểm tra dữ liệu có hợp lệ hay không
            if (username == '')
            {
                alert('Bạn chưa nhập tên đăng nhập')
            } else if (password == "")
            {
                alert('Bặn chưa nhập mật khẩu')
            } else 
            {
                alert('Dữ liệu hợp lệ, ta có thể chấp nhận submit form');
            }
            return false;
        }
    </script>
</head>
<body>
    <h1>Validate form bằng javascript</h1>
    <form action="" method="post" onsubmit="return validateForm()">
        Username: <input type="text" name="username" id="username" value="" placeholder="Name">
        Password: <input type="password" name="password" id="password" value="" placeholder="Password">
        <input type="submit" value="Đăng nhập" name="login">
    </form>
</body>
</html>