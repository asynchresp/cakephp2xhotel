<div class="hotelRoomsHotelFacilities view">
<h2><?php echo __('Hotel Rooms Hotel Facility'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($hotelRoomsHotelFacility['HotelRoomsHotelFacility']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Hotel Room'); ?></dt>
		<dd>
			<?php echo $this->Html->link($hotelRoomsHotelFacility['HotelRoom']['name'], array('controller' => 'hotel_rooms', 'action' => 'view', $hotelRoomsHotelFacility['HotelRoom']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Hotel Facility'); ?></dt>
		<dd>
			<?php echo $this->Html->link($hotelRoomsHotelFacility['HotelFacility']['name'], array('controller' => 'hotel_facilities', 'action' => 'view', $hotelRoomsHotelFacility['HotelFacility']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Hotel Rooms Hotel Facility'), array('action' => 'edit', $hotelRoomsHotelFacility['HotelRoomsHotelFacility']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Hotel Rooms Hotel Facility'), array('action' => 'delete', $hotelRoomsHotelFacility['HotelRoomsHotelFacility']['id']), null, __('Are you sure you want to delete # %s?', $hotelRoomsHotelFacility['HotelRoomsHotelFacility']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Hotel Rooms Hotel Facilities'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Hotel Rooms Hotel Facility'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Hotel Rooms'), array('controller' => 'hotel_rooms', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Hotel Room'), array('controller' => 'hotel_rooms', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Hotel Facilities'), array('controller' => 'hotel_facilities', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Hotel Facility'), array('controller' => 'hotel_facilities', 'action' => 'add')); ?> </li>
	</ul>
</div>
