<?php
    include ('xulyDK.php')
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Đăng ký</title>
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
                        <h2>Đăng ký tài khoản</h2>
                        <div class="form-group">
                            <label>Tên người dùng</label>
                            <input type="text" class="form-control" placeholder="Tên của bạn" name="name">
                            <div class="has-error">
                                <span><?php echo (isset($error['name']) ? $error['name'] : ''); ?></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" class="form-control" placeholder="Email của bạn" name="email">
                            <div class="has-error">
                                <span><?php echo (isset($error['email']) ? $error['email'] : ''); ?></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Mật khẩu</label>
                            <input type="password" class="form-control" placeholder="Password của bạn" name="password">
                            <div class="has-error">
                                <span><?php echo (isset($error['password']) ? $error['password'] : ''); ?></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Nhập lại mật khẩu</label>
                            <input type="password" class="form-control" placeholder="Nhập lại Password của bạn" name="rPassword">
                            <div class="has-error">
                                <span><?php echo (isset($error['rPassword']) ? $error['rPassword'] : ''); ?></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="checkbox" required name="">
                            <label>Tôi đồng ý điều khoản sử dụng</label>
                        </div>
                        <div class="form-group">
                            <button class="btn btn-success" type="submit">Đăng ký</button>
                            <a href="dangky.php" class="btn btn-success">Làm mới</a>
                        </div>
                    </form>
                </div>		
            </div>
        </div>
    </body>
</html>