<div class="hotelsStarRatings form">
    <div class="um_box_mid_content_top"><span class="umstyle1"><?php echo __('Edit Hotels Star Rating'); ?></span></div>
        <div class="content_mid">
<?php echo $this->Form->create('HotelsStarRating'); ?>
	<fieldset>
		<!--<legend><?php // echo __('Edit Hotels Star Rating'); ?></legend>-->
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('hotel_id');
		echo $this->Form->input('star_rating_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
</div>
<?php echo $this->element('left_nav');?>