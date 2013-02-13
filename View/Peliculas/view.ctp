<div class="peliculas view">
<h2><?php  echo __('Pelicula'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($pelicula['Pelicula']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombre'); ?></dt>
		<dd>
			<?php echo h($pelicula['Pelicula']['nombre']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Anio'); ?></dt>
		<dd>
			<?php echo h($pelicula['Pelicula']['anio']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Pelicula'), array('action' => 'edit', $pelicula['Pelicula']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Pelicula'), array('action' => 'delete', $pelicula['Pelicula']['id']), null, __('Are you sure you want to delete # %s?', $pelicula['Pelicula']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Peliculas'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Pelicula'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Reservas'), array('controller' => 'reservas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Reserva'), array('controller' => 'reservas', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Reservas'); ?></h3>
	<?php if (!empty($pelicula['Reserva'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Cliente Id'); ?></th>
		<th><?php echo __('Pelicula Id'); ?></th>
		<th><?php echo __('Fecha Entrega'); ?></th>
		<th><?php echo __('Fecha Devolucion'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($pelicula['Reserva'] as $reserva): ?>
		<tr>
			<td><?php echo $reserva['id']; ?></td>
			<td><?php echo $reserva['cliente_id']; ?></td>
			<td><?php echo $reserva['pelicula_id']; ?></td>
			<td><?php echo $reserva['fecha_entrega']; ?></td>
			<td><?php echo $reserva['fecha_devolucion']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'reservas', 'action' => 'view', $reserva['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'reservas', 'action' => 'edit', $reserva['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'reservas', 'action' => 'delete', $reserva['id']), null, __('Are you sure you want to delete # %s?', $reserva['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Reserva'), array('controller' => 'reservas', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
