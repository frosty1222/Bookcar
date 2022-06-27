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
        <form>
            <div class="searching-form">
            <input type="search" name="search" class="form-control" required="required">
            <input type="submit" value="Search">
            </div>
        </form>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Name</th>
                    <th>Image</th>
                    <th>Price</th>
                    <th>Sale_Price</th>
                    <th>Description</th>
                    <th>Category ID</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php $n = 1 ?>
                <?php foreach ($product as $key) : ?>
                    <tr>
                        <td><?= $n++ ?></td>
                        <td><?= $key['name'] ?></td>
                        <td><img src="<?= base_url('upload') ?>/<?= $key['image'] ?> " alt="" width="100"></td>
                        <td><?= $key['price'] ?></td>
                        <td><?= $key['sale_price'] ?></td>
                        <td><?= $key['description'] ?></td>
                        <td><?= $key['category_id'] ?></td>
                        <td>
                            <a class="btn btn-danger" onclick="return confirm('do you wanna delete?')" href="<?= base_url('product_delete/'.$key['id']) ?>"><i class="fa fa-trash"></i></a>
                            <a class="btn btn-primary" href="<?= base_url('product_edit/' . $key['id']) ?>"><i class="fa fa-pen"></i></a>
                            <a class="btn btn-primary" href="<?= base_url('add_product') ?>"><i class="fa fa-plus"></i></a>
                        </td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
        <span id="page"><?= $pager->links('product') ?></span>
    </div>
</div>
<?= $this->endSection(); ?>