<div class="reservas index">
	<h2><?php echo __('Reservas'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('cliente_id'); ?></th>
			<th><?php echo $this->Paginator->sort('pelicula_id'); ?></th>
			<th><?php echo $this->Paginator->sort('fecha_entrega'); ?></th>
			<th><?php echo $this->Paginator->sort('fecha_devolucion'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($reservas as $reserva): ?>
	<tr>
		<td><?php echo h($reserva['Reserva']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($reserva['Cliente']['apellido'], array('controller' => 'clientes', 'action' => 'view', $reserva['Cliente']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($reserva['Pelicula']['nombre'], array('controller' => 'peliculas', 'action' => 'view', $reserva['Pelicula']['id'])); ?>
		</td>
		<td><?php echo h($reserva['Reserva']['fecha_entrega']); ?>&nbsp;</td>
		<td><?php echo h($reserva['Reserva']['fecha_devolucion']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $reserva['Reserva']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $reserva['Reserva']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $reserva['Reserva']['id']), null, __('Are you sure you want to delete # %s?', $reserva['Reserva']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Reserva'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Clientes'), array('controller' => 'clientes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cliente'), array('controller' => 'clientes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Peliculas'), array('controller' => 'peliculas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Pelicula'), array('controller' => 'peliculas', 'action' => 'add')); ?> </li>
	</ul>
</div>
