<?php
    session_start();
    // Nếu a tồn tại thì gía trị b = a, không thì b = rỗng
    $user = isset($_SESSION['user']) ? $_SESSION['user'] : [];
    // $user = $_SESSION['user'];
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Trang chủ</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css"> 
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script> 
        <link rel="stylesheet" type="text/css" href="style.css">
        <style>
            body {
                margin: 0px;
                padding: 0px;
            }
        </style>

    </head>
    <body>
        <nav class="navbar navbar-default" role="navigation">
            <div class="container">
                <div class="row">
                    <div class="container-fluid">
                        <!-- navbar-header -->
                        <div class="navbar-header">
                            <a href="" class="navbar-brand">Menu</a>
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>
                        <!-- /navbar-header -->

                        <!-- navbar-collapse -->
                        <div class="navbar-collapse collapse navbar-ex1-collapse"> 
                            <ul class="nav navbar-nav">
                                <li class="active"><a href="">Demos</a></li>
                                <li><a href="">Pages</a></li>
                            </ul>
                            <form class="navbar-form navbar-left" role="search">
                                <div class="form-group">
                                    <input type="text" name="" class="form-control" placeholder="Search">
                                </div>
                                <button type="submit" class="btn btn-default">Submit</button>
                            </form>
                            <ul class="nav navbar-nav navbar-right">
                                <li><a href="">Elements</a></li>
                                <?php if(isset( $user['email'])) { ?>
                                    <li class="dropdown">
                                        <a href="" class="dropdown-toggle" data-toggle="dropdown"><?php echo $user['email'] ?> <b class="caret"></b></a>
                                        <ul class="dropdown-menu">
                                            <!-- <li><a href="dangky.php">Đăng ký</a></li>
                                            <li><a href="dangnhap.php">Đăng nhập</a></li> -->
                                            <li><a href="logout.php">Logout</a></li>
                                        </ul>
                                    </li>
                                <?php } else { ?>
                                    <li class="dropdown">
                                        <a href="" class="dropdown-toggle" data-toggle="dropdown">Account<b class="caret"></b></a>
                                        <ul class="dropdown-menu">
                                            <li><a href="dangnhap.php">Login</a></li>
                                            <li><a href="dangky.php">Register</a></li>
                                            <!-- <li><a href="#">Đăng xuất</a></li> -->
                                        </ul>
                                    </li>
                                <?php } ?>
                            </ul>
                        </div> 
                        <!-- ./navbar-collapse -->
                    </div>
                </div>
            </div>
        </nav>
      
        <!-- page content -->
        <div class="jumbotron" style="text-align: center; background: royalblue;">
            <h1 style="color: white;">
                Lauch on time, <br> Look on-trend.
            </h1>
            <p style="color: rgb(236, 226, 226);">
                Save countless of design and development and ship <br> perfomant sites with killer looks
            </p>
            <p>
                <a href="https://freetuts.net" target="_blank" class="btn btn-primary btn-lg"
                    style="background: white; color: navy; border: none;">View Demos</a>
                <a href="https://freetuts.net" target="_blank" class="btn btn-primary btn-lg"
                    style="background: rgb(13, 3, 54); color: white; border: none;">Purchase</a>
            </p>
        </div>
        <!-- /page content -->

        <!-- page content 5 -->
        <div class="container">
            <!-- header5.1 -->
            <div class="row">
                <div class="header51" style="text-align: center; margin-bottom: 40px;">
                    <h1 style="font-weight: bold;">Customers love <br> Medium Rare</h1>
                    <p>
                        Here's what some of our 40,000 satisned customers have to say about <br> working with Medium Rare themes
                    </p>
                </div>
            </div>
            <!-- /header5.1 -->

            <!-- content 5.1 -->
            <div class="row">
                <!-- 1 -->
                <div class="col-md-4" style="padding-left: 0px;">
                    <div class="text0"
                        style="width: 370px; height: 200px; border: solid 1px rgb(187, 187, 187); border-radius: 10px; margin-bottom: 20px;">
                        <div class="text01">
                            <p style="padding: 20px; font-size: 20px;">
                                "it' <span style="background: rgb(226, 206, 206);">the best theme I've ever <br>
                                    purchased.</span>Excellent and easy <br> code,
                                excellent design."
                            </p>
                        </div>
                        <div class="text02">
                            <div class="col-md-2">
                                <p>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor"
                                        class="bi bi-flower1" viewBox="0 0 16 16">
                                        <path
                                            d="M6.174 1.184a2 2 0 0 1 3.652 0A2 2 0 0 1 12.99 3.01a2 2 0 0 1 1.826 3.164 2 2 0 0 1 0 3.652 2 2 0 0 1-1.826 3.164 2 2 0 0 1-3.164 1.826 2 2 0 0 1-3.652 0A2 2 0 0 1 3.01 12.99a2 2 0 0 1-1.826-3.164 2 2 0 0 1 0-3.652A2 2 0 0 1 3.01 3.01a2 2 0 0 1 3.164-1.826zM8 1a1 1 0 0 0-.998 1.03l.01.091c.012.077.029.176.054.296.049.241.122.542.213.887.182.688.428 1.513.676 2.314L8 5.762l.045-.144c.248-.8.494-1.626.676-2.314.091-.345.164-.646.213-.887a4.997 4.997 0 0 0 .064-.386L9 2a1 1 0 0 0-1-1zM2 9l.03-.002.091-.01a4.99 4.99 0 0 0 .296-.054c.241-.049.542-.122.887-.213a60.59 60.59 0 0 0 2.314-.676L5.762 8l-.144-.045a60.59 60.59 0 0 0-2.314-.676 16.705 16.705 0 0 0-.887-.213 4.99 4.99 0 0 0-.386-.064L2 7a1 1 0 1 0 0 2zm7 5l-.002-.03a5.005 5.005 0 0 0-.064-.386 16.398 16.398 0 0 0-.213-.888 60.582 60.582 0 0 0-.676-2.314L8 10.238l-.045.144c-.248.8-.494 1.626-.676 2.314-.091.345-.164.646-.213.887a4.996 4.996 0 0 0-.064.386L7 14a1 1 0 1 0 2 0zm-5.696-2.134l.025-.017a5.001 5.001 0 0 0 .303-.248c.184-.164.408-.377.661-.629A60.614 60.614 0 0 0 5.96 9.23l.103-.111-.147.033a60.88 60.88 0 0 0-2.343.572c-.344.093-.64.18-.874.258a5.063 5.063 0 0 0-.367.138l-.027.014a1 1 0 1 0 1 1.732zM4.5 14.062a1 1 0 0 0 1.366-.366l.014-.027c.01-.02.021-.048.036-.084a5.09 5.09 0 0 0 .102-.283c.078-.233.165-.53.258-.874a60.6 60.6 0 0 0 .572-2.343l.033-.147-.11.102a60.848 60.848 0 0 0-1.743 1.667 17.07 17.07 0 0 0-.629.66 5.06 5.06 0 0 0-.248.304l-.017.025a1 1 0 0 0 .366 1.366zm9.196-8.196a1 1 0 0 0-1-1.732l-.025.017a4.951 4.951 0 0 0-.303.248 16.69 16.69 0 0 0-.661.629A60.72 60.72 0 0 0 10.04 6.77l-.102.111.147-.033a60.6 60.6 0 0 0 2.342-.572c.345-.093.642-.18.875-.258a4.993 4.993 0 0 0 .367-.138.53.53 0 0 0 .027-.014zM11.5 1.938a1 1 0 0 0-1.366.366l-.014.027c-.01.02-.021.048-.036.084a5.09 5.09 0 0 0-.102.283c-.078.233-.165.53-.258.875a60.62 60.62 0 0 0-.572 2.342l-.033.147.11-.102a60.848 60.848 0 0 0 1.743-1.667c.252-.253.465-.477.629-.66a5.001 5.001 0 0 0 .248-.304l.017-.025a1 1 0 0 0-.366-1.366zM14 9a1 1 0 0 0 0-2l-.03.002a4.996 4.996 0 0 0-.386.064c-.242.049-.543.122-.888.213-.688.182-1.513.428-2.314.676L10.238 8l.144.045c.8.248 1.626.494 2.314.676.345.091.646.164.887.213a4.996 4.996 0 0 0 .386.064L14 9zM1.938 4.5a1 1 0 0 0 .393 1.38l.084.035c.072.03.166.064.283.103.233.078.53.165.874.258a60.88 60.88 0 0 0 2.343.572l.147.033-.103-.111a60.584 60.584 0 0 0-1.666-1.742 16.705 16.705 0 0 0-.66-.629 4.996 4.996 0 0 0-.304-.248l-.025-.017a1 1 0 0 0-1.366.366zm2.196-1.196l.017.025a4.996 4.996 0 0 0 .248.303c.164.184.377.408.629.661A60.597 60.597 0 0 0 6.77 5.96l.111.102-.033-.147a60.602 60.602 0 0 0-.572-2.342c-.093-.345-.18-.642-.258-.875a5.006 5.006 0 0 0-.138-.367l-.014-.027a1 1 0 1 0-1.732 1zm9.928 8.196a1 1 0 0 0-.366-1.366l-.027-.014a5 5 0 0 0-.367-.138c-.233-.078-.53-.165-.875-.258a60.619 60.619 0 0 0-2.342-.572l-.147-.033.102.111a60.73 60.73 0 0 0 1.667 1.742c.253.252.477.465.66.629a4.946 4.946 0 0 0 .304.248l.025.017a1 1 0 0 0 1.366-.366zm-3.928 2.196a1 1 0 0 0 1.732-1l-.017-.025a5.065 5.065 0 0 0-.248-.303 16.705 16.705 0 0 0-.629-.661A60.462 60.462 0 0 0 9.23 10.04l-.111-.102.033.147a60.6 60.6 0 0 0 .572 2.342c.093.345.18.642.258.875a4.985 4.985 0 0 0 .138.367.575.575 0 0 0 .014.027zM8 9.5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z" />
                                    </svg>
                                </p>
                            </div>
                            <div class="col-md-10" style="padding-left: 0px;">
                                <p>
                                    <span style="font-weight: bold;">felipelobo328</span> <br>
                                    <span>Themeforest Cunomer</span>
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="text12"
                        style="width: 370px; height: 300px; border: solid 1px rgb(187, 187, 187); border-radius: 10px; margin-bottom: 20px;">
                        <div class="text121">
                            <p style="padding: 20px; font-size: 20px;">
                                Ver versatile. Seems like<span style="background: rgb(226, 206, 206);"> you <br> can buid
                                    most of the stuff out<br>of the box.</span>
                                Very thoughtful; <br> team must be very <br> experienced in customer <br> stories and their
                                pain points.
                            </p>
                        </div>
                        <div class="text122">
                            <div class="col-md-2">
                                <p>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor"
                                        class="bi bi-bootstrap-fill" viewBox="0 0 16 16">
                                        <path
                                            d="M6.375 7.125V4.658h1.78c.973 0 1.542.457 1.542 1.237 0 .802-.604 1.23-1.764 1.23H6.375zm0 3.762h1.898c1.184 0 1.81-.48 1.81-1.377 0-.885-.65-1.348-1.886-1.348H6.375v2.725z" />
                                        <path
                                            d="M4.002 0a4 4 0 0 0-4 4v8a4 4 0 0 0 4 4h8a4 4 0 0 0 4-4V4a4 4 0 0 0-4-4h-8zm1.06 12V3.545h3.399c1.587 0 2.543.809 2.543 2.11 0 .884-.65 1.675-1.483 1.816v.1c1.143.117 1.904.931 1.904 2.033 0 1.488-1.084 2.396-2.888 2.396H5.062z" />
                                    </svg>
                                </p>
                            </div>
                            <div class="col-md-10" style="padding-left: 0px;">
                                <p>
                                    <span style="font-weight: bold;">rajasekhar reddy</span> <br>
                                    <span>Bootstrap Customers</span>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /1 -->

                <!-- 2 -->
                <div class="col-md-4" style="padding-left: 0px;">
                    <div class="text21"
                        style="width: 370px; height: 350px; border: solid 1px rgb(187, 187, 187); border-radius: 10px; margin-bottom: 20px;">
                        <div class="text211">
                            <p style="padding: 20px; font-size: 20px;">
                                "I like the plethora of <br> interchangeable block and <br> individua elemenys. This is a
                                <br> great and flexible bundle. and <br> for the price, totally worth it. <br> Also a <span
                                    style="background: rgb(226, 206, 206);">big shoutout to Craig<br> and James for their
                                    quick and <br> helful support."</span>
                            </p>
                        </div>
                        <div class="text212">
                            <div class="col-md-2">
                                <p>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor"
                                        class="bi bi-flower1" viewBox="0 0 16 16">
                                        <path
                                            d="M6.174 1.184a2 2 0 0 1 3.652 0A2 2 0 0 1 12.99 3.01a2 2 0 0 1 1.826 3.164 2 2 0 0 1 0 3.652 2 2 0 0 1-1.826 3.164 2 2 0 0 1-3.164 1.826 2 2 0 0 1-3.652 0A2 2 0 0 1 3.01 12.99a2 2 0 0 1-1.826-3.164 2 2 0 0 1 0-3.652A2 2 0 0 1 3.01 3.01a2 2 0 0 1 3.164-1.826zM8 1a1 1 0 0 0-.998 1.03l.01.091c.012.077.029.176.054.296.049.241.122.542.213.887.182.688.428 1.513.676 2.314L8 5.762l.045-.144c.248-.8.494-1.626.676-2.314.091-.345.164-.646.213-.887a4.997 4.997 0 0 0 .064-.386L9 2a1 1 0 0 0-1-1zM2 9l.03-.002.091-.01a4.99 4.99 0 0 0 .296-.054c.241-.049.542-.122.887-.213a60.59 60.59 0 0 0 2.314-.676L5.762 8l-.144-.045a60.59 60.59 0 0 0-2.314-.676 16.705 16.705 0 0 0-.887-.213 4.99 4.99 0 0 0-.386-.064L2 7a1 1 0 1 0 0 2zm7 5l-.002-.03a5.005 5.005 0 0 0-.064-.386 16.398 16.398 0 0 0-.213-.888 60.582 60.582 0 0 0-.676-2.314L8 10.238l-.045.144c-.248.8-.494 1.626-.676 2.314-.091.345-.164.646-.213.887a4.996 4.996 0 0 0-.064.386L7 14a1 1 0 1 0 2 0zm-5.696-2.134l.025-.017a5.001 5.001 0 0 0 .303-.248c.184-.164.408-.377.661-.629A60.614 60.614 0 0 0 5.96 9.23l.103-.111-.147.033a60.88 60.88 0 0 0-2.343.572c-.344.093-.64.18-.874.258a5.063 5.063 0 0 0-.367.138l-.027.014a1 1 0 1 0 1 1.732zM4.5 14.062a1 1 0 0 0 1.366-.366l.014-.027c.01-.02.021-.048.036-.084a5.09 5.09 0 0 0 .102-.283c.078-.233.165-.53.258-.874a60.6 60.6 0 0 0 .572-2.343l.033-.147-.11.102a60.848 60.848 0 0 0-1.743 1.667 17.07 17.07 0 0 0-.629.66 5.06 5.06 0 0 0-.248.304l-.017.025a1 1 0 0 0 .366 1.366zm9.196-8.196a1 1 0 0 0-1-1.732l-.025.017a4.951 4.951 0 0 0-.303.248 16.69 16.69 0 0 0-.661.629A60.72 60.72 0 0 0 10.04 6.77l-.102.111.147-.033a60.6 60.6 0 0 0 2.342-.572c.345-.093.642-.18.875-.258a4.993 4.993 0 0 0 .367-.138.53.53 0 0 0 .027-.014zM11.5 1.938a1 1 0 0 0-1.366.366l-.014.027c-.01.02-.021.048-.036.084a5.09 5.09 0 0 0-.102.283c-.078.233-.165.53-.258.875a60.62 60.62 0 0 0-.572 2.342l-.033.147.11-.102a60.848 60.848 0 0 0 1.743-1.667c.252-.253.465-.477.629-.66a5.001 5.001 0 0 0 .248-.304l.017-.025a1 1 0 0 0-.366-1.366zM14 9a1 1 0 0 0 0-2l-.03.002a4.996 4.996 0 0 0-.386.064c-.242.049-.543.122-.888.213-.688.182-1.513.428-2.314.676L10.238 8l.144.045c.8.248 1.626.494 2.314.676.345.091.646.164.887.213a4.996 4.996 0 0 0 .386.064L14 9zM1.938 4.5a1 1 0 0 0 .393 1.38l.084.035c.072.03.166.064.283.103.233.078.53.165.874.258a60.88 60.88 0 0 0 2.343.572l.147.033-.103-.111a60.584 60.584 0 0 0-1.666-1.742 16.705 16.705 0 0 0-.66-.629 4.996 4.996 0 0 0-.304-.248l-.025-.017a1 1 0 0 0-1.366.366zm2.196-1.196l.017.025a4.996 4.996 0 0 0 .248.303c.164.184.377.408.629.661A60.597 60.597 0 0 0 6.77 5.96l.111.102-.033-.147a60.602 60.602 0 0 0-.572-2.342c-.093-.345-.18-.642-.258-.875a5.006 5.006 0 0 0-.138-.367l-.014-.027a1 1 0 1 0-1.732 1zm9.928 8.196a1 1 0 0 0-.366-1.366l-.027-.014a5 5 0 0 0-.367-.138c-.233-.078-.53-.165-.875-.258a60.619 60.619 0 0 0-2.342-.572l-.147-.033.102.111a60.73 60.73 0 0 0 1.667 1.742c.253.252.477.465.66.629a4.946 4.946 0 0 0 .304.248l.025.017a1 1 0 0 0 1.366-.366zm-3.928 2.196a1 1 0 0 0 1.732-1l-.017-.025a5.065 5.065 0 0 0-.248-.303 16.705 16.705 0 0 0-.629-.661A60.462 60.462 0 0 0 9.23 10.04l-.111-.102.033.147a60.6 60.6 0 0 0 .572 2.342c.093.345.18.642.258.875a4.985 4.985 0 0 0 .138.367.575.575 0 0 0 .014.027zM8 9.5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z" />
                                    </svg>
                                </p>
                            </div>
                            <div class="col-md-10" style="padding-left: 0px;">
                                <p>
                                    <span style="font-weight: bold;">garyhorsman</span> <br>
                                    <span>Themeforest Customers</span>
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="text22"
                        style="width: 370px; height: 250px; border: solid 1px rgb(187, 187, 187); border-radius: 10px; margin-bottom: 20px;">
                        <div class="text221">
                            <p style="padding: 20px; font-size: 20px;">
                                "This is a superb product with <br> very<span style="background: rgb(226, 206, 206);"> nice
                                    designs and clean <br> code.</span> Using it is a breeze. 5- <br>star product. Also,
                                there's <br>updates.""
                            </p>
                        </div>
                        <div class="text222">
                            <div class="col-md-2">
                                <p>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor"
                                        class="bi bi-flower1" viewBox="0 0 16 16">
                                        <path
                                            d="M6.174 1.184a2 2 0 0 1 3.652 0A2 2 0 0 1 12.99 3.01a2 2 0 0 1 1.826 3.164 2 2 0 0 1 0 3.652 2 2 0 0 1-1.826 3.164 2 2 0 0 1-3.164 1.826 2 2 0 0 1-3.652 0A2 2 0 0 1 3.01 12.99a2 2 0 0 1-1.826-3.164 2 2 0 0 1 0-3.652A2 2 0 0 1 3.01 3.01a2 2 0 0 1 3.164-1.826zM8 1a1 1 0 0 0-.998 1.03l.01.091c.012.077.029.176.054.296.049.241.122.542.213.887.182.688.428 1.513.676 2.314L8 5.762l.045-.144c.248-.8.494-1.626.676-2.314.091-.345.164-.646.213-.887a4.997 4.997 0 0 0 .064-.386L9 2a1 1 0 0 0-1-1zM2 9l.03-.002.091-.01a4.99 4.99 0 0 0 .296-.054c.241-.049.542-.122.887-.213a60.59 60.59 0 0 0 2.314-.676L5.762 8l-.144-.045a60.59 60.59 0 0 0-2.314-.676 16.705 16.705 0 0 0-.887-.213 4.99 4.99 0 0 0-.386-.064L2 7a1 1 0 1 0 0 2zm7 5l-.002-.03a5.005 5.005 0 0 0-.064-.386 16.398 16.398 0 0 0-.213-.888 60.582 60.582 0 0 0-.676-2.314L8 10.238l-.045.144c-.248.8-.494 1.626-.676 2.314-.091.345-.164.646-.213.887a4.996 4.996 0 0 0-.064.386L7 14a1 1 0 1 0 2 0zm-5.696-2.134l.025-.017a5.001 5.001 0 0 0 .303-.248c.184-.164.408-.377.661-.629A60.614 60.614 0 0 0 5.96 9.23l.103-.111-.147.033a60.88 60.88 0 0 0-2.343.572c-.344.093-.64.18-.874.258a5.063 5.063 0 0 0-.367.138l-.027.014a1 1 0 1 0 1 1.732zM4.5 14.062a1 1 0 0 0 1.366-.366l.014-.027c.01-.02.021-.048.036-.084a5.09 5.09 0 0 0 .102-.283c.078-.233.165-.53.258-.874a60.6 60.6 0 0 0 .572-2.343l.033-.147-.11.102a60.848 60.848 0 0 0-1.743 1.667 17.07 17.07 0 0 0-.629.66 5.06 5.06 0 0 0-.248.304l-.017.025a1 1 0 0 0 .366 1.366zm9.196-8.196a1 1 0 0 0-1-1.732l-.025.017a4.951 4.951 0 0 0-.303.248 16.69 16.69 0 0 0-.661.629A60.72 60.72 0 0 0 10.04 6.77l-.102.111.147-.033a60.6 60.6 0 0 0 2.342-.572c.345-.093.642-.18.875-.258a4.993 4.993 0 0 0 .367-.138.53.53 0 0 0 .027-.014zM11.5 1.938a1 1 0 0 0-1.366.366l-.014.027c-.01.02-.021.048-.036.084a5.09 5.09 0 0 0-.102.283c-.078.233-.165.53-.258.875a60.62 60.62 0 0 0-.572 2.342l-.033.147.11-.102a60.848 60.848 0 0 0 1.743-1.667c.252-.253.465-.477.629-.66a5.001 5.001 0 0 0 .248-.304l.017-.025a1 1 0 0 0-.366-1.366zM14 9a1 1 0 0 0 0-2l-.03.002a4.996 4.996 0 0 0-.386.064c-.242.049-.543.122-.888.213-.688.182-1.513.428-2.314.676L10.238 8l.144.045c.8.248 1.626.494 2.314.676.345.091.646.164.887.213a4.996 4.996 0 0 0 .386.064L14 9zM1.938 4.5a1 1 0 0 0 .393 1.38l.084.035c.072.03.166.064.283.103.233.078.53.165.874.258a60.88 60.88 0 0 0 2.343.572l.147.033-.103-.111a60.584 60.584 0 0 0-1.666-1.742 16.705 16.705 0 0 0-.66-.629 4.996 4.996 0 0 0-.304-.248l-.025-.017a1 1 0 0 0-1.366.366zm2.196-1.196l.017.025a4.996 4.996 0 0 0 .248.303c.164.184.377.408.629.661A60.597 60.597 0 0 0 6.77 5.96l.111.102-.033-.147a60.602 60.602 0 0 0-.572-2.342c-.093-.345-.18-.642-.258-.875a5.006 5.006 0 0 0-.138-.367l-.014-.027a1 1 0 1 0-1.732 1zm9.928 8.196a1 1 0 0 0-.366-1.366l-.027-.014a5 5 0 0 0-.367-.138c-.233-.078-.53-.165-.875-.258a60.619 60.619 0 0 0-2.342-.572l-.147-.033.102.111a60.73 60.73 0 0 0 1.667 1.742c.253.252.477.465.66.629a4.946 4.946 0 0 0 .304.248l.025.017a1 1 0 0 0 1.366-.366zm-3.928 2.196a1 1 0 0 0 1.732-1l-.017-.025a5.065 5.065 0 0 0-.248-.303 16.705 16.705 0 0 0-.629-.661A60.462 60.462 0 0 0 9.23 10.04l-.111-.102.033.147a60.6 60.6 0 0 0 .572 2.342c.093.345.18.642.258.875a4.985 4.985 0 0 0 .138.367.575.575 0 0 0 .014.027zM8 9.5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z" />
                                    </svg>
                                </p>
                            </div>
                            <div class="col-md-10" style="padding-left: 0px;">
                                <p>
                                    <span style="font-weight: bold;">agneesh</span> <br>
                                    <span>Themeforest Customers</span>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /2 -->

                <!-- 3 -->
                <div class="col-md-4" style="padding-left: 0px;">
                    <div class="text31"
                        style="width: 370px; height: 250px; border: solid 1px rgb(187, 187, 187); border-radius: 10px; margin-bottom: 20px;">
                        <div class="text311">
                            <p style="padding: 20px; font-size: 20px;">
                                "The <span style="background: rgb(226, 206, 206);">code is very well <br>
                                    organized.</span>And as a font-end <br> developer, for me it's <br> essential"
                            </p>
                        </div>
                        <div class="text312">
                            <div class="col-md-2">
                                <p>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor"
                                        class="bi bi-flower1" viewBox="0 0 16 16">
                                        <path
                                            d="M6.174 1.184a2 2 0 0 1 3.652 0A2 2 0 0 1 12.99 3.01a2 2 0 0 1 1.826 3.164 2 2 0 0 1 0 3.652 2 2 0 0 1-1.826 3.164 2 2 0 0 1-3.164 1.826 2 2 0 0 1-3.652 0A2 2 0 0 1 3.01 12.99a2 2 0 0 1-1.826-3.164 2 2 0 0 1 0-3.652A2 2 0 0 1 3.01 3.01a2 2 0 0 1 3.164-1.826zM8 1a1 1 0 0 0-.998 1.03l.01.091c.012.077.029.176.054.296.049.241.122.542.213.887.182.688.428 1.513.676 2.314L8 5.762l.045-.144c.248-.8.494-1.626.676-2.314.091-.345.164-.646.213-.887a4.997 4.997 0 0 0 .064-.386L9 2a1 1 0 0 0-1-1zM2 9l.03-.002.091-.01a4.99 4.99 0 0 0 .296-.054c.241-.049.542-.122.887-.213a60.59 60.59 0 0 0 2.314-.676L5.762 8l-.144-.045a60.59 60.59 0 0 0-2.314-.676 16.705 16.705 0 0 0-.887-.213 4.99 4.99 0 0 0-.386-.064L2 7a1 1 0 1 0 0 2zm7 5l-.002-.03a5.005 5.005 0 0 0-.064-.386 16.398 16.398 0 0 0-.213-.888 60.582 60.582 0 0 0-.676-2.314L8 10.238l-.045.144c-.248.8-.494 1.626-.676 2.314-.091.345-.164.646-.213.887a4.996 4.996 0 0 0-.064.386L7 14a1 1 0 1 0 2 0zm-5.696-2.134l.025-.017a5.001 5.001 0 0 0 .303-.248c.184-.164.408-.377.661-.629A60.614 60.614 0 0 0 5.96 9.23l.103-.111-.147.033a60.88 60.88 0 0 0-2.343.572c-.344.093-.64.18-.874.258a5.063 5.063 0 0 0-.367.138l-.027.014a1 1 0 1 0 1 1.732zM4.5 14.062a1 1 0 0 0 1.366-.366l.014-.027c.01-.02.021-.048.036-.084a5.09 5.09 0 0 0 .102-.283c.078-.233.165-.53.258-.874a60.6 60.6 0 0 0 .572-2.343l.033-.147-.11.102a60.848 60.848 0 0 0-1.743 1.667 17.07 17.07 0 0 0-.629.66 5.06 5.06 0 0 0-.248.304l-.017.025a1 1 0 0 0 .366 1.366zm9.196-8.196a1 1 0 0 0-1-1.732l-.025.017a4.951 4.951 0 0 0-.303.248 16.69 16.69 0 0 0-.661.629A60.72 60.72 0 0 0 10.04 6.77l-.102.111.147-.033a60.6 60.6 0 0 0 2.342-.572c.345-.093.642-.18.875-.258a4.993 4.993 0 0 0 .367-.138.53.53 0 0 0 .027-.014zM11.5 1.938a1 1 0 0 0-1.366.366l-.014.027c-.01.02-.021.048-.036.084a5.09 5.09 0 0 0-.102.283c-.078.233-.165.53-.258.875a60.62 60.62 0 0 0-.572 2.342l-.033.147.11-.102a60.848 60.848 0 0 0 1.743-1.667c.252-.253.465-.477.629-.66a5.001 5.001 0 0 0 .248-.304l.017-.025a1 1 0 0 0-.366-1.366zM14 9a1 1 0 0 0 0-2l-.03.002a4.996 4.996 0 0 0-.386.064c-.242.049-.543.122-.888.213-.688.182-1.513.428-2.314.676L10.238 8l.144.045c.8.248 1.626.494 2.314.676.345.091.646.164.887.213a4.996 4.996 0 0 0 .386.064L14 9zM1.938 4.5a1 1 0 0 0 .393 1.38l.084.035c.072.03.166.064.283.103.233.078.53.165.874.258a60.88 60.88 0 0 0 2.343.572l.147.033-.103-.111a60.584 60.584 0 0 0-1.666-1.742 16.705 16.705 0 0 0-.66-.629 4.996 4.996 0 0 0-.304-.248l-.025-.017a1 1 0 0 0-1.366.366zm2.196-1.196l.017.025a4.996 4.996 0 0 0 .248.303c.164.184.377.408.629.661A60.597 60.597 0 0 0 6.77 5.96l.111.102-.033-.147a60.602 60.602 0 0 0-.572-2.342c-.093-.345-.18-.642-.258-.875a5.006 5.006 0 0 0-.138-.367l-.014-.027a1 1 0 1 0-1.732 1zm9.928 8.196a1 1 0 0 0-.366-1.366l-.027-.014a5 5 0 0 0-.367-.138c-.233-.078-.53-.165-.875-.258a60.619 60.619 0 0 0-2.342-.572l-.147-.033.102.111a60.73 60.73 0 0 0 1.667 1.742c.253.252.477.465.66.629a4.946 4.946 0 0 0 .304.248l.025.017a1 1 0 0 0 1.366-.366zm-3.928 2.196a1 1 0 0 0 1.732-1l-.017-.025a5.065 5.065 0 0 0-.248-.303 16.705 16.705 0 0 0-.629-.661A60.462 60.462 0 0 0 9.23 10.04l-.111-.102.033.147a60.6 60.6 0 0 0 .572 2.342c.093.345.18.642.258.875a4.985 4.985 0 0 0 .138.367.575.575 0 0 0 .014.027zM8 9.5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z" />
                                    </svg>
                                </p>
                            </div>
                            <div class="col-md-10" style="padding-left: 0px;">
                                <p>
                                    <span style="font-weight: bold;">theus</span> <br>
                                    <span>Themeforest Cunomer</span>
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="text312"
                        style="width: 370px; height: 250px; border: solid 1px rgb(187, 187, 187); border-radius: 10px; margin-bottom: 20px;">
                        <div class="text3121">
                            <p style="padding: 20px; font-size: 20px;">
                                "It's well designed, easy to <br> user and <span
                                    style="background: rgb(226, 206, 206);">very flexible without <br>being bloadted.</span>
                                Great value for <br>money."
                            </p>
                        </div>
                        <div class="text3122">
                            <div class="col-md-2">
                                <p>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor"
                                        class="bi bi-bootstrap-fill" viewBox="0 0 16 16">
                                        <path
                                            d="M6.375 7.125V4.658h1.78c.973 0 1.542.457 1.542 1.237 0 .802-.604 1.23-1.764 1.23H6.375zm0 3.762h1.898c1.184 0 1.81-.48 1.81-1.377 0-.885-.65-1.348-1.886-1.348H6.375v2.725z" />
                                        <path
                                            d="M4.002 0a4 4 0 0 0-4 4v8a4 4 0 0 0 4 4h8a4 4 0 0 0 4-4V4a4 4 0 0 0-4-4h-8zm1.06 12V3.545h3.399c1.587 0 2.543.809 2.543 2.11 0 .884-.65 1.675-1.483 1.816v.1c1.143.117 1.904.931 1.904 2.033 0 1.488-1.084 2.396-2.888 2.396H5.062z" />
                                    </svg>
                                </p>
                            </div>
                            <div class="col-md-10" style="padding-left: 0px;">
                                <p>
                                    <span style="font-weight: bold;">Paul</span> <br>
                                    <span>Bootstrap Customers</span>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /3 -->
            </div>
            <!-- /content 5.1 -->

            <!-- header5.2 -->
            <div class="row">
                <div class="header52" style="margin-bottom: 80px; margin-top: 60px; margin-left: 180px;">
                    <h1 style="font-weight: bold; margin-bottom: 30px;">Frequently Asked Questions</h1>
                    <div class="header521"
                        style="border: solid 1px rgb(187, 187, 187); border-radius: 5px; width: 800px; height: 60px; line-height: 60px; padding-left: 20px; color: black; padding-right: 25px; margin-bottom: 10px;">
                        <div class="pull-left text-info"><a href="" target="_blank" rel="noopener noreferrer"
                                style="color: black; font-weight: bold;">Can i just use the static HTML files?</a></div>
                        <div class="pull-right text-warning"><a href="" class="text-right"><span
                                    style="font-weight: bold; font-size: 15px;">+</span></a></div>
                    </div>

                    <div class="header522"
                        style="border: solid 1px rgb(187, 187, 187); border-radius: 5px; width: 800px; height: 60px; line-height: 60px; padding-left: 20px; color: black; padding-right: 25px; margin-bottom: 10px;">
                        <div class="pull-left text-info"><a href="" target="_blank" rel="noopener noreferrer"
                                style="color: black; font-weight: bold;">Are the images included in the dowload package?</a>
                        </div>
                        <div class="pull-right text-warning"><a href="" class="text-right"><span
                                    style="font-weight: bold; font-size: 15px;">+</span></a></div>
                    </div>

                    <div class="header523"
                        style="border: solid 1px rgb(187, 187, 187); border-radius: 5px; width: 800px; height: 60px; line-height: 60px; padding-left: 20px; color: black; padding-right: 25px; margin-bottom: 10px;">
                        <div class="pull-left text-info"><a href="" target="_blank" rel="noopener noreferrer"
                                style="color: black; font-weight: bold;">Can Leap be used as a 'one page' templace?</a>
                        </div>
                        <div class="pull-right text-warning"><a href="" class="text-right"><span
                                    style="font-weight: bold; font-size: 15px;">+</span></a></div>
                    </div>

                    <div class="header524"
                        style="border: solid 1px rgb(187, 187, 187); border-radius: 5px; width: 800px; height: 60px; line-height: 60px; padding-left: 20px; color: black; padding-right: 25px; margin-bottom: 10px;">
                        <div class="pull-left text-info"><a href="" target="_blank" rel="noopener noreferrer"
                                style="color: black; font-weight: bold;">How can I request support?</a></div>
                        <div class="pull-right text-warning"><a href="" class="text-right"><span
                                    style="font-weight: bold; font-size: 15px;">+</span></a></div>
                    </div>

                    <div class="header525"
                        style="border: solid 1px rgb(187, 187, 187); border-radius: 5px; width: 800px; height: 60px; line-height: 60px; padding-left: 20px; color: black; padding-right: 25px; margin-bottom: 40px;">
                        <div class="pull-left text-info"><a href="" target="_blank" rel="noopener noreferrer"
                                style="color: black; font-weight: bold;">Is this a WordPress theme?</a></div>
                        <div class="pull-right text-warning"><a href="" class="text-right"><span
                                    style="font-weight: bold; font-size: 15px;">+</span></a></div>
                    </div>

                    <div class="header526">
                        <a href=""><span style="color: black; opacity: 0.8; vertical-align: 5px;">Still have
                                questions?</span> <span style="font-weight: bold; vertical-align: 5px;">Get in touch </span>
                            <span><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                                    class="bi bi-arrow-right-short" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd"
                                        d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z" />
                                </svg>
                            </span>
                        </a>
                    </div>
                </div>
            </div>
            <!-- /header5.2 -->
        </div>
        <!-- /page content 5 -->

        <!-- Footer -->
        <div class="jumbotron" style="background: rgb(2, 2, 66);">
            <div class="container">
                <div class="row">
                    <div class="footer">
                        <!-- footer1 -->
                        <div class="footer1"
                            style="background: royalblue; border-radius: 5px; width: 100%; height: 100px; line-height: 100px; padding-left: 30px; padding-right: 30px; margin-bottom: 50px; margin-top: 50px;">
                            <div class="pull-left">
                                <span style="color: white; font-weight: bold; font-size: 20px;">Start building beautiful
                                    websites</span>
                            </div>
                            <div class="pull-right ">
                                <a href="" class="btn btn-defaul btn-lg"
                                    style="background: white; color: rgb(34, 85, 224); font-weight: bold;">Purchase Now</a>
                            </div>
                        </div>
                        <!-- /footer1 -->

                        <!-- footer2 -->
                        <div class="footer2">
                            <!-- footer21 -->
                            <div class="col-md-2">
                                <div class="footer21">
                                    <p style="color: white; font-size: 20px; font-weight: bold;">
                                        Navigate
                                    </p>
                                    <p style="color: white; opacity: 0.5; font-size: 15px">
                                        Demos
                                    </p>
                                    <p style="color: white; opacity: 0.5; font-size: 15px">
                                        Pages
                                    </p>
                                    <p style="color: white; opacity: 0.5; font-size: 15px">
                                        Blog
                                    </p>
                                    <p style="color: white; opacity: 0.5; font-size: 15px">
                                        Portfolio
                                    </p>
                                    <p style="color: white; opacity: 0.5; font-size: 15px">
                                        Elements
                                    </p>
                                </div>
                            </div>
                            <!-- /footer21 -->

                            <!-- footer22 -->
                            <div class="col-md-4">
                                <div class="footer22">
                                    <p style="color: white; font-size: 20px; font-weight: bold;">
                                        Contact
                                    </p>
                                    <div class="footer221">
                                        <div class="col-md-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25"
                                                fill="currentColor" class="bi bi-droplet-fill" viewBox="0 0 16 16"
                                                style="color: white;">
                                                <path fill-rule="evenodd"
                                                    d="M8 16a6 6 0 0 0 6-6c0-1.655-1.122-2.904-2.432-4.362C10.254 4.176 8.75 2.503 8 0c0 0-6 5.686-6 10a6 6 0 0 0 6 6zM6.646 4.646c-.376.377-1.272 1.489-2.093 3.13l.894.448c.78-1.559 1.616-2.58 1.907-2.87l-.708-.708z" />
                                            </svg>
                                        </div>
                                        <div class="col-md-10" style="margin-bottom: 15px;">
                                            <p style="color: white; opacity: 0.8; font-size: 15px;">
                                                348 Greenpoint Avenue <br> Brooklyn, NY
                                            </p>
                                        </div>
                                    </div>

                                    <div class="footer222">
                                        <div class="col-md-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25"
                                                fill="currentColor" class="bi bi-droplet-fill" viewBox="0 0 16 16"
                                                style="color: white;">
                                                <path
                                                    d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z" />
                                            </svg>
                                        </div>
                                        <div class="col-md-10" style="margin-bottom: 15px;">
                                            <p style="color: white; opacity: 0.8; font-size: 15px">
                                                +61 3928 3324 <br> Mon - Fri 9am - 5pm
                                            </p>
                                        </div>
                                    </div>

                                    <div class="footer223">
                                        <div class="col-md-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25"
                                                fill="currentColor" class="bi bi-droplet-fill" viewBox="0 0 16 16"
                                                style="color: white;">
                                                <path
                                                    d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555zM0 4.697v7.104l5.803-3.558L0 4.697zM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757zm3.436-.586L16 11.801V4.697l-5.803 3.546z" />
                                            </svg>
                                        </div>
                                        <div class="col-md-10">
                                            <p style="color: white; opacity: 0.8; font-size: 15px">
                                                hello@company.io
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /footer22 -->

                            <!-- footer23 -->
                            <div class="col-md-6">
                                <div class="footer23" style="margin-left: 250px; margin-bottom: 100px;">
                                    <div class="footer231">
                                        <p style="color: white; font-size: 20px; font-weight: bold;">
                                            Subcribe
                                        </p>
                                    </div>

                                    <div class="footer232">
                                        <p style="color: white; font-size: 15px; opacity: 0.8;">
                                            The latest Leap news, article, and resources, <br> sent sraight to your inbox
                                            every month.
                                        </p>
                                    </div>

                                    <div class="footer233">
                                        <form>
                                            <div class="form-group">
                                                <input type="email" class="form-control" placeholder="Email Address">
                                            </div>
                                            <button type="submit" class="btn btn-primary btn-block">Subcribe</button>
                                            <div class="form-froup">
                                                <a href=""><span style="color: white; opacity: 0.8;">We'll never share your
                                                        details.</span><span style="color: white;">See our Policy</span>
                                                </a>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <!-- /footer23 -->

                        </div>
                    </div>
                    <!-- /footer2 -->

                    <!-- footer3 -->
                    <div class="footer3" style="text-align: center; margin-bottom: 30px;">
                        <span style="margin-right: 40px; color: white; opacity: 0.7;">
                            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor"
                                class="bi bi-instagram" viewBox="0 0 16 16">
                                <path
                                    d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z" />
                            </svg>
                        </span>
                        <span style="margin-right: 40px; opacity: 0.7; color: white;">
                            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor"
                                class="bi bi-controller" viewBox="0 0 16 16">
                                <path
                                    d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z" />
                            </svg>
                        </span>
                        <span style="margin-right: 40px; opacity: 0.7; color: white;">
                            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor"
                                class="bi bi-file-music-fill" viewBox="0 0 16 16">
                                <path
                                    d="M8.051 1.999h.089c.822.003 4.987.033 6.11.335a2.01 2.01 0 0 1 1.415 1.42c.101.38.172.883.22 1.402l.01.104.022.26.008.104c.065.914.073 1.77.074 1.957v.075c-.001.194-.01 1.108-.082 2.06l-.008.105-.009.104c-.05.572-.124 1.14-.235 1.558a2.007 2.007 0 0 1-1.415 1.42c-1.16.312-5.569.334-6.18.335h-.142c-.309 0-1.587-.006-2.927-.052l-.17-.006-.087-.004-.171-.007-.171-.007c-1.11-.049-2.167-.128-2.654-.26a2.007 2.007 0 0 1-1.415-1.419c-.111-.417-.185-.986-.235-1.558L.09 9.82l-.008-.104A31.4 31.4 0 0 1 0 7.68v-.122C.002 7.343.01 6.6.064 5.78l.007-.103.003-.052.008-.104.022-.26.01-.104c.048-.519.119-1.023.22-1.402a2.007 2.007 0 0 1 1.415-1.42c.487-.13 1.544-.21 2.654-.26l.17-.007.172-.006.086-.003.171-.007A99.788 99.788 0 0 1 7.858 2h.193zM6.4 5.209v4.818l4.157-2.408L6.4 5.209z" />
                            </svg>
                        </span>
                        <span style="margin-right: 40px; opacity: 0.7; color: white;">
                            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor"
                                class="bi bi-chat-square-quote" viewBox="0 0 16 16">
                                <path
                                    d="M15.545 6.558a9.42 9.42 0 0 1 .139 1.626c0 2.434-.87 4.492-2.384 5.885h.002C11.978 15.292 10.158 16 8 16A8 8 0 1 1 8 0a7.689 7.689 0 0 1 5.352 2.082l-2.284 2.284A4.347 4.347 0 0 0 8 3.166c-2.087 0-3.86 1.408-4.492 3.304a4.792 4.792 0 0 0 0 3.063h.003c.635 1.893 2.405 3.301 4.492 3.301 1.078 0 2.004-.276 2.722-.764h-.003a3.702 3.702 0 0 0 1.599-2.431H8v-3.08h7.545z" />
                            </svg>
                        </span>
                        <span style="opacity: 0.7; color: white;">
                            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor"
                                class="bi bi-file-earmark-font" viewBox="0 0 16 16">
                                <path
                                    d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z" />
                            </svg>
                        </span>
                    </div>
                    <!-- /footer3 -->

                    <!-- footer4 -->
                    <div class="footer4" style="text-align: center;">
                        <p style="margin: 0px;">
                            <span style="color: white; opacity: 0.8; font-size: 15px;">2020 This is protected by reCAPTCHA
                                and is subject to the Google to the Google</span> <span
                                style="color: white; font-size: 15px; opacity: 0.9;">Privact</span>
                            <span style="color: white; opacity: 0.8; font-size: 15px;"> and </span><span
                                style="color: white; opacity: 1; font-size: 15px;">Terms of Service</span>
                        </p>
                    </div>
                    <!-- /footer4 -->

                </div>
            </div>
        </div>
        </div>
        <!-- /Footer -->
    </body>
</html>