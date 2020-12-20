<?php echo $this->extend('templates/v_template') ?>

<?php echo $this->section('content') ?>
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <?php if (session()->getFlashdata('messagesuccesslogin')) : ?>
                <div class="alert alert-success" role="alert">
                    Selamat datang kawan, anda telah <?php echo session()->getFlashdata('messagesuccesslogin') ?> login.
                </div>
            <?php endif ?>
        </div>
    </div>
    <h1 class="h3 mb-4 text-gray-800"><?php echo $title ?></h1>

</div>

<?php echo $this->endSection() ?>