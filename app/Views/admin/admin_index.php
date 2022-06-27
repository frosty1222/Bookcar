<?= $this->extend("layouts/admin") ?>
<?= $this->section("title") ?>
<?= $title ?>
<?= $this->endSection(); ?>
<?= $this->section("content") ?>
<div class="main-container">
    <div class="main-product-add">
        <div class="jumbotron">
            <div class="container">
                <h1>Hello,Welcome to Main view!</h1>
                <p>
                    <a class="btn btn-primary btn-lg">Learn more</a>
                </p>
            </div>
        </div>
        
    </div>
</div>
<?= $this->endSection(); ?>