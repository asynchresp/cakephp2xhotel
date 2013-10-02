<div class="hotelRoomsFoodMenuTypes form">
    <div class="um_box_mid_content_top"><span class="umstyle1"><?php echo __('Edit Hotel Rooms Food Menu Type'); ?></span></div>
    <div class="content_mid">
<?php echo $this->Form->create('HotelRoomsFoodMenuType'); ?>
	<fieldset>
		<!--<legend><?php // echo __('Edit Hotel Rooms Food Menu Type'); ?></legend>-->
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('hotel_room_id');
		echo $this->Form->input('food_menu_type_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
</div>
<?php echo $this->element('left_nav');?>
