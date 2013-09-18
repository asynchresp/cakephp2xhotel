<div class="hotelRoomsHotelFacilities form">
<?php echo $this->Form->create('HotelRoomsHotelFacility'); ?>
	<fieldset>
		<legend><?php echo __('Edit Hotel Rooms Hotel Facility'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('hotel_room_id');
		echo $this->Form->input('hotel_facility_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('HotelRoomsHotelFacility.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('HotelRoomsHotelFacility.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Hotel Rooms Hotel Facilities'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Hotel Rooms'), array('controller' => 'hotel_rooms', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Hotel Room'), array('controller' => 'hotel_rooms', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Hotel Facilities'), array('controller' => 'hotel_facilities', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Hotel Facility'), array('controller' => 'hotel_facilities', 'action' => 'add')); ?> </li>
	</ul>
</div>
