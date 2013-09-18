<div class="hotelRoomsFoodPackages form">
<?php echo $this->Form->create('HotelRoomsFoodPackage'); ?>
	<fieldset>
		<legend><?php echo __('Edit Hotel Rooms Food Package'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('hotel_room_id');
		echo $this->Form->input('food_package_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('HotelRoomsFoodPackage.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('HotelRoomsFoodPackage.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Hotel Rooms Food Packages'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Hotel Rooms'), array('controller' => 'hotel_rooms', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Hotel Room'), array('controller' => 'hotel_rooms', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Food Packages'), array('controller' => 'food_packages', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Food Package'), array('controller' => 'food_packages', 'action' => 'add')); ?> </li>
	</ul>
</div>
