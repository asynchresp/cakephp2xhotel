<div class="hotelRoomsHotelFacilityCategories form">
<?php echo $this->Form->create('HotelRoomsHotelFacilityCategory'); ?>
	<fieldset>
		<legend><?php echo __('Edit Hotel Rooms Hotel Facility Category'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('hotel_room_id');
		echo $this->Form->input('hotel_facility_category_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('HotelRoomsHotelFacilityCategory.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('HotelRoomsHotelFacilityCategory.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Hotel Rooms Hotel Facility Categories'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Hotel Rooms'), array('controller' => 'hotel_rooms', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Hotel Room'), array('controller' => 'hotel_rooms', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Hotel Facility Categories'), array('controller' => 'hotel_facility_categories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Hotel Facility Category'), array('controller' => 'hotel_facility_categories', 'action' => 'add')); ?> </li>
	</ul>
</div>
