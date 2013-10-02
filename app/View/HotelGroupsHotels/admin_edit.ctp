<div class="hotelGroupsHotels form">
    <div class="um_box_mid_content_top"><span class="umstyle1"><?php echo __('Edit Hotel Groups Hotel'); ?></span></div>
    <div class="content_mid">
<?php echo $this->Form->create('HotelGroupsHotel'); ?>
	<fieldset>
		<!--<legend><?php // echo __('Edit Hotel Groups Hotel'); ?></legend>-->
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('hotel_group_id');
		echo $this->Form->input('hotel_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
</div>
<?php echo $this->element('left_nav');?>
