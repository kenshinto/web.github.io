<!DOCTYPE html>
<html>
    <head>
        <title>Trang chủ Admin</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="public/css/bootstrap/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="public/css/bootstrap/bootstrap-theme.min.css" rel="stylesheet" type="text/css"/>
        <link href="public/reset.css" rel="stylesheet" type="text/css"/>
        <link href="public/css/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
        <link href="public/style.css" rel="stylesheet" type="text/css"/>
        <link href="public/responsive.css" rel="stylesheet" type="text/css"/>

        <script src="public/js/jquery-2.2.4.min.js" type="text/javascript"></script>
        <script src="public/js/bootstrap/bootstrap.min.js" type="text/javascript"></script>
        <script src="public/js/main.js" type="text/javascript"></script>
        
    </head>
    <body>
        <div id="site">
            <div id="container">
                <div id="header-wp">
                    <div class="wp-inner clearfix">
                        <a href="?page=list_product" title="" id="logo" class="fl-left">FASHION SHOES</a>
                        
                        <div id="dropdown-user" class="dropdown dropdown-extended fl-right">
                            <button class="dropdown-toggle clearfix" type="button"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                <div id="thumb-circle" class="fl-left">
                                    <img src="public/images/user1.jpeg" style="height: 50px;width: 50px;">
                                </div>
                                <?php
                                    include("../config/dbconfig.php");
                                    $username = $_SESSION['username'];
                                    $sql = "SELECT * from tbl_user where username = '$username'";
                                    $run = mysqli_query($conn, $sql);
                                    $row = mysqli_fetch_array($run);
                                ;?>
                                <h3 id="account" class="fl-right"> <?php echo $row["username"];?></h3>
                            </button>
                            <ul class="dropdown-menu">
                                <li><a href="?page=info_account" title="Thông tin cá nhân">Thông tin tài khoản</a></li>
                                <li><a href="?page=login" title="Thoát">Thoát</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                