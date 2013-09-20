<div class="hotelFacilityCategoriesHotelFacilities form">
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
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Hotel Facility Categories Hotel Facilities'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Hotel Facility Categories'), array('controller' => 'hotel_facility_categories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Hotel Facility Category'), array('controller' => 'hotel_facility_categories', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Hotel Facilities'), array('controller' => 'hotel_facilities', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Hotel Facility'), array('controller' => 'hotel_facilities', 'action' => 'add')); ?> </li>
	</ul>
</div>
