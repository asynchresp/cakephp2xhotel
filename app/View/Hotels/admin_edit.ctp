<div class="hotels form">
     <div class="um_box_mid_content_top"><span class="umstyle1"><?php echo __('Edit Hotel'); ?></span></div>
        <div class="content_mid">
<?php echo $this->Form->create('Hotel'); ?>
	<fieldset>
		<!--<legend><?php // echo __('Edit Hotel'); ?></legend>-->
	<?php
		//echo $this->Form->input('id');
		echo $this->Form->input('site_id');
		echo $this->Form->input('hotel_group_id');
		echo $this->Form->input('name');
		echo $this->Form->input('short_description');
		echo $this->Form->input('long_description');
		echo $this->Form->input('hotel_logo');
		echo $this->Form->input('hotel_order');
		echo $this->Form->input('point_near_by_hotel');
		echo $this->Form->input('hotel_type_id');
		echo $this->Form->input('hotel_theme_id');
		echo $this->Form->input('area');
		echo $this->Form->input('address_line1');
		echo $this->Form->input('address_line2');
		echo $this->Form->input('country_id');
		echo $this->Form->input('state_id');
		echo $this->Form->input('city_id');
		echo $this->Form->input('latitude');
		echo $this->Form->input('longitude');
		echo $this->Form->input('star_rating_id');
		echo $this->Form->input('checkindatetime');
		echo $this->Form->input('checkoutdatetime');
		echo $this->Form->input('hotel_facility_category_id');
		echo $this->Form->input('hotel_facility_id');
		/*echo $this->Form->input('hotel_image');
		echo $this->Form->input('hotel_video');*/
		echo $this->Form->input('hotel_image', array('type' => 'file'));
		echo $this->Form->input('hotel_video', array('type' => 'file'));
		
		echo $this->Form->input('pricing_tax_status');
		echo $this->Form->input('hotel_tax');
		echo $this->Form->input('meta_title');
		echo $this->Form->input('meta_description');
		echo $this->Form->input('meta_keyword');
		echo $this->Form->input('main_keyword_tag');
		echo $this->Form->input('nearby_location_tag');
		echo $this->Form->input('hotel_cancellation_policy_id');
		echo $this->Form->input('hotel_modification_policy_id');
		//echo $this->Form->input('status');
		echo $this->Form->label('hotel.status');
		$options = array('1' => 'Active', '0' => 'Inactive');
		$attributes = array('legend' => false);
		echo $this->Form->radio('status', $options, $attributes);
				
		echo $this->Form->input('HotelGroup');
		echo $this->Form->input('HotelCancellationPolicy');
		echo $this->Form->input('HotelFacility');
		echo $this->Form->input('HotelFacilityCategory');
		echo $this->Form->input('HotelModificationPolicy');
		echo $this->Form->input('HotelTheme');
		echo $this->Form->input('PointNearByHotel');
		echo $this->Form->input('StarRating');
		echo $this->Form->input('Tax');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
</div>
<?php echo $this->element('left_nav');?>
