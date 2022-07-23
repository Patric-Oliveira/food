<?php

use App\Controllers\Admin\Users;

echo $this->extend('Admin/layout/main'); ?>



<?php echo $this->section('title'); ?>

<?php echo $title; ?>

<?php echo $this->endSection(); ?>



<?php echo $this->section('styles'); ?>

<?php echo $this->endSection(); ?>



<?php echo $this->section('content'); ?>

<div class="row">
  <div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-header bg-primary pb-0 pt-4 text-white">
        <h4 class="card-title text-white"><?php echo esc($title); ?></h4>
      </div>
      <div class="card-body">
        <form class="forms-sample">
          <?php echo $this->include('Admin/Users/form') ?>
        </form>
      </div>
    </div>
  </div>
</div>

<?php echo $this->endSection(); ?>



<?php echo $this->section('scripts'); ?>

<script src="<?php echo site_url('admin/vendors/mask/jquery.mask.min.js'); ?>"></script>
<script src="<?php echo site_url('admin/vendors/mask/app.js'); ?>"></script>

<?php echo $this->endSection(); ?>