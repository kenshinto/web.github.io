<?php 
    session_start(); ?>
<!DOCTYPE html>
<html class="no-js" lang="">
<head>
        <meta charset="utf-8">
        <title> HOME FASHION SHOES </title>
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- favicon -->

        <!-- Bootstrap CSS -->
        <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700;900&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="/public/Fontawesome/css/all.css" crossorigin="anonymous">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <link rel="stylesheet" href="/public/style.css">

    </head>
    <body>
        <!-- Add your site or application content here -->
        <!-- header area start -->
        
    
        <header> 
                        <div class="col-md-2 col-sm-3">
                            <div class="dashboard">
                                <div class="account-menu">
                                    <ul>
                                        <li class="search">
                                            <a href="#">
                                                <i class="fa fa-search"></i>
                                            </a>
                                            <ul class="search">
                                                <li>
                                                    <form action="#">
                                                        <input type="text">
                                                        <button type="submit"> <i class="fa fa-search"></i> </button>
                                                    </form>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-bars"></i>
                                            </a>
                                            <ul>
                                                <li><a href="#">my account</a></li>
                                                <li><a href="#">my wishlist</a></li>
                                                <li><a href="#">my cart</a></li>
                                                <li><a href="#">Log in</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                                <div class="cart-menu">
                                    <ul>
                                        <li><a href="#"> <img src="theme/img/icon-cart.png" alt=""> <span>2</span> </a>
                                            <div class="cart-info">
                                                <ul>
                                                    <li>
                                                        <div class="cart-img">
                                                            <img src="theme/img/cart/1.png" alt="">
                                                        </div>
                                                        <div class="cart-details">
                                                            <a href="#">Fusce aliquam</a>
                                                            <p>1 x $174.00</p>
                                                        </div>
                                                        <div class="btn-edit"></div>
                                                        <div class="btn-remove"></div>
                                                    </li>
                                                    <li>
                                                        <div class="cart-img">
                                                            <img src="theme/img/cart/2.png" alt="">
                                                        </div>
                                                        <div class="cart-details">
                                                            <a href="#">Fusce aliquam</a>
                                                            <p>1 x $777.00</p>
                                                        </div>
                                                        <div class="btn-edit"></div>
                                                        <div class="btn-remove"></div>
                                                    </li>
                                                </ul>
                                                <h3>Subtotal: <span> $951.00</span></h3>
                                                <a href="#" class="checkout">checkout</a>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mainmenu-area home2 bg-color-tr product-items">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="logo">
                                <a href="?page=home">
                                    FASHION SHOES
                                </a>
                            </div>
                        </div>
                        <div class="container">
                            <div class="mainmenu text-center">
                                <nav>
                                    <ul>
                                        <li>
                                            <a href="?page=home">TRANG CHỦ</a>
                                        </li>
                                        <li class="mega-women"><a href="?page=category_product">BỘ SƯU TẬP</a>
                                            <div class="mega-menu women">
                                                <div class="part-1">
                                                    <?php
                                                      include("config/dbconfig.php");
                                                      $sql = "SELECT * from tbl_category";
                                                      $run = mysqli_query($conn, $sql);
                                                      $i = 0;
                                                      while ($row = mysqli_fetch_array($run)) {
                                                        $i++;
                                                    ;?>
                                                    <span>
                                                        <a href="?page=category_product&id=<?php echo $row['id']?>"><?php echo $row['title']?></a>
                                                    </span>
                                                    <?php } ?>
                                                </div>
                                                <div class="part-2">
                                                </div>
                                            </div>
                                        </li>
                                        <li class="mega-men"><a href="?page=category_news">SẢN PHẨM MỚI</a>
                                             <div class="mega-menu women">
                                                <div class="part-1">
                                                    <?php
                                                      include("config/dbconfig.php");
                                                      $sql = "SELECT * from tbl_category";
                                                      $run = mysqli_query($conn, $sql);
                                                      $i = 0;
                                                      while ($row = mysqli_fetch_array($run)) {
                                                        $i++;
                                                    ;?>
                                                    <span>
                                                        <a href="?page=category_product&id=<?php echo $row['id']?>"><?php echo $row['title']?></a>
                                                    </span>
                                                    <?php } ?>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="mega-footwear"><a href="#">GIẢM GIÁ</a>
                                            <div class="mega-menu footwear">
                                                <span>
                                                    <a href="#">Footwear Man</a>
                                                    <a href="#">gifts</a>
                                                </span>
                                                <span>
                                                    <a href="#">Footwear Womens</a>
                                                    <a href="#">boots</a>
                                                </span>
                                            </div>
                                        </li>
                                        
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </header>
        <!-- header area end -->
                            <!-- slider area start -->
                            <div class="clearfix"></div>
    <div id="slides" class="carousel slide" data-ride="carousel">
        <ul class="carousel-indicators">
            <li data-target="#slides" data-slide-to="0" class="active"></li>
            <li data-target="#slides" data-slide-to="1"></li>
            <li data-target="#slides" data-slide-to="2"></li>
            <li data-target="#slides" data-slide-to="3"></li>
        </ul>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="public/img/banner-1.jpg" alt="slide 1">
                <div class="carousel-caption">
                    <h2>Lorem ipsum dolor sit amet.</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel, temporibus.</p>
                </div>
            </div>
            <div class="carousel-item">
               <img src="/public/Resource/images//pexels-photo-2929277.jpeg" alt="">
            </div>
            <div class="carousel-item">
               <img src="/public/Resource/images/pexels-karl-solano-2729899.jpg" alt="">
            </div>
            <div class="carousel-item">
               <img src="/public/Resource/images//pexels-photo-4211342.jpeg" alt="">
            </div>
        </div>
    </div>
        <div class="slider-area home2">
            <div class="bend niceties preview-2">
                <div id="nivoslider" class="slides">
                    <?php 
                        include("config/dbconfig.php");
                        $sql = "SELECT * from tbl_banner  where active = 1 limit 3";
                        $run = mysqli_query($conn, $sql);
                        $i = 0;
                        $array ='#slider-direction-';
                        while ($row = mysqli_fetch_array($run)) {
                        $i++; 
                        ;?>
                         <img src="index.php/../images/banner/<?php echo $row['image']?>" alt=""title="<?php echo($array.$i);?>">
                        
                         <?php } ?>
                </div>
                <!-- direction 1 -->
                <div id="slider-direction-1" class="t-cn slider-direction">
                    <div class="slider-progress"></div>
                    <div class="slider-content t-lfl s-tb slider-1">
                        <div class="title-container s-tb-c title-compress">
                            <img src="theme/img/slider/slider-logo.png" alt="">
                            <h1 class="title1">Academy of sport</h1>
                            <h2 class="title2" >sports center james</h2>
                            <h3 class="title3" >Lorem Ipsum is simply dummy text of the printing</h3>
                            <a href="#"><span>read more</span></a>
                        </div>
                    </div>
                </div>
                <!-- direction 2 -->
                <div id="slider-direction-2" class="slider-direction">
                    <div class="slider-progress"></div>
                    <div class="slider-content t-lfl s-tb slider-2">
                        <div class="title-container s-tb-c">
                            <img src="theme/img/slider/slider-logo.png" alt="">
                            <h1 class="title1">Academy of sport2</h1>
                            <h2 class="title2" >sports center james</h2>
                            <h3 class="title3" >Lorem Ipsum is simply dummy text of the printing</h3>
                            <a href="#"><span>read more</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- slider area end -->
        