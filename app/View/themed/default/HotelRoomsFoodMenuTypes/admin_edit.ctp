<div class="hotelRoomsFoodMenuTypes form">
<?php echo $this->Form->create('HotelRoomsFoodMenuType'); ?>
	<fieldset>
		<legend><?php echo __('Edit Hotel Rooms Food Menu Type'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('hotel_room_id');
		echo $this->Form->input('food_menu_type_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('HotelRoomsFoodMenuType.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('HotelRoomsFoodMenuType.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Hotel Rooms Food Menu Types'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Hotel Rooms'), array('controller' => 'hotel_rooms', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Hotel Room'), array('controller' => 'hotel_rooms', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Food Menu Types'), array('controller' => 'food_menu_types', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Food Menu Type'), array('controller' => 'food_menu_types', 'action' => 'add')); ?> </li>
	</ul>
</div>
