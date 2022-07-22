<?php

use App\Controllers\Admin\Users;

echo $this->extend('Admin/layout/main'); ?>



<?php echo $this->section('title'); ?>

<?php echo $title; ?>

<?php echo $this->endSection(); ?>



<?php echo $this->section('styles'); ?>

<link rel="stylesheet" href="<?php echo site_url('admin/vendors/auto-complete/jquery-ui.css') ?>" />

<?php echo $this->endSection(); ?>



<?php echo $this->section('content'); ?>

<div class="row">
  <div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title"><?php echo $title ?></h4>
        <div class="ui-widget">
          <input id="query" name="query" placeholder="" class="form-control bg-light mb-5">
        </div>
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
              <?php foreach ($users as $user) : ?>
                <tr>
                  <td>
                    <a href="<?php echo site_url("admin/users/show/$user->id"); ?>"><?php echo $user->name; ?></a>
                  </td>
                  <td><?php echo $user->email; ?></td>
                  <td><?php echo $user->cpf; ?></td>
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

<script src="<?php echo site_url('admin/vendors/auto-complete/jquery-ui.js'); ?>"></script>

<script>
  $(function() {

    $("#query").autocomplete({
      source: function(request, response) {

        $.ajax({

          url: "<?php echo site_url('admin/users/search'); ?>",
          dataType: "json",
          data: {
            term: request.term
          },

          success: function(data) {

            if (data.length < 1) {

              var data = [{
                label: 'Usuário não encontrado',
                value: -1
              }];

            }
            response(data); // valor no data

          },

        }); // fim do ajax

      },

      minLenght: 1,
      select: function(event, ui) {

        if (ui.item.value == -1) {

          $(this).val("");
          return false;

        } else {

          window.location.href = '<?php echo site_url('admin/users/show/'); ?>' + ui.item.id;

        }

      }

    }); // fim autocomplete

  });
</script>

<?php echo $this->endSection(); ?>