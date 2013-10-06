<div class="couponsHotelRooms form">
    <div class="um_box_mid_content_top"><span class="umstyle1"><?php echo __('Add Coupons Hotel Room'); ?></span></div>
    <div class="content_mid">
<?php echo $this->Form->create('CouponsHotelRoom'); ?>
	<fieldset>
		<!--<legend><?php // echo __('Add Coupons Hotel Room'); ?></legend>-->
	<?php
		echo $this->Form->input('coupon_id');
		echo $this->Form->input('hotel_room_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
</div>
<?php echo $this->element('left_nav');?>
