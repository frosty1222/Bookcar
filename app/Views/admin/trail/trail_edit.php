<?= $this->extend("layouts/admin") ?>
<?= $this->section("title") ?>
<?= $title ?>
<?= $this->endSection(); ?>
<?= $this->section("content") ?>
<div class="main-container">
    <div class="main-product-add">
        <form action="<?= base_url('trail_update/' . $trail['id']) ?>" method="POST" enctype="multipart/form-data" accept-charset="utf-8">
            <div class="form-group">
                <select name="brand">
                    <option value="<?= $trail['brand'] ?>">huyndai</option>
                </select>
            </div>
            <div class="form-group">
                <input type="text" name="full_name" value="<?= $trail['full_name'] ?>" placeholder="Họ Tên">
            </div>
            <div class="form-group">
                <input type="number" name="phone" value="<?= $trail['phone'] ?>" placeholder="Số Điện Thoại">
            </div>
            <div class="form-group">
                <input type="text" name="email" value="<?= $trail['email'] ?>" placeholder="Email Đăng Ký">
            </div>
            <div class="form-group">
                <input type="file" name="avatar" value="<?= $trail['avatar'] ?>" placeholder="Email Đăng Ký">
            </div>
            <div class="form-group">
                <button type="submit" class="button">Gửi Đi</button>
            </div>
        </form>
    </div>
</div>
<?= $this->endSection(); ?>