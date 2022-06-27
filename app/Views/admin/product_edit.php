<?= $this->extend("layouts/admin") ?>
<?= $this->section("title") ?>
<?= $title ?>
<?= $this->endSection(); ?>
<?= $this->section("content") ?>
<div class="main-container">
    <div class="main-product-add">

        <form action="<?= base_url('product_update/'.$product['id']) ?>" method="POST" enctype="multipart/form-data" accept-charset="utf-8">
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" class="form-control" value="<?= $product['name'] ?>" placeholder="Input field">
            </div>
            <div class="form-group">
                <label for="image">Image</label>
                <input type="file" name="image" class="form-control" value="<?= $product['image'] ?>" placeholder="Input field">
            </div>
            <div class="form-group">
                <label for="price">Price</label>
                <input type="text" name="price" value="<?= $product['price'] ?>" class="form-control" placeholder="Input field">
            </div>
            <div class="form-group">
                <label for="sale_price">Sale_Price</label>
                <input type="text" name="sale_price" class="form-control" value="<?= $product['sale_price'] ?>" placeholder="Input field">
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <textarea type="text" name="description" cols="60" rows="3" value="<?= $product['description'] ?>" placeholder="Description"></textarea>
            </div>
            <div class="form-group">
                <label for="category_id">Category_id</label>
                <input type="text" readonly name="category_id" value="<?= $product['category_id'] ?>">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>

    </div>
</div>
<?= $this->endSection(); ?>