<div class="hotelsHotelFacilityCategories view">
<h2><?php echo __('Hotels Hotel Facility Category'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($hotelsHotelFacilityCategory['HotelsHotelFacilityCategory']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Hotel'); ?></dt>
		<dd>
			<?php echo $this->Html->link($hotelsHotelFacilityCategory['Hotel']['name'], array('controller' => 'hotels', 'action' => 'view', $hotelsHotelFacilityCategory['Hotel']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Hotel Facility Category'); ?></dt>
		<dd>
			<?php echo $this->Html->link($hotelsHotelFacilityCategory['HotelFacilityCategory']['name'], array('controller' => 'hotel_facility_categories', 'action' => 'view', $hotelsHotelFacilityCategory['HotelFacilityCategory']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Hotels Hotel Facility Category'), array('action' => 'edit', $hotelsHotelFacilityCategory['HotelsHotelFacilityCategory']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Hotels Hotel Facility Category'), array('action' => 'delete', $hotelsHotelFacilityCategory['HotelsHotelFacilityCategory']['id']), null, __('Are you sure you want to delete # %s?', $hotelsHotelFacilityCategory['HotelsHotelFacilityCategory']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Hotels Hotel Facility Categories'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Hotels Hotel Facility Category'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Hotels'), array('controller' => 'hotels', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Hotel'), array('controller' => 'hotels', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Hotel Facility Categories'), array('controller' => 'hotel_facility_categories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Hotel Facility Category'), array('controller' => 'hotel_facility_categories', 'action' => 'add')); ?> </li>
	</ul>
</div>
