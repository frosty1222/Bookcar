<?= $this->extend("layouts/main") ?>
<?= $this->section("title") ?>
<?= $title ?>
<?= $this->endSection(); ?>
<?= $this->section("content") ?>
<div class="trial-main">
     <div class="sub-trial">
          <div class="trial-sub">
               <div class="trial-breadcrumb">
                    <ul>
                         <li>Home > </li>
                         <li>Đăng Kí Lái Thử</li>
                         <br>
                         <span>đăng kí lái thử</span>
                    </ul>
               </div>
          </div>
          <div class="trial-content">
               <div class="trial-left">
                    <ul>
                         <span>Lái thử là một bước rất quan trọng khi bạn chọn mua xe khi bạn tham gia lái thử tại
                              HyunDaiLam Kinh chúng tôi. bạn sẽ nhận được ưu đãi như sau
                         </span>
                         <li>Được lái thử hoàn toàn miễn phí</li>
                         <li>Được tư vấn giới thiệu các tính năng trên xe</li>
                         <li>Được nhận giá ưu đãi khi mua hàng</li>
                         <li>được tư vấn bán hàng tiếp đón nồng nhiệt và được thưởng thức các loại thức uống miễn phí
                              taị Showroom HuynDai Lam Kinh
                         </li>
                    </ul>
                    <div class="trial-form">
                         <?php if (session()->getFlashdata('status')) {
                              echo "<h4>" . session()->getFlashdata('status') . "</h4>";
                         } ?>
                         <form action="<?= base_url('trail_store') ?>" method="POST" enctype="multipart/form-data" accept-charset="utf-8">
                              <div class="form-group">
                                   <select name="brand">
                                        <option value="huyndai">huyndai</option>
                                        <option value="truck">truck</option>
                                        <option value="taxi">taxi</option>
                                        <option value="half-truck">xe bán tải</option>
                                        <option value="puller">xe đầu kéo</option>
                                   </select>
                              </div>
                              <div class="form-group">
                                   <input type="text" name="full_name" placeholder="Họ Tên">
                              </div>
                              <div class="form-group">
                                   <input type="text" name="phone" placeholder="Số Điện Thoại">
                              </div>
                              <div class="form-group">
                                   <input type="text" name="email" placeholder="Email Đăng Ký">
                              </div>
                              <div class="form-group">
                                   <input type="file" name="avatar" placeholder="Ảnh">
                              </div>
                              <div class="form-group">
                                   <button type="submit" class="button">Gửi Đi</button>
                              </div>
                         </form>
                         <div class="trial-stars">
                              <ul>
                                   <li><i class="fa fa-star checked"></i></li>
                                   <li><i class="fa fa-star checked"></i></li>
                                   <li><i class="fa fa-star checked"></i></li>
                                   <li><i class="fa fa-star checked"></i></li>
                                   <li><i class="fa fa-star checked"></i></li>
                                   <br>
                                   <span>5(100%) 2 votes</span>
                              </ul>
                         </div>
                    </div>
               </div>
               <div class="trial-right">
                    <div class="trial-img">
                         <div class="img"><img src="<?php echo base_url('public/image') ?>/avatar.png" alt=""></div>
                         <br>
                         <div class="name">Mr Lam <span>0903253317 </span><br>
                              <h5>phụ trách kinh doanh</h5>
                         </div>
                         <br>
                         <div class="trial-miner">
                              <span>
                                   <i class="fa fa-star checked"></i>
                                   Chúng tôi cam kết luôn mang lại giá ưu đãi nhất cho quý khách với thời gian giao xe nhanh nhất
                              </span>
                              <br>
                              <span>
                                   <i class="fa fa-star checked"></i>
                                   Chúng tôi luôn cập nhật tin tức khuyến mãi của hãng một cách sớm nhất
                              </span>
                              <br>
                              <span>
                                   <i class="fa fa-star checked"></i>
                                   hỗ trợ mua xe trả góp với ưu đãi lãi xuất thấp nhất & tối ưu tài chính
                              </span>
                         </div>

                    </div>
               </div>
          </div>
     </div>
     <div class="clear"></div>
</div>
<?= $this->endSection() ?>