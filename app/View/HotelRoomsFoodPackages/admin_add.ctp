<div class="hotelRoomsFoodPackages form">
    <div class="um_box_mid_content_top"><span class="umstyle1"><?php echo __('Add Hotel Rooms Food Package'); ?></span></div>
    <div class="content_mid">
<?php echo $this->Form->create('HotelRoomsFoodPackage'); ?>
	<fieldset>
		<!--<legend><?php // echo __('Add Hotel Rooms Food Package'); ?></legend>-->
	<?php
		echo $this->Form->input('hotel_room_id');
		echo $this->Form->input('food_package_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
</div>
<?php echo $this->element('left_nav');?>
