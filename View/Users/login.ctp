<div align=center><b><font size=5 color=blue>FINAL DE PROGRAMACI&OacuteN III</font></b></div>
<br><br>
<div class="users form">
<?php echo $this->Session->flash('auth'); ?>
<?php echo $this->Form->create('User'); ?>
    <fieldset>
        <legend><?php echo __('INGRESE NOMBRE DE USUARIO Y CONTRASE&Ntilde;A'); ?></legend>
        <?php echo $this->Form->input('username');
        echo $this->Form->input('password');
    ?>
    </fieldset>
<?php echo $this->Form->end(__('Ingresar')); ?>
</div>
<div align=left><b>Integrantes: </b><br>Fuentes Baz&aacuten, Rodrigo<br>Simonetti, Marcelo
<br><br><br>
<img src=http://localhost/imagen1.jpg alt='Pantalla de login' width=254 height=179></div>