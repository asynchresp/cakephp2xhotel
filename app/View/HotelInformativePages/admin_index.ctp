<div class="hotelInformativePages index">
	<h2><?php echo __('Hotel Informative Pages'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th><?php echo $this->Paginator->sort('hotel_id'); ?></th>
			<th><?php echo $this->Paginator->sort('status'); ?></th>
			
			<?php /* ?><th><?php echo $this->Paginator->sort('site_id'); ?></th>
			<th><?php echo $this->Paginator->sort('short_description'); ?></th>
			<th><?php echo $this->Paginator->sort('long_description'); ?></th>
			<th><?php echo $this->Paginator->sort('meta_title'); ?></th>
			<th><?php echo $this->Paginator->sort('meta_description'); ?></th>
			<th><?php echo $this->Paginator->sort('meta_keyword'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th><?php */ ?>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($hotelInformativePages as $hotelInformativePage): ?>
	<tr>
		<td><?php echo h($hotelInformativePage['HotelInformativePage']['id']); ?>&nbsp;</td>
		<td><?php echo h($hotelInformativePage['HotelInformativePage']['name']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($hotelInformativePage['Hotel']['name'], array('controller' => 'hotels', 'action' => 'view', $hotelInformativePage['Hotel']['id'])); ?>
		</td>
		<td><?php if(h($hotelInformativePage['HotelInformativePage']['status']) == 1) { echo "Active"; } else { echo "Inactive"; } ?>&nbsp;</td>

		<?php /* ?><td>
			<?php echo $this->Html->link($hotelInformativePage['Site']['name'], array('controller' => 'sites', 'action' => 'view', $hotelInformativePage['Site']['id'])); ?>
		</td>
		<td><?php echo h($hotelInformativePage['HotelInformativePage']['short_description']); ?>&nbsp;</td>
		<td><?php echo h($hotelInformativePage['HotelInformativePage']['long_description']); ?>&nbsp;</td>
		<td><?php echo h($hotelInformativePage['HotelInformativePage']['meta_title']); ?>&nbsp;</td>
		<td><?php echo h($hotelInformativePage['HotelInformativePage']['meta_description']); ?>&nbsp;</td>
		<td><?php echo h($hotelInformativePage['HotelInformativePage']['meta_keyword']); ?>&nbsp;</td>
		<td><?php echo h($hotelInformativePage['HotelInformativePage']['modified']); ?>&nbsp;</td>
		<td><?php echo h($hotelInformativePage['HotelInformativePage']['created']); ?>&nbsp;</td><?php */ ?>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $hotelInformativePage['HotelInformativePage']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $hotelInformativePage['HotelInformativePage']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $hotelInformativePage['HotelInformativePage']['id']), null, __('Are you sure you want to delete # %s?', $hotelInformativePage['HotelInformativePage']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Hotel Informative Page'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Sites'), array('controller' => 'sites', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Site'), array('controller' => 'sites', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Hotels'), array('controller' => 'hotels', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Hotel'), array('controller' => 'hotels', 'action' => 'add')); ?> </li>
	</ul>
</div>
