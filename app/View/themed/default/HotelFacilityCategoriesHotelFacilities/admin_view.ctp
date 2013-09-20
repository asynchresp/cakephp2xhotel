<div class="hotelFacilityCategoriesHotelFacilities view">
<h2><?php echo __('Hotel Facility Categories Hotel Facility'); ?></h2>
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
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Hotel Facility Categories Hotel Facility'), array('action' => 'edit', $hotelFacilityCategoriesHotelFacility['HotelFacilityCategoriesHotelFacility']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Hotel Facility Categories Hotel Facility'), array('action' => 'delete', $hotelFacilityCategoriesHotelFacility['HotelFacilityCategoriesHotelFacility']['id']), null, __('Are you sure you want to delete # %s?', $hotelFacilityCategoriesHotelFacility['HotelFacilityCategoriesHotelFacility']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Hotel Facility Categories Hotel Facilities'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Hotel Facility Categories Hotel Facility'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Hotel Facility Categories'), array('controller' => 'hotel_facility_categories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Hotel Facility Category'), array('controller' => 'hotel_facility_categories', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Hotel Facilities'), array('controller' => 'hotel_facilities', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Hotel Facility'), array('controller' => 'hotel_facilities', 'action' => 'add')); ?> </li>
	</ul>
</div>
