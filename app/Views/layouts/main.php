<!DOCTYPE html>
<html lang="">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $this->renderSection("title"); ?></title>

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
                                <li id="product"><a href="<?php echo base_url('product') ?>">S???N PH???M<img src="public/image/images/slice/slash.png" alt=""></a>
                                    <ul class="product-list">
                                        <li class="double-split">
                                            <span class="truck-product" id="truck-product">Xe T???i</span>
                                            <span class="bus-product" id="bus-product">Xe Kh??ch</span>
                                        </li>
                                        <div class="product-classified">
                                            <div class="truck" id="truck">
                                                <li><a href="#"><img src="<?php echo base_url('public/image/list-image') ?>/134.png"><span>?????u k??o xcient GT</span></a></li>
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
                                            <li><a href="#"><img src="<?php echo base_url('public/image/list-image') ?>/134.png"><span>?????u k??o xcient GT</span></a></li>
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
                                <li id="services"><a href="<?php echo base_url('News') ?>">KHUY???N M???I<img src="<?php echo base_url('public/image/images/slice') ?>/slash.png"></a>
                                    <ul class="services">
                                        <li><img src="<?php echo base_url('public/image/list-image') ?>/sosanh.jpg" alt=""><a href="#">So S??nh</a></li>
                                        <li><img src="<?php echo base_url('public/image/list-image') ?>/timdaily.jpg" alt=""><a href="#">T??m ?????i L??</a></li>
                                        <li><img src="<?php echo base_url('public/image/list-image') ?>/laithu.jpg" alt=""><a href="#">L??i Th???</a></li>
                                        <li><img src="<?php echo base_url('public/image/list-image') ?>/khuyenmai.jpg" alt=""><a href="#">Khuy???n M??i</a></li>
                                    </ul>
                                </li>
                                <li><a href="<?php echo base_url('News') ?>">TIN T???C<img src="<?php echo base_url('public/image/images/slice') ?>/slash.png"></a></li>
                                <li id="discount"><a href="<?php echo base_url('service') ?>">D???CH V???</a>
                                    <ul class="discount">
                                        <li><a href="#"><img src="<?php echo base_url('public/image/list-image') ?>/khuyenmai.jpg">Khuy???n M??i</a></li>
                                        <li><a href="#"><img src="<?php echo base_url('public/image/list-image') ?>/baohanh.png">b???o h??nh</a></li>
                                        <li><a href="#"><img src="<?php echo base_url('public/image/list-image') ?>/cskh.png">ch??m s??c kh??ch h??ng</a></li>
                                        <li><a href="#"><img src="<?php echo base_url('public/image/list-image') ?>/ct-dv.png">ch????ng tr??nh dich v???</a></li>
                                        <li><a href="#"><img src="<?php echo base_url('public/image/list-image') ?>/phukien.png">Ph??? T??ng & Ph??? Ki???n Ch??nh S??ch</a></li>
                                        <li><a href="#"><img src="<?php echo base_url('public/image/list-image') ?>/avn.png">C???p Nh???t AVN</a></li>
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
                                <li><a href="<?php echo base_url('index') ?>" class="da" id="da">????ng k?? l??i th???</a>
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
        <?= $this->renderSection("content"); ?>
        <div class="footer">
            <div class="footer-wrapper">
                <ul>
                    <li>
                        <h2><strong>LI??N H??? V???I CH??NG T??I</strong></h2>
                        <p>Qu???c l??? 1A,Qu???ng Th???nh,Qu???ng X????ng,Thanh H??a,
                            <br>
                            TP thanh h??a
                            <br>
                            CSKH:19001009
                            <br>
                            Hotline:0912555888
                            <br>
                            Email:cskh@hyundailamkinh.vn
                            <br>
                            Fax:1-800-624-5643
                        </p>
                    </li>
                    <li>
                        <h2><strong>Gi??? L??m Vi???c</strong></h2>
                        <p>
                            Showroom
                            <br>
                            8h00-17h30(Th??? 2 - Ch??? nh???t)
                            <br>
                            <br>
                            Trung t??m b???o h??nh v?? s???a ch???a
                            <br>
                            8h00-17h30(Th??? 2- Ch??? nh???t)
                        </p>
                    </li>
                    <li>
                        <h2><strong>K???T N???I V?? L??M VI???C</strong></h2>
                        <p>Youtube:hyundai-Lam Kinh
                            <br>
                            Fanpage:Hyundai-Lam Kinh
                            <br>
                            instagram:Hyundai-Lam Kinh
                            <br>
                            Zalo:Hyundai-Lam Kinh
                        </p>
                    </li>
                    <li class="map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3827.6110471915804!2d107.56723361375171!3d16.393764335015874!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x36b55ac590a3a137%3A0x5ff8f9aa8d1a4520!2sQL1A%2C%20Vietnam!5e0!3m2!1sen!2s!4v1630676563275!5m2!1sen!2s" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </li>
                </ul>
                <div class="special-icon">
                    <span>0903.253.317 - 0903.253.317 - 0903.253.317</span>
                    <a href="#" class="phones"></a>
                    <a href="#" class="handlebar"></a>
                    <a href="#" class="zalo"></a>
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