<div class="hotelRoomsTaxes index">
	<h2><?php echo __('Hotel Rooms Taxes'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('hotel_room_id'); ?></th>
			<th><?php echo $this->Paginator->sort('tax_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($hotelRoomsTaxes as $hotelRoomsTax): ?>
	<tr>
		<td><?php echo h($hotelRoomsTax['HotelRoomsTax']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($hotelRoomsTax['HotelRoom']['name'], array('controller' => 'hotel_rooms', 'action' => 'view', $hotelRoomsTax['HotelRoom']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($hotelRoomsTax['Tax']['name'], array('controller' => 'taxes', 'action' => 'view', $hotelRoomsTax['Tax']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $hotelRoomsTax['HotelRoomsTax']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $hotelRoomsTax['HotelRoomsTax']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $hotelRoomsTax['HotelRoomsTax']['id']), null, __('Are you sure you want to delete # %s?', $hotelRoomsTax['HotelRoomsTax']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Hotel Rooms Tax'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Hotel Rooms'), array('controller' => 'hotel_rooms', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Hotel Room'), array('controller' => 'hotel_rooms', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Taxes'), array('controller' => 'taxes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tax'), array('controller' => 'taxes', 'action' => 'add')); ?> </li>
	</ul>
</div>
