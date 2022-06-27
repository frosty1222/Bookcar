<?= $this->extend("layouts/admin") ?>
<?= $this->section("title") ?>
<?= $title ?>
<?= $this->endSection(); ?>
<?= $this->section("content") ?>
<div class="main-container">
    <div class="main-product-add">
        <div class="card-header">
            <h4>
                <a href="<?= base_url('category_add') ?>">Add New Category</a>
            </h4>
        </div>
        <?php
        if (session()->getFlashdata('mess')) {
            echo "<h4>" . session()->getFlashdata('mess') . "</h4>";
        }
        if (session()->getFlashdata('delete')) {
            echo "<h4>" . session()->getFlashdata('delete') . "</h4>";
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
                    <th>Product Name</th>
                    <th>Status</th>
                    <th>Image</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php if (count($category) > 0) : ?>
                    <?php $n = 1; ?>
                    <?php foreach ($category as $data) : ?>
                        <tr>
                            <td><?= $n++ ?></td>
                            <td><?= $data['product_name'] ?></td>
                            <td><?= $data['status'] ?></td>
                            <td><img src="<?= base_url('uploads') ?>/<?= $data['image'] ?>" alt="" width="100"></td>
                            <td>
                                <a class="btn btn-danger" href="<?= base_url('category_delete/' . $data['id']) ?>"><i class="fa fa-trash"></i></a>
                                <a class="btn btn-primary" href="<?= base_url('category_edit/' . $data['id']) ?>"><i class="fa fa-pen"></i></a>
                                <a class="btn btn-primary" href="<?= base_url('category_add') ?>"><i class="fa fa-plus"></i></a>
                            </td>
                        </tr>
                    <?php endforeach ?>
                <?php endif; ?>
            </tbody>
        </table>
        <span id="page"><?= $pager->links('category') ?></span>
    </div>
    
</div>
<?= $this->endSection(); ?>