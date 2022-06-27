<?= $this->extend("layouts/main") ?>
<?= $this->section("title") ?>
<?= $title ?>
<?= $this->endSection(); ?>
<?= $this->section("content") ?>
<div class="service-container">
    <div class="service-breadcrumb">
        <ul>
            <li>Home > </li>
            <li>Bảo Hành ></li>
            <li>Dịch Vụ</li>
        </ul>
    </div>
    <div class="service">
        <div class="service-left">
            <span>Dịch Vụ</span>
            <ul>
                <li><i class="fa fa-angle-right"></i><a href="">Bảo Hành</a></li>
                <li><i class="fa fa-angle-right"></i><a href="">Bảo dưỡng</a></li>
                <li><i class="fa fa-angle-right"></i><a href="">Sửa chữa </a></li>
                <li><i class="fa fa-angle-right"></i><a href="">Trả góp</a></li>
                <li><i class="fa fa-angle-right"></i><a href="<?php echo site_url('Sub') ?>">Đăng ký lái thử</a></li>
            </ul>
        </div>
        <div class="service-right">
            <div class="service-heading">
                <span>Tin tức hãng</span>
                <ul class="media">
                    <li class="like"><a href="#"><i class="fal fa-thumbs-up"></i>Thích</a></li>
                    <div class="share">
                        <span id="share">Chia sẻ</span>
                        <ul id="share3">
                            <li><i class="fab fa-facebook-f"></i><a href="">Facebook</a></li>
                            <li><i class="fab fa-instagram"></i><a href="">Instagram</a></li>
                            <li><i class="fab fa-twitter"></i><a href="">Twitter</a></li>
                            <li><i class="fab fa-yahoo"></i><a href="">Yahoo!</a></li>
                            <li><i class="fas fa-plus-square"></i><a href="">Add</a></li>
                        </ul>
                    </div>
                </ul>
            </div>
            <ul>
                <li>HuynDai chính thức ra mắt ứng dụng điện thoại hỗm trợ cac khách hàng quan tâm và sử dụng dòng xe HuynDai mang tên Huyndai Me!</li>
                <br>
                <li>
                    Trên cơ sở nền tàng laayd Khách hàng làm trung tâm với tên gọi ứng dụng mang ý nghĩa về toàn bộ nhwungx điều khách hàng mong muốn
                    và có nhu cầu , huyndai cùng Đại lý phối hợp phát triển một ứng dụng với tiện ích thiết thực vừa đơn giản thân thiện cho khách hàng
                    với mục tiêu hỗ trợ tối đa trong mỗi hành trình trải nghiệm
                </li>
                <div class="img-service"><img src="<?php echo base_url('public/image') ?>/Buong_Lai.jpg" alt=""></div>
                <li>Các tiện ích chính gồm có:</li>
                <br>
                <li>-Thông tin toàn bộ các Đại lý Ủy Quyền trong đó HuynDai Me! đưa ra vị trí của Quý Khách hướng dẫn, chỉ đường,các số liên hệ cần thiết </li>
                <br>
                <li>-Các thông tin hỗ trợ kĩ thuật như sách hướng dẫn sử dụng các bài hướng daanxkix thuật cơ bản, hay chính sách bảo hành</li>
                <br>
                <li>
                    -Cung cấp Tin tức hàng ngày về thị trường như tin về Huyndai thành Công các video trên youtube HuynDai Thành công.Ngoài ra HuynDai Me! cũng cung cấp
                    liên kết tới các nhóm cộng đồng trên Facebook
                </li>
                <br>
                <li>
                    -Thông tin xe và mua xe với HuynDai Me! Quý khách có thể tham khảo các thông tin của xe huyndai so sánh
                    tính năng các xe tính toán giá lăn bánh, hoặc tính toán kế hoạch trả ghóp.Ngoài ra quý khách có thể đăng kí lái thử qua ứng dụng
                </li>
                <br>
                <li>
                    -Với khách hàng đã mua và sử dụng xe HuynDai Me! cung cấp và hỗ trợ việc dặt lịch dịch vụ online
                    tính roán dự toán bảo dưỡng,các cấp và sẽ nhắc bảo dưỡng để đảm bảo xe quý khách được bảo dưỡng theo đúng lịch mà đại lý đã lên cho xe của quý khách
                </li>
                <br>
                <li>
                    -Đối với những Quý khách đã đăng kí trở thành hội viên của chương trình HuynDai Membership tại các Đại lý,ứng dụng này sẽ cung cấp
                    Thẻ hội viên online với tính tiện lợi vượt xa Thẻ hội viên cứng.cụ thể như quý khách không cần giữ thẻ, không lo bị thất lạc,hay quên mang theo khi tới sử dụng tại đại lý,
                    Đồng thời ,Quý khách có thể theo dõi điểm tích lũy tiêu dùng hay quyền lợi hội viên của mình một cách thuận lợi
                </li>
                <br>
                <li>
                    -Mục phản hồi/ khiếu nại trên HuynDai me! giúp quý khách có thể liên hệ/ phản ánh các vấn đề nhanh nhất tới tổng đài của HuynDai Thành Công
                </li>
                <br>
                <li>
                    với khởi đầu này HuynDai kì vọng HuynDai Me! sẽ được Quý Khách đón nhận và sử dụng.và chúng tôi sẽ tiếp tục nỗ lực không ngừng.
                    ngày một mở rộng các tiện ích.để đáp ứng mọi mong đợi của Quý khách, để mang lại hành trình trải nghiệm tuyệt cời dành cho quý khách như một lời tri ân chân thành nhất
                </li>
            </ul>
        </div>
    </div>
</div>
<?= $this->endSection() ?>