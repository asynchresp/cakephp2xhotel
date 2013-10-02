<div class="hotelsPointNearByHotels form">
    <div class="um_box_mid_content_top"><span class="umstyle1"><?php echo __('Add Hotels Point Near By Hotel'); ?></span></div>
        <div class="content_mid">
<?php echo $this->Form->create('HotelsPointNearByHotel'); ?>
	<fieldset>
		<!--<legend><?php // echo __('Add Hotels Point Near By Hotel'); ?></legend>-->
	<?php
		echo $this->Form->input('hotel_id');
		echo $this->Form->input('point_near_by_hotel_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
</div>
<?php echo $this->element('left_nav');?>