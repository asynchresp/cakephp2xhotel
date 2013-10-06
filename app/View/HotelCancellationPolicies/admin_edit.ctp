<div class="hotelCancellationPolicies form">
    <div class="um_box_mid_content_top"><span class="umstyle1"><?php echo __('Edit Hotel Cancellation Policy'); ?></span></div>
    <div class="content_mid">
<?php echo $this->Form->create('HotelCancellationPolicy'); ?>
	<fieldset>
		<!--<legend><?php // echo __('Edit Hotel Cancellation Policy'); ?></legend>-->
	<?php
		echo $this->Form->input('id');
		//echo $this->Form->input('site_id');
		echo $this->Form->input('name');
		echo $this->Form->input('description', array('class'=>'ckeditor'));
		echo $this->Form->input('no_before_days');
		echo $this->Form->input('perentage_deducted');
		//echo $this->Form->input('status');
		echo $this->Form->label('hotelcancellationpolicy.status');
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
