<?php
   include('xulyDN.php');
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Đăng nhập</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css"> 
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script> 
        <link rel="stylesheet" type="text/css" href="style.css">
        <style>
            .has-error{
                color: red;
            }
        </style>

    </head>
    <body>
    <div class="container">
            <div class="row">
                <div class="col-md-4">

                </div>
                <div class="col-md-5">
                    <form action="" method="POST">
                        <h2>Đăng nhập</h2>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" class="form-control" placeholder="Email của bạn" name="email">
                            <div class="has-error">
                                <span><?php echo (isset($error['email']) ? $error['email'] : ''); ?></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Mật khẩu</label>
                            <input type="text" class="form-control" placeholder="Password của bạn" name="password">
                            <div class="has-error">
                                <span><?php echo (isset($error['password']) ? $error['password'] : ''); ?></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <button class="btn btn-success" type="submit">Đăng nhập</button>
                            <a href="dangnhap.php" class="btn btn-success">Làm mới</a>
                            <a href="dangky.php" class="btn btn-success">Đăng ký
                            
                            </a>
                        </div>
                    </form>
                </div>		
            </div>
        </div>
    </body>
</html>