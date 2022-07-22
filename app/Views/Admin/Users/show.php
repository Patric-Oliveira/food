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
  <div class="col-lg-6 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <div class="card-header bg-primary pb-0 pt-4 text-white">
        <h4 class="card-title text-white"><?php echo esc($title); ?></h4>
        </div>
        <p class="card-text">
          <span class="font-weight-bold">Nome:</span>
          <?php echo esc($user->name); ?>
        </p>
        <p class="card-text">
          <span class="font-weight-bold">E-mail:</span>
          <?php echo esc($user->email); ?>
        </p>
        <p class="card-text">
          <span class="font-weight-bold">Ativo:</span>
          <?php echo $user->active ? 'Sim' : 'Não'; ?>
        </p>
        <p class="card-text">
          <span class="font-weight-bold">Perfil:</span>
          <?php echo $user->is_admin ? 'Administrador' : 'Cliente'; ?>
        </p>
        <p class="card-text">
          <span class="font-weight-bold">Criado:</span>
          <?php echo $user->created_at; ?>
        </p>
        <p class="card-text">
          <span class="font-weight-bold">Atualizado:</span>
          <?php echo $user->updated_at; ?>
        </p>
        <input name="name" value="Fulano de tal" class="bg-danger">
      </div>
    </div>
  </div>
</div>

<?php echo $this->endSection(); ?>



<?php echo $this->section('scripts'); ?>

<?php echo $this->endSection(); ?>