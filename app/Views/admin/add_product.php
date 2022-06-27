<?= $this->extend("layouts/admin") ?>
<?= $this->section("title") ?>
<?= $title ?>
<?= $this->endSection(); ?>
<?= $this->section("content") ?>
<div class="main-container">
    <div class="main-product-add">
        <?php
        if (session()->getFlashdata('status')) {
            echo "<h4>" . session()->getFlashdata('status') . "</h4>";
        }
        ?>
        <div class="car-header">
            <h4>
                <a href="<?= base_url('product_index') ?>">Return to Product View</a>
            </h4>
        </div>
        <form action="<?= base_url('store') ?>" method="POST" role="form" enctype="multipart/form-data" accept-charset="utf-8">
            <div class="form-group">
                <label for="">Name</label>
                <input type="text" name="name" class="form-control" placeholder="Input field">
            </div>
            <div class="form-group">
                <label for="">Image</label>
                <input type="file" name="image" class="form-control" placeholder="Input field">
            </div>
            <div class="form-group">
                <label for="">Price</label>
                <input type="text" name="price" class="form-control" placeholder="Input field">
            </div>
            <div class="form-group">
                <label for="">Sale_Price</label>
                <input type="text" name="sale_price" class="form-control" placeholder="Input field">
            </div>
            <div class="form-group">
                <label for="">Description</label>
                <textarea name="description" cols="60" rows="3"></textarea>
            </div>
            <div class="form-group">
                <label for="">Category_id</label>
                <select name="category_id">
                    <?php foreach ($category as $cate) : ?>
                        <option value="<?= $cate['id'] ?>"><?= $cate['product_name'] ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>

    </div>
</div>
<?= $this->endSection(); ?>