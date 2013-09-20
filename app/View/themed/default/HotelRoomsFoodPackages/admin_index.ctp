<div class="hotelRoomsFoodPackages index">
	<h2><?php echo __('Hotel Rooms Food Packages'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('hotel_room_id'); ?></th>
			<th><?php echo $this->Paginator->sort('food_package_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($hotelRoomsFoodPackages as $hotelRoomsFoodPackage): ?>
	<tr>
		<td><?php echo h($hotelRoomsFoodPackage['HotelRoomsFoodPackage']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($hotelRoomsFoodPackage['HotelRoom']['name'], array('controller' => 'hotel_rooms', 'action' => 'view', $hotelRoomsFoodPackage['HotelRoom']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($hotelRoomsFoodPackage['FoodPackage']['title'], array('controller' => 'food_packages', 'action' => 'view', $hotelRoomsFoodPackage['FoodPackage']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $hotelRoomsFoodPackage['HotelRoomsFoodPackage']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $hotelRoomsFoodPackage['HotelRoomsFoodPackage']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $hotelRoomsFoodPackage['HotelRoomsFoodPackage']['id']), null, __('Are you sure you want to delete # %s?', $hotelRoomsFoodPackage['HotelRoomsFoodPackage']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Hotel Rooms Food Package'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Hotel Rooms'), array('controller' => 'hotel_rooms', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Hotel Room'), array('controller' => 'hotel_rooms', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Food Packages'), array('controller' => 'food_packages', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Food Package'), array('controller' => 'food_packages', 'action' => 'add')); ?> </li>
	</ul>
</div>
