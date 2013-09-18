<div class="hotelFacilities index">
	<h2><?php echo __('Hotel Facilities'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th><?php echo $this->Paginator->sort('hotel_facility_category_id'); ?></th>
			<th><?php echo $this->Paginator->sort('hf_order'); ?></th>
			<th><?php echo $this->Paginator->sort('show_at_checkout'); ?></th>
			<th><?php echo $this->Paginator->sort('status'); ?></th>
			
			
			<?php /* ?><th><?php echo $this->Paginator->sort('site_id'); ?></th>
			<th><?php echo $this->Paginator->sort('description'); ?></th>
			<th><?php echo $this->Paginator->sort('hf_image'); ?></th>
			<th><?php echo $this->Paginator->sort('price_for_adults'); ?></th>
			<th><?php echo $this->Paginator->sort('child_age_above'); ?></th>
			<th><?php echo $this->Paginator->sort('price_above_age'); ?></th>
			<th><?php echo $this->Paginator->sort('no_extra_charges'); ?></th>
			<th><?php echo $this->Paginator->sort('depends_upon_bill'); ?></th>
			<th><?php echo $this->Paginator->sort('meta_title'); ?></th>
			<th><?php echo $this->Paginator->sort('meta_description'); ?></th>
			<th><?php echo $this->Paginator->sort('meta_keyword'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th><?php */ ?>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($hotelFacilities as $hotelFacility): ?>
	<tr>
		<td><?php echo h($hotelFacility['HotelFacility']['id']); ?>&nbsp;</td>
		<td><?php echo h($hotelFacility['HotelFacility']['name']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($hotelFacility['HotelFacilityCategory']['name'], array('controller' => 'hotel_facility_categories', 'action' => 'view', $hotelFacility['HotelFacilityCategory']['id'])); ?>
		</td>
		<td><?php echo h($hotelFacility['HotelFacility']['hf_order']); ?>&nbsp;</td>
		<td><?php if(h($hotelFacility['HotelFacility']['status']) == 1) { echo "Active"; } else { echo "Inactive"; } ?>&nbsp;</td>

		<?php /* ?><td>
			<?php echo $this->Html->link($hotelFacility['Site']['name'], array('controller' => 'sites', 'action' => 'view', $hotelFacility['Site']['id'])); ?>
		</td>
		<td><?php echo h($hotelFacility['HotelFacility']['description']); ?>&nbsp;</td>
		<td><?php echo h($hotelFacility['HotelFacility']['hf_image']); ?>&nbsp;</td>
		<td><?php echo h($hotelFacility['HotelFacility']['show_at_checkout']); ?>&nbsp;</td>
		<td><?php echo h($hotelFacility['HotelFacility']['price_for_adults']); ?>&nbsp;</td>
		<td><?php echo h($hotelFacility['HotelFacility']['child_age_above']); ?>&nbsp;</td>
		<td><?php echo h($hotelFacility['HotelFacility']['price_above_age']); ?>&nbsp;</td>
		<td><?php echo h($hotelFacility['HotelFacility']['no_extra_charges']); ?>&nbsp;</td>
		<td><?php echo h($hotelFacility['HotelFacility']['depends_upon_bill']); ?>&nbsp;</td>
		<td><?php echo h($hotelFacility['HotelFacility']['meta_title']); ?>&nbsp;</td>
		<td><?php echo h($hotelFacility['HotelFacility']['meta_description']); ?>&nbsp;</td>
		<td><?php echo h($hotelFacility['HotelFacility']['meta_keyword']); ?>&nbsp;</td>
		<td><?php echo h($hotelFacility['HotelFacility']['modified']); ?>&nbsp;</td>
		<td><?php echo h($hotelFacility['HotelFacility']['created']); ?>&nbsp;</td><?php */ ?>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $hotelFacility['HotelFacility']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $hotelFacility['HotelFacility']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $hotelFacility['HotelFacility']['id']), null, __('Are you sure you want to delete # %s?', $hotelFacility['HotelFacility']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Hotel Facility'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Sites'), array('controller' => 'sites', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Site'), array('controller' => 'sites', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Hotel Facility Categories'), array('controller' => 'hotel_facility_categories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Hotel Facility Category'), array('controller' => 'hotel_facility_categories', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Hotel Rooms'), array('controller' => 'hotel_rooms', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Hotel Room'), array('controller' => 'hotel_rooms', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Hotels'), array('controller' => 'hotels', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Hotel'), array('controller' => 'hotels', 'action' => 'add')); ?> </li>
	</ul>
</div>
