<div class="starRatings form">
    <div class="um_box_mid_content_top"><span class="umstyle1"><?php echo __('Add Star Rating'); ?></span></div>
    <div class="content_mid">
<?php echo $this->Form->create('StarRating'); ?>
	<fieldset>
		<!--<legend><?php // echo __('Add Star Rating'); ?></legend>-->
	<?php
		echo $this->Form->input('name');
		echo $this->Form->input('shortcode');
		//echo $this->Form->input('image');
		echo $this->Form->input('image', array('type' => 'file'));
		
		//echo $this->Form->input('status');
		echo $this->Form->label('starrating.status');
		$options = array('1' => 'Active', '0' => 'Inactive');
		$attributes = array('legend' => false);
		echo $this->Form->radio('status', $options, $attributes);
				
		echo $this->Form->input('Hotel');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
</div>
<?php echo $this->element('left_nav');?>
