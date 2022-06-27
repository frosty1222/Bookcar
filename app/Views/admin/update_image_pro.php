<?= $this->extend("layouts/admin") ?>
<?= $this->section("title") ?>
<?= $title ?>
<?= $this->endSection(); ?>
<?= $this->section("content") ?>
<div class="main-container">
    <div class="main-product-add">

    
    <form action="#" method="POST" role="form">
        <legend>Form title</legend>
    
        <div class="form-group">
            <label for="">label</label>
            <input type="text" class="form-control" id="" placeholder="Input field">
        </div>
    
        
    
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    

    </div>
</div>
<?= $this->endSection(); ?>