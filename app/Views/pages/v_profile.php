<?php echo $this->extend('templates/v_template') ?>

<?php echo $this->section('content') ?>
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-6">
            <div class="card">
                <div class="card-header">
                    <h1 class="h3 text-gray-800"><?php echo $title ?></h1>
                </div>
                <div class="card-content">
                    <div class="card" style="max-width: 540px;">
                        <div class="row no-gutters">
                            <div class="col-md-4">
                                <img src="/assets/img/img_upload/<?php echo session()->get('image') ?>" class="card-img" alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <span class="h5 card-title"><strong><?php echo ucfirst(session()->get('name')) ?> </strong></span> / <span class="card-text"><?php echo session()->get('email') ?></span>
                                    <p class="card-text"><strong>Level akses</strong> : <?php echo session()->get('level') ?></p>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<?php echo $this->endSection() ?>