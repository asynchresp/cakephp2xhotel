<div class="hotelRoomsHotelFacilities view">
    <div class="um_box_mid_content_top"><span class="umstyle1"><?php echo __('Hotel Rooms Hotel Facility'); ?></span></div>
    <div class="content_mid">
<!--<h2><?php // echo __('Hotel Rooms Hotel Facility'); ?></h2>-->
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
</div>
<?php echo $this->element('left_nav');?>