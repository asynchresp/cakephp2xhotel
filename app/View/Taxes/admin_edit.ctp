<div class="taxes form">
    <div class="um_box_mid_content_top"><span class="umstyle1"><?php echo __('Edit Tax'); ?></span></div>
    <div class="content_mid">
<?php echo $this->Form->create('Tax'); ?>
	<fieldset>
		<!--<legend><?php // echo __('Edit Tax'); ?></legend>-->
	<?php
		echo $this->Form->input('id');
		//echo $this->Form->input('site_id');
		echo $this->Form->input('country_id');
		echo $this->Form->input('state_id');
		echo $this->Form->input('city_id');
		echo $this->Form->input('name');
		echo $this->Form->input('description');
		echo $this->Form->input('tax_percentage');
		//echo $this->Form->input('status');
		echo $this->Form->label('tax.status');
		$options = array('1' => 'Active', '0' => 'Inactive');
		$attributes = array('legend' => false);
		echo $this->Form->radio('status', $options, $attributes);
		
		echo $this->Form->input('HotelRoom');
		echo $this->Form->input('Hotel');
		echo $this->Form->input('TourPackage');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
</div>
<?php echo $this->element('left_nav');?>