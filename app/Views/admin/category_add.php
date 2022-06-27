<?= $this->extend("layouts/admin") ?>
<?= $this->section("title") ?>
<?= $title ?>
<?= $this->endSection(); ?>
<?= $this->section("content") ?>
<div class="main-container">
    <div class="car-header">
        <h4>
            <a href="<?= base_url('category')?>">Return Category index</a>
        </h4>
    </div>
    <div class="main-product-add">
        <?php
        if(session()->getFlashdata('status')){
            echo "<h4>".session()->getFlashdata('status')."</h4>";
        }
        ?>
        <form action="<?= base_url('category_store')?>" method="POST" enctype="multipart/form-data" accept-charset="utf-8">
            <div class="form-group">
                <label for="">Name</label>
                <input type="text" name="product_name" class="form-control" placeholder="Input field">
            </div>
            <div class="form-group">
                <label for="">Image</label>
                <input type="file" name="image" class="form-control" placeholder="Input field">
            </div>
            <div class="form-group">
                <label for="">Status</label>
                <input type="text" name="status" class="form-control" placeholder="Input field">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>
<?= $this->endSection(); ?>