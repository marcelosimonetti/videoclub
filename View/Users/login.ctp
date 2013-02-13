<div class="users form">
<?php echo $this->Session->flash('auth'); ?>
<?php echo $this->Form->create('User'); ?>
    <fieldset>
        <legend><?php echo __('INGRESE NOMBRE DE USUARIO Y CONTRASE&Ntilde;A'); ?></legend>
        <?php echo $this->Form->input('Nombre de Usuario');
        echo $this->Form->input('Contrase&ntilde;a');
    ?>
    </fieldset>
<?php echo $this->Form->end(__('Ingresar')); ?>
</div>