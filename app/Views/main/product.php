<?= $this->extend("layouts/main") ?>
<?= $this->section("title") ?>
<?= $title ?>
<?= $this->endSection(); ?>
<?= $this->section("content") ?>
<div class="product-main">
    <div class="product-breacrumb">
        <ul>
            <li>Home > </li>
            <li>Sản Phẩm</li>
            <br>
            <span>XE KHÁCH HUYNDAI</span>
        </ul>
    </div>
    <div class="product-sub">

        <div class="product">

            <ul>
                <?php foreach ($result as $pro) : ?>
                    <div class="pro-ul">
                        <div class="img-pro"><img src="<?= base_url('upload') ?>/<?= $pro['image'] ?>" alt=""></div>
                        <li><?= $pro['name'] ?></li>
                        <li><span class="text-center">Hành trình mới-cảm hứng mới</span></li>
                        <li>
                            <span>Giá từ</span>:<span class="price"><?= $pro['sale_price'] ?>$-><?= $pro['price'] ?>$</span>
                        </li>
                    </div>
                <?php endforeach; ?>
            </ul>
            <div class="pro-paginate">
                <ul>
                    <li><?= $pager->links('result') ?></li>
                </ul>
            </div>
            <div class="border"></div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>