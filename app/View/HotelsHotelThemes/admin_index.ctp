<div class="hotelsHotelThemes index">
	<h2><?php echo __('Hotels Hotel Themes'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('hotel_id'); ?></th>
			<th><?php echo $this->Paginator->sort('hotel_theme_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($hotelsHotelThemes as $hotelsHotelTheme): ?>
	<tr>
		<td><?php echo h($hotelsHotelTheme['HotelsHotelTheme']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($hotelsHotelTheme['Hotel']['name'], array('controller' => 'hotels', 'action' => 'view', $hotelsHotelTheme['Hotel']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($hotelsHotelTheme['HotelTheme']['name'], array('controller' => 'hotel_themes', 'action' => 'view', $hotelsHotelTheme['HotelTheme']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $hotelsHotelTheme['HotelsHotelTheme']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $hotelsHotelTheme['HotelsHotelTheme']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $hotelsHotelTheme['HotelsHotelTheme']['id']), null, __('Are you sure you want to delete # %s?', $hotelsHotelTheme['HotelsHotelTheme']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Hotels Hotel Theme'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Hotels'), array('controller' => 'hotels', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Hotel'), array('controller' => 'hotels', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Hotel Themes'), array('controller' => 'hotel_themes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Hotel Theme'), array('controller' => 'hotel_themes', 'action' => 'add')); ?> </li>
	</ul>
</div>
