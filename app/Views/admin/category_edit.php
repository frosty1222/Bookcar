<?= $this->extend("layouts/admin") ?>
<?= $this->section("title") ?>
<?= $title ?>
<?= $this->endSection(); ?>
<?= $this->section("content") ?>
<div class="main-container">
    <div class="main-product-add">
       
        <form action="<?= base_url('update_category/'.$category['id'])?>" method="POST" role="form" enctype="multipart/form">
            <div class="form-group">
                <label for="">Product Name</label>
                <input type="text" name="product_name" value="<?= $category['product_name'] ?>" class="form-control" placeholder="Input field">
            </div>
            <div class="form-group">
                <label for="">Status</label>
                <input type="text" name="status" value="<?= $category['status'] ?>" class="form-control" placeholder="Input field">
            </div>
            <div class="form-group">
                <label for="">Image</label>
                <input type="text" readonly name="image" value="<?= $category['image'] ?>" class="form-control" placeholder="Input field">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>
<?= $this->endSection(); ?>