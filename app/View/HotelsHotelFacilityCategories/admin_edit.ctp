<div class="hotelsHotelFacilityCategories form">
<?php echo $this->Form->create('HotelsHotelFacilityCategory'); ?>
	<fieldset>
		<legend><?php echo __('Edit Hotels Hotel Facility Category'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('hotel_id');
		echo $this->Form->input('hotel_facility_category_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('HotelsHotelFacilityCategory.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('HotelsHotelFacilityCategory.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Hotels Hotel Facility Categories'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Hotels'), array('controller' => 'hotels', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Hotel'), array('controller' => 'hotels', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Hotel Facility Categories'), array('controller' => 'hotel_facility_categories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Hotel Facility Category'), array('controller' => 'hotel_facility_categories', 'action' => 'add')); ?> </li>
	</ul>
</div>
