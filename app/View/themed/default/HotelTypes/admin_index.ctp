<div class="hotelTypes index">
	<h2><?php echo __('Hotel Types'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th><?php echo $this->Paginator->sort('status'); ?></th>
			
			<?php /* ?><th><?php echo $this->Paginator->sort('site_id'); ?></th>
			<th><?php echo $this->Paginator->sort('description'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th><?php */ ?>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($hotelTypes as $hotelType): ?>
	<tr>
		<td><?php echo h($hotelType['HotelType']['id']); ?>&nbsp;</td>
		<td><?php echo h($hotelType['HotelType']['name']); ?>&nbsp;</td>
		<td><?php if(h($hotelType['HotelType']['status']) == 1) { echo "Active"; } else { echo "Inactive"; } ?>&nbsp;</td>

		<?php /* ?><td>
			<?php echo $this->Html->link($hotelType['Site']['name'], array('controller' => 'sites', 'action' => 'view', $hotelType['Site']['id'])); ?>
		</td>
		<td><?php echo h($hotelType['HotelType']['description']); ?>&nbsp;</td>
		<td><?php echo h($hotelType['HotelType']['modified']); ?>&nbsp;</td>
		<td><?php echo h($hotelType['HotelType']['created']); ?>&nbsp;</td><?php */ ?>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $hotelType['HotelType']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $hotelType['HotelType']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $hotelType['HotelType']['id']), null, __('Are you sure you want to delete # %s?', $hotelType['HotelType']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Hotel Type'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Sites'), array('controller' => 'sites', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Site'), array('controller' => 'sites', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Hotels'), array('controller' => 'hotels', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Hotel'), array('controller' => 'hotels', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Hotels Hotel Tyeps'), array('controller' => 'hotels_hotel_tyeps', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Hotels Hotel Tyep'), array('controller' => 'hotels_hotel_tyeps', 'action' => 'add')); ?> </li>
	</ul>
</div>
