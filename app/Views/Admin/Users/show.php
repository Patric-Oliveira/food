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
      <div class="card-header bg-primary pb-0 pt-4 text-white">
        <h4 class="card-title text-white"><?php echo esc($title); ?></h4>
      </div>
      <div class="card-body">
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
          <?php echo $user->created_at->humanize(); ?>
        </p>
        <p class="card-text">
          <span class="font-weight-bold">Atualizado:</span>
          <?php echo $user->updated_at->humanize(); ?>
        </p>
        <div class="mt-4">
          <a href="<?php echo site_url("admin/users/edit/$user->id"); ?>" class="btn btn-dark btn-sm mr-2"><i class="mdi mdi-pencil btn-icon-prepend"></i> Editar</a>
          <a href="<?php echo site_url("admin/users/delete/$user->id"); ?>" class="btn btn-danger btn-sm mr-2"><i class="mdi mdi-trash-can btn-icon-prepend"></i> Excluir</a>
          <a href="<?php echo site_url("admin/users"); ?>" class="btn btn-light text-dark btn-sm"><i class="mdi mdi-arrow-left btn-icon-prepend"></i> Voltar</a>
        </div>
      </div>
    </div>
  </div>
</div>

<?php echo $this->endSection(); ?>



<?php echo $this->section('scripts'); ?>

<?php echo $this->endSection(); ?>