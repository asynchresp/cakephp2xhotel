<div class="hotelRoomsTaxes form">
    <div class="um_box_mid_content_top"><span class="umstyle1"><?php echo __('Edit Hotel Rooms Tax'); ?></span></div>
        <div class="content_mid">
<?php echo $this->Form->create('HotelRoomsTax'); ?>
	<fieldset>
		<!--<legend><?php // echo __('Edit Hotel Rooms Tax'); ?></legend>-->
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('hotel_room_id');
		echo $this->Form->input('tax_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
</div>
<?php echo $this->element('left_nav');?>
