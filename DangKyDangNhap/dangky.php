<!DOCTYPE html>
<html>
    <head>
        <title>Form đăng ký</title>
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
                margin-top: 100px;
            }
        </style>

    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-md-4">

                </div>
                <div class="col-md-5">
                    <form action="xuly.php" method="POST">
                        <h2>Đăng ký</h2>
                        <div class="form-group">
                            <label>Tên đăng nhập</label>
                            <input type="text" class="form-control" placeholder="Tên của bạn" required name="txtUsername">
                        </div>
                        <div class="form-group">
                            <label>Mật khẩu</label>
                            <input type="password" class="form-control" placeholder="Password của bạn" required name="txtPassword">
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                                <input type="email" class="form-control" placeholder="Email của bạn" required name="txtEmail">
                        </div>
                        <!-- <div class="form-group">
                            <label>Họ và tên</label>
                                <input type="text" class="form-control" placeholder="Họ và tên của bạn" required name="txtFullname">
                        </div> -->
                        <div class="form-group">
                            <label>Ngày sinh</label>
                                <input type="text" class="form-control" placeholder="Ngày sinh của bạn" required name="txtBirthday">
                        </div>
                        <div class="form-group">
                            <label>Giới tính</label>
                            <select class="form-control" name="txtSex">
                                <option selected >Giới tính của bạn</option>
                                <option>Nam</option>
                                <option>Nữ</option>
                                <option>Khác</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <input type="checkbox" required name="">
                            <label>Tôi đồng ý điều khoản sử dụng</label>
                        </div>
                        <div class="form-group">
                            <button class="btn btn-success" type="submit">Đăng ký</button>
                            <button class="btn btn-success" type="reset">Làm mới</button>
                        </div>
                    </form>
                </div>		
            </div>
        </div>
    </body>

</html>