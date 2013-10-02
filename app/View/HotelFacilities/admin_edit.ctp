<div class="hotelFacilities form">
    <div class="um_box_mid_content_top"><span class="umstyle1"><?php echo __('Edit Hotel Facility'); ?></span></div>
    <div class="content_mid">
<?php echo $this->Form->create('HotelFacility'); ?>
	<fieldset>
		<!--<legend><?php // echo __('Edit Hotel Facility'); ?></legend>-->
	<?php
		echo $this->Form->input('id');
		//echo $this->Form->input('site_id');
		echo $this->Form->input('hotel_facility_category_id');
		echo $this->Form->input('name');
		echo $this->Form->input('description');
		echo $this->Form->input('hf_order');
		//echo $this->Form->input('hf_image');
		echo $this->Form->input('hf_image', array('type' => 'file'));		
		echo $this->Form->input('show_at_checkout');
		echo $this->Form->input('price_for_adults');
		echo $this->Form->input('child_age_above');
		echo $this->Form->input('price_above_age');
		echo $this->Form->input('no_extra_charges');
		echo $this->Form->input('depends_upon_bill');
		echo $this->Form->input('meta_title');
		echo $this->Form->input('meta_description');
		echo $this->Form->input('meta_keyword');
		//echo $this->Form->input('status');
		echo $this->Form->label('hotelfacility.status');
		$options = array('1' => 'Active', '0' => 'Inactive');
		$attributes = array('legend' => false);
		echo $this->Form->radio('status', $options, $attributes);		
		
		echo $this->Form->input('HotelFacilityCategory');
		echo $this->Form->input('HotelRoom');
		echo $this->Form->input('Hotel');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
</div>
<?php echo $this->element('left_nav');?>
