<!DOCTYPE html>
<html lang="">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $this->renderSection("title")?></title>

    <!-- Bootstrap CSS -->

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.3/html5shiv.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link rel="stylesheet" href="<?php echo base_url('public/css') ?>/header.css">
    <link rel="stylesheet" href="<?php echo base_url('public/css') ?>/footer.css">
    <link rel="stylesheet" href="<?php echo base_url('public/css') ?>/body-main.css">
    <link rel="stylesheet" href="<?php echo base_url('public/css') ?>/reponsive3.css">
    <link rel="stylesheet" href="<?php echo base_url('public/css') ?>/reponsive2.css">
    <link rel="stylesheet" href="<?php echo base_url('public/css') ?>/reset_css.css">
    <link rel="stylesheet" href="<?php echo base_url('public/css') ?>/trial.css">
    <link rel="stylesheet" href="<?php echo base_url('public/css') ?>/product.css">
    <link rel="stylesheet" href="<?php echo base_url('public/css') ?>/assistance.css">
    <link rel="stylesheet" href="<?php echo base_url('public/css') ?>/new.css">
    <link rel="stylesheet" href="<?php echo base_url('public/css') ?>/service.css">
    <link rel="stylesheet" href="<?php echo base_url('public/css') ?>/detail.css">
</head>
<div class="main-container">
    <div class="header">
        <div class="sub-header">
            <div class="logo-header">
                <div class="logo-left">
                    <div class="left-img">
                        <img src="<?php echo base_url('public/image/images/slice') ?>/handle-logo.jpg" alt="">
                    </div>
                    <div class="left-list-icon">
                        <div class="menu">
                            <span id="menu-icon"></span>
                            <ul>
                                <li><a href="<?php echo base_url('/') ?>">HYUNDAI LAM KINH<img src="<?php echo base_url('public/image/images/slice') ?>/slash.png" alt=""></a></li>
                                <li id="product"><a href="<?php echo base_url('product') ?>">SẢN PHẨM<img src="public/image/images/slice/slash.png" alt=""></a>
                                    <ul class="product-list">
                                        <li class="double-split">
                                            <span class="truck-product" id="truck-product">Xe Tải</span>
                                            <span class="bus-product" id="bus-product">Xe Khách</span>
                                        </li>
                                        <div class="product-classified">
                                            <div class="truck" id="truck">
                                                <li><a href="#"><img src="<?php echo base_url('public/image/list-image') ?>/134.png"><span>Đầu kéo xcient GT</span></a></li>
                                                <li><a href="#"><img src="<?php echo base_url('public/image/list-image') ?>/ex-series-1.png"><span>ex-series-1</span></a></li>
                                                <li><a href="#"><img src="<?php echo base_url('public/image/list-image') ?>/ex-series-gt.png"><span>ex-series-gt</span></a></li>
                                                <li><a href="#"><img src="<?php echo base_url('public/image/list-image') ?>/h100.png"><span>H100-2018</span></a></li>
                                                <li><a href="#"><img src="<?php echo base_url('public/image/list-image') ?>/hd260-320.png"><span>hd260-320</span></a></li>
                                                <li><a href="#"><img src="<?php echo base_url('public/image/list-image') ?>/solati.png"><span>solati</span></a></li>
                                                <li><a href="#"><img src="<?php echo base_url('public/image/list-image') ?>/truck_tractor-truck-quarter-view-thumb.png"><span>truck_tractor</span></a></li>
                                                <li><a href="#"><img src="<?php echo base_url('public/image/list-image') ?>/mighty-n250-menu.png"><span>mighty-n250</span></a></li>
                                                <li><a href="#"><img src="<?php echo base_url('public/image/list-image') ?>/accent-2021-menu.png"><span>accent-2021</span></a></li>
                                                <li><a href="#"><img src="<?php echo base_url('public/image/list-image') ?>/hd260-320.png"><span>hd260</span></a></li>
                                                <li><a href="#"><img src="<?php echo base_url('public/image/list-image') ?>/mighty-n250-menu.png"><span>mighty-n250</span></a></li>
                                                <li><a href="#"><img src="<?php echo base_url('public/image/list-image') ?>/h100.png"><span>h100-2021</span></a></li>
                                            </div>
                                            <div class="bus" id="bus">
                                                <li><a href="#"><img src="<?php echo base_url('public/image/list-image') ?>/new-county.png"><span>new-county</span></a></li>
                                                <li><a href="#"><img src="<?php echo base_url('public/image/list-image') ?>/new-county.png"><span>new-county</span></a></li>
                                                <li><a href="#"><img src="<?php echo base_url('public/image/list-image') ?>/new-county.png"><span>new-county</span></a></li>
                                                <li><a href="#"><img src="<?php echo base_url('public/image/list-image') ?>/new-county.png"><span>new-county</span></a></li>
                                                <li><a href="#"><img src="<?php echo base_url('public/image/list-image') ?>/new-county.png"><span>new-county</span></a></li>
                                                <li><a href="#"><img src="<?php echo base_url('public/image/list-image') ?>/new-county.png"><span>new-county</span></a></li>
                                            </div>
                                        </div>
                                        <div class="main-car">
                                            <li><a href="#"><img src="<?php echo base_url('public/image/list-image') ?>/134.png"><span>Đầu kéo xcient GT</span></a></li>
                                            <li><a href="#"><img src="<?php echo base_url('public/image/list-image') ?>/ex-series-1.png"><span>ex-series-1</span></a></li>
                                            <li><a href="#"><img src="<?php echo base_url('public/image/list-image') ?>/ex-series-gt.png"><span>ex-series-gt</span></a></li>
                                            <li><a href="#"><img src="<?php echo base_url('public/image/list-image') ?>/h100.png"><span>H100-2018</span></a></li>
                                            <li><a href="#"><img src="<?php echo base_url('public/image/list-image') ?>/hd260-320.png"><span>hd260-320</span></a></li>
                                            <li><a href="#"><img src="<?php echo base_url('public/image/list-image') ?>/solati.png"><span>solati</span></a></li>
                                            <li><a href="#"><img src="<?php echo base_url('public/image/list-image') ?>/truck_tractor-truck-quarter-view-thumb.png"><span>truck_tractor</span></a></li>
                                            <li><a href="#"><img src="<?php echo base_url('public/image/list-image') ?>/new-county.png"><span>new-county</span></a></li>
                                            <li><a href="#"><img src="<?php echo base_url('public/image/list-image') ?>/mighty-n250-menu.png"><span>mighty-n250</span></a></li>
                                            <li><a href="#"><img src="<?php echo base_url('public/image/list-image') ?>/accent-2021-menu.png"><span>accent-2021</span></a></li>
                                            <li><a href="#"><img src="<?php echo base_url('public/image/list-image') ?>/hd260-320.png"><span>hd260</span></a></li>
                                            <li><a href="#"><img src="<?php echo base_url('public/image/list-image') ?>/mighty-n250-menu.png"><span>mighty-n250</span></a></li>
                                            <li><a href="#"><img src="<?php echo base_url('public/image/list-image') ?>/h100.png"><span>h100-2021</span></a></li>
                                        </div>
                                    </ul>
                                </li>
                                <li id="services"><a href="<?php echo base_url('News') ?>">KHUYẾN MẠI<img src="<?php echo base_url('public/image/images/slice') ?>/slash.png"></a>
                                    <ul class="services">
                                        <li><img src="<?php echo base_url('public/image/list-image') ?>/sosanh.jpg" alt=""><a href="#">So SÁnh</a></li>
                                        <li><img src="<?php echo base_url('public/image/list-image') ?>/timdaily.jpg" alt=""><a href="#">Tìm Đại Lý</a></li>
                                        <li><img src="<?php echo base_url('public/image/list-image') ?>/laithu.jpg" alt=""><a href="#">Lái Thử</a></li>
                                        <li><img src="<?php echo base_url('public/image/list-image') ?>/khuyenmai.jpg" alt=""><a href="#">Khuyến Mãi</a></li>
                                    </ul>
                                </li>
                                <li><a href="<?php echo base_url('News') ?>">TIN TỨC<img src="<?php echo base_url('public/image/images/slice') ?>/slash.png"></a></li>
                                <li id="discount"><a href="<?php echo base_url('service') ?>">DỊCH VỤ</a>
                                    <ul class="discount">
                                        <li><a href="#"><img src="<?php echo base_url('public/image/list-image') ?>/khuyenmai.jpg">Khuyến Mãi</a></li>
                                        <li><a href="#"><img src="<?php echo base_url('public/image/list-image') ?>/baohanh.png">bảo hành</a></li>
                                        <li><a href="#"><img src="<?php echo base_url('public/image/list-image') ?>/cskh.png">chăm sóc khách hàng</a></li>
                                        <li><a href="#"><img src="<?php echo base_url('public/image/list-image') ?>/ct-dv.png">chương trình dich vụ</a></li>
                                        <li><a href="#"><img src="<?php echo base_url('public/image/list-image') ?>/phukien.png">Phụ Tùng & Phụ Kiện Chính Sách</a></li>
                                        <li><a href="#"><img src="<?php echo base_url('public/image/list-image') ?>/avn.png">Cập Nhật AVN</a></li>
                                    </ul>
                                </li>
                            </ul>
                            <div class="clear"></div>
                        </div>
                    </div>
                </div>
                <div class="logo-right">
                    <div class="right-img">
                        <img src="<?php echo base_url('public/image/images/slice') ?>/hyundai-slogan.png" alt="">
                    </div>
                    <div class="right-list-icon">
                        <div class="icon-left">
                            <ul>
                                <li><span>follow us</span></li>
                                <li><img src="<?php echo base_url('public/image/images/slice') ?>/facebook.png" alt="" style="background-color:#D2D2D2 !important;"></li>
                                <li><img src="<?php echo base_url('public/image/images/slice') ?>/Capture2.jpg" alt="" style="background-color:#D2D2D2 !important;"></li>
                                <li><img src="<?php echo base_url('public/image/images/slice') ?>/twice.png" alt="" style="background-color:#D2D2D2 !important;"></li>
                            </ul>
                        </div>
                        <div class="icon-right">
                            <ul>
                                <li><a href="<?php echo base_url('index') ?>" class="da" id="da">Đăng ký lái thử</a>
                                </li>
                                <li><img src="<?php echo base_url('public/image/images/slice') ?>/phone.png" alt=""></li>
                                <li><span>0903.253.371</span></li>
                                <li><a href="#" id="img"><img src="<?php echo base_url('public/image/images/slice') ?>/search.png" alt=""></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Bootstrap JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url('public/js') ?>/slide.js"></script>
    <script src="<?php echo base_url('public/js') ?>/slide2.js"></script>
    <script src="<?php echo base_url('public/js') ?>/menu.js"></script>
    </body>

</html>