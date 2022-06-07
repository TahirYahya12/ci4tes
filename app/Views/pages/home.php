<?= $this->extend('layout/template'); ?>


<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col">
            <h1>Hello, World</h1>
            <?php
            // dd($tes); // sama seperti var_dump() ditambah die();
            d($tes);
            ?>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>