<div class="hotelRoomsHotelFacilityCategories view">
<h2><?php echo __('Hotel Rooms Hotel Facility Category'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($hotelRoomsHotelFacilityCategory['HotelRoomsHotelFacilityCategory']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Hotel Room'); ?></dt>
		<dd>
			<?php echo $this->Html->link($hotelRoomsHotelFacilityCategory['HotelRoom']['name'], array('controller' => 'hotel_rooms', 'action' => 'view', $hotelRoomsHotelFacilityCategory['HotelRoom']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Hotel Facility Category'); ?></dt>
		<dd>
			<?php echo $this->Html->link($hotelRoomsHotelFacilityCategory['HotelFacilityCategory']['name'], array('controller' => 'hotel_facility_categories', 'action' => 'view', $hotelRoomsHotelFacilityCategory['HotelFacilityCategory']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Hotel Rooms Hotel Facility Category'), array('action' => 'edit', $hotelRoomsHotelFacilityCategory['HotelRoomsHotelFacilityCategory']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Hotel Rooms Hotel Facility Category'), array('action' => 'delete', $hotelRoomsHotelFacilityCategory['HotelRoomsHotelFacilityCategory']['id']), null, __('Are you sure you want to delete # %s?', $hotelRoomsHotelFacilityCategory['HotelRoomsHotelFacilityCategory']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Hotel Rooms Hotel Facility Categories'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Hotel Rooms Hotel Facility Category'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Hotel Rooms'), array('controller' => 'hotel_rooms', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Hotel Room'), array('controller' => 'hotel_rooms', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Hotel Facility Categories'), array('controller' => 'hotel_facility_categories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Hotel Facility Category'), array('controller' => 'hotel_facility_categories', 'action' => 'add')); ?> </li>
	</ul>
</div>
