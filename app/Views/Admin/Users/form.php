<div class="form-row">
    <div class="form-group col-md-4">
        <label for="name">Nome</label>
        <input type="text" class="form-control" name="name" id="name" value="<?php echo esc($user->name); ?>">
    </div>
    <div class="form-group col-md-2">
        <label for="name">CPF</label>
        <input type="text" class="form-control cpf" name="cpf" id="cpf" value="<?php echo esc($user->cpf); ?>">
    </div>
    <div class="form-group col-md-3">
        <label for="phone">Telefone</label>
        <input type="text" class="form-control sp_celphones" name="phone" id="phone" value="<?php echo esc($user->phone); ?>">
    </div>

    <div class="form-group col-md-3">
        <label for="name">E-mail</label>
        <input type="text" class="form-control" name="email" id="email" value="<?php echo esc($user->email); ?>">
    </div>



</div>
<div class="form-row">
    <div class="form-group col-md-3">
        <label for="password">Senha</label>
        <input type="password" class="form-control" name="password" id="password">
    </div>
    <div class="form-group col-md-3">
        <label for="password_confirmation">Confirme a Senha</label>
        <input type="password" class="form-control" name="password_confirmation" id="password_confirmation">
    </div>
    <div class="form-group col-md-3">
        <label for="name">Perfil de Acesso</label>
        <select class="form-control" name="is_admin">
            <?php if ($user->id) : ?>
                <option value="1" <?php echo ($user->is_admin ? 'selected' : ''); ?>>Administrador</option>
                <option value="0" <?php echo (!$user->is_admin ? 'selected' : ''); ?>>Cliente</option>
            <?php else : ?>
                <option value="1">Sim</option>
                <option value="0" selected="">Não</option>
            <?php endif; ?>
        </select>
    </div>
    <div class="form-group col-md-3">
        <label for="name">Ativo</label>
        <select class="form-control" name="active">
            <?php if ($user->id) : ?>
                <option value="1" <?php echo ($user->active ? 'selected' : ''); ?>>Sim</option>
                <option value="0" <?php echo (!$user->active ? 'selected' : ''); ?>>Não</option>
            <?php else : ?>
                <option value="1">Sim</option>
                <option value="0" selected="">Não</option>
            <?php endif; ?>
        </select>
    </div>
</div>
<button type="submit" class="btn btn-primary mr-2 btn-sm"><i class="mdi mdi-content-save btn-icon-prepend"></i> Salva</button>
<a href="<?php echo site_url("admin/users/show/$user->id"); ?>" class="btn btn-light text-dark btn-sm"><i class="mdi mdi-arrow-left btn-icon-prepend"></i> Voltar</a>