<?= $this->extend("layouts/admin") ?>
<?= $this->section("title") ?>
<?= $title ?>
<?= $this->endSection(); ?>
<?= $this->section("content") ?>
<style>
</style>
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
                    <th>Brand</th>
                    <th>Full Name</th>
                    <th>Phone</th>
                    <th>Email</th>
                    <th>avatar</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php $n = 1 ?>
                <?php foreach ($trail as $key) : ?>
                    <tr>
                        <td><?= $n++ ?></td>
                        <td><?= $key['brand'] ?></td>
                        <td><?= $key['full_name'] ?></td>
                        <td><?= $key['phone'] ?></td>
                        <td><?= $key['email'] ?></td>
                        <td> <img src="<?= base_url('uploads') ?>/<?= $key['avatar'] ?>" width="100" height="100" alt=""></td>
                        <td>
                            <a class="btn btn-danger" href="<?= base_url('trail_delete/' . $key['id']) ?>"><i class="fa fa-trash"></i></a>
                            <a class="btn btn-primary" href="<?= base_url('trail_edit/' . $key['id']) ?>"><i class="fa fa-pen"></i></a>
                            <a class="btn btn-primary" href="<?= base_url('index') ?>"><i class="fa fa-plus"></i></a>
                        </td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
        <span id="page"><?= $pager->links('category') ?></span>
    </div>
</div>
<?= $this->endSection(); ?>