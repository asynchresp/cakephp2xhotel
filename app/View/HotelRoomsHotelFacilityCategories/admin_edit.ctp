<div class="hotelRoomsHotelFacilityCategories form">
    <div class="um_box_mid_content_top"><span class="umstyle1"><?php echo __('Edit Hotel Rooms Hotel Facility Category'); ?></span></div>
    <div class="content_mid">
<?php echo $this->Form->create('HotelRoomsHotelFacilityCategory'); ?>
	<fieldset>
		<!--<legend><?php // echo __('Edit Hotel Rooms Hotel Facility Category'); ?></legend>-->
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('hotel_room_id');
		echo $this->Form->input('hotel_facility_category_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
</div>
<?php echo $this->element('left_nav');?>
