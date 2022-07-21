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
            <div class="card-body">
                <h4 class="card-title"><?php echo $title ?></h4>
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>Nome</th>
                                <th>E-mail</th>
                                <th>CPF</th>
                                <th>Ativo</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach($users as $user) : ?>
                            <tr>
                                <td><?php $user->name; ?></td>
                                <td><?php $user->email; ?></td>
                                <td><?php $user->cpf; ?></td>
                                <td><?php echo ($user->active ? '<label class="badge badge-primary">Sim</label>' : '<label class="badge badge-danger">Não</label>') ?></td>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<?php echo $this->endSection(); ?>



<?php echo $this->section('scripts'); ?>

<?php echo $this->endSection(); ?>