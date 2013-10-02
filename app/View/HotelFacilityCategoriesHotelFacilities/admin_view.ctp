<div class="hotelFacilityCategoriesHotelFacilities view">
     <div class="um_box_mid_content_top"><span class="umstyle1"><?php echo __('Hotel Facility Categories Hotel Facility'); ?></span></div>
    <div class="content_mid">
<!--<h2><?php // echo __('Hotel Facility Categories Hotel Facility'); ?></h2>-->
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($hotelFacilityCategoriesHotelFacility['HotelFacilityCategoriesHotelFacility']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Hotel Facility Category'); ?></dt>
		<dd>
			<?php echo $this->Html->link($hotelFacilityCategoriesHotelFacility['HotelFacilityCategory']['name'], array('controller' => 'hotel_facility_categories', 'action' => 'view', $hotelFacilityCategoriesHotelFacility['HotelFacilityCategory']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Hotel Facility'); ?></dt>
		<dd>
			<?php echo $this->Html->link($hotelFacilityCategoriesHotelFacility['HotelFacility']['name'], array('controller' => 'hotel_facilities', 'action' => 'view', $hotelFacilityCategoriesHotelFacility['HotelFacility']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
</div>
<?php echo $this->element('left_nav');?>