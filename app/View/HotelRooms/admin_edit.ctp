<div class="hotelRooms form">
    <div class="um_box_mid_content_top"><span class="umstyle1"><?php echo __('Edit Hotel Room'); ?></span></div>
    <div class="content_mid">
<?php echo $this->Form->create('HotelRoom'); ?>
	<fieldset>
		<!--<legend><?php // echo __('Edit Hotel Room'); ?></legend>-->
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('country_id');
		echo $this->Form->input('state_id');
		echo $this->Form->input('city_id');
		echo $this->Form->input('hotel_id');
		echo $this->Form->input('room_type_id');
		echo $this->Form->input('inventory');
		echo $this->Form->input('name');
		echo $this->Form->input('short_description');
		echo $this->Form->input('long_description');
		echo $this->Form->input('max_adults');
		echo $this->Form->input('max_childs');
		echo $this->Form->input('extra_guest_occupancy');
		echo $this->Form->input('no_of_beds');
		echo $this->Form->input('room_order');
		echo $this->Form->input('room_image1');
		echo $this->Form->input('room_image2');
		echo $this->Form->input('room_image3');
		echo $this->Form->input('room_image4');
		echo $this->Form->input('room_image5');
		echo $this->Form->input('room_video');
		echo $this->Form->input('food_menu_type_id');
		echo $this->Form->input('food_package_id');
		echo $this->Form->input('hotel_facility_category_id');
		echo $this->Form->input('hotel_facility_id');
		echo $this->Form->input('room_price');
		echo $this->Form->input('pricing_tax_status');
		echo $this->Form->input('tax_id');
		echo $this->Form->input('additional_guest');
		echo $this->Form->input('child_age_below1');
		echo $this->Form->input('price_age_below1');
		echo $this->Form->input('child_age_below2');
		echo $this->Form->input('price_age_below2');
		echo $this->Form->input('child_age_below3');
		echo $this->Form->input('price_age_below3');
		echo $this->Form->input('child_above_age1');
		echo $this->Form->input('price_above_age1');
		echo $this->Form->input('child_above_age2');
		echo $this->Form->input('price_above_age2');
		echo $this->Form->input('child_above_age3');
		echo $this->Form->input('price_above_age3');
		echo $this->Form->input('commision');
		echo $this->Form->input('special_price');
		echo $this->Form->input('special_price_earning');
		echo $this->Form->input('commision_customer');
		echo $this->Form->input('commision_customer_earining');
		echo $this->Form->input('commision_agent');
		echo $this->Form->input('commision_agent_earining');
		echo $this->Form->input('meta_title');
		echo $this->Form->input('meta_description');
		echo $this->Form->input('meta_keyword');
		echo $this->Form->input('status');
		echo $this->Form->input('Coupon');
		echo $this->Form->input('FoodMenuType');
		echo $this->Form->input('FoodPackage');
		echo $this->Form->input('HotelFacility');
		echo $this->Form->input('HotelFacilityCategory');
		echo $this->Form->input('Tax');
		echo $this->Form->input('TourPackage');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
</div>
<?php echo $this->element('left_nav');?>