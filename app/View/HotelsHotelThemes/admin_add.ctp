<div class="hotelsHotelThemes form">
    <div class="um_box_mid_content_top"><span class="umstyle1"><?php echo __('Add Hotels Hotel Theme'); ?></span></div>
        <div class="content_mid">
<?php echo $this->Form->create('HotelsHotelTheme'); ?>
	<fieldset>
		<!--<legend><?php // echo __('Add Hotels Hotel Theme'); ?></legend>-->
	<?php
		echo $this->Form->input('hotel_id');
		echo $this->Form->input('hotel_theme_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
</div>
<?php echo $this->element('left_nav');?>