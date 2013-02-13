<div class="peliculas form">
<?php echo $this->Form->create('Pelicula'); ?>
	<fieldset>
		<legend><?php echo __('Edit Pelicula'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('nombre');
		echo $this->Form->input('anio');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Pelicula.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Pelicula.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Peliculas'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Reservas'), array('controller' => 'reservas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Reserva'), array('controller' => 'reservas', 'action' => 'add')); ?> </li>
	</ul>
</div>
