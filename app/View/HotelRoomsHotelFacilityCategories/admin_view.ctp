<div class="hotelRoomsHotelFacilityCategories view">
    <div class="um_box_mid_content_top"><span class="umstyle1"><?php echo __('Hotel Rooms Hotel Facility Category'); ?></span></div>
    <div class="content_mid">
<!--<h2><?php // echo __('Hotel Rooms Hotel Facility Category'); ?></h2>-->
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
</div>
<?php echo $this->element('left_nav');?>