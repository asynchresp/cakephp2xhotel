<div class="hotelFacilityCategoriesHotelFacilities form">
    <div class="um_box_mid_content_top"><span class="umstyle1"><?php echo __('Add Hotel Facility Categories Hotel Facility'); ?></span></div>
    <div class="content_mid">
<?php echo $this->Form->create('HotelFacilityCategoriesHotelFacility'); ?>
	<fieldset>
		<legend><?php echo __('Add Hotel Facility Categories Hotel Facility'); ?></legend>
	<?php
		echo $this->Form->input('hotel_facility_category_id');
		echo $this->Form->input('hotel_facility_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
</div>
<?php echo $this->element('left_nav');?>