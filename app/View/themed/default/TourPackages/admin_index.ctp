<div class="tourPackages index">
	<h2><?php echo __('Tour Packages'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('site_id'); ?></th>
			<th><?php echo $this->Paginator->sort('hotel_id'); ?></th>
			<th><?php echo $this->Paginator->sort('room_type_id'); ?></th>
			<th><?php echo $this->Paginator->sort('hotel_room_id'); ?></th>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th><?php echo $this->Paginator->sort('short_description'); ?></th>
			<th><?php echo $this->Paginator->sort('long_description'); ?></th>
			<th><?php echo $this->Paginator->sort('tp_order'); ?></th>
			<th><?php echo $this->Paginator->sort('no_person'); ?></th>
			<th><?php echo $this->Paginator->sort('activity_type_id'); ?></th>
			<th><?php echo $this->Paginator->sort('st_pt_state'); ?></th>
			<th><?php echo $this->Paginator->sort('st_pt_city'); ?></th>
			<th><?php echo $this->Paginator->sort('st_pt_area'); ?></th>
			<th><?php echo $this->Paginator->sort('end_pt_state'); ?></th>
			<th><?php echo $this->Paginator->sort('end_pt_city'); ?></th>
			<th><?php echo $this->Paginator->sort('end_pt_area'); ?></th>
			<th><?php echo $this->Paginator->sort('popular_point_id'); ?></th>
			<th><?php echo $this->Paginator->sort('st_date'); ?></th>
			<th><?php echo $this->Paginator->sort('end_date'); ?></th>
			<th><?php echo $this->Paginator->sort('price_per_person'); ?></th>
			<th><?php echo $this->Paginator->sort('pricing_tax_status'); ?></th>
			<th><?php echo $this->Paginator->sort('tax_id'); ?></th>
			<th><?php echo $this->Paginator->sort('child_age_below1'); ?></th>
			<th><?php echo $this->Paginator->sort('price_age_below1'); ?></th>
			<th><?php echo $this->Paginator->sort('child_age_below2'); ?></th>
			<th><?php echo $this->Paginator->sort('price_age_below2'); ?></th>
			<th><?php echo $this->Paginator->sort('child_age_below3'); ?></th>
			<th><?php echo $this->Paginator->sort('price_age_below3'); ?></th>
			<th><?php echo $this->Paginator->sort('child_above_age1'); ?></th>
			<th><?php echo $this->Paginator->sort('price_above_age1'); ?></th>
			<th><?php echo $this->Paginator->sort('child_above_age2'); ?></th>
			<th><?php echo $this->Paginator->sort('price_above_age2'); ?></th>
			<th><?php echo $this->Paginator->sort('child_above_age3'); ?></th>
			<th><?php echo $this->Paginator->sort('price_above_age3'); ?></th>
			<th><?php echo $this->Paginator->sort('commision'); ?></th>
			<th><?php echo $this->Paginator->sort('special_price'); ?></th>
			<th><?php echo $this->Paginator->sort('special_price_earning'); ?></th>
			<th><?php echo $this->Paginator->sort('commision_customer'); ?></th>
			<th><?php echo $this->Paginator->sort('commision_customer_earining'); ?></th>
			<th><?php echo $this->Paginator->sort('commision_agent'); ?></th>
			<th><?php echo $this->Paginator->sort('commision_agent_earining'); ?></th>
			<th><?php echo $this->Paginator->sort('tp_keyword'); ?></th>
			<th><?php echo $this->Paginator->sort('meta_title'); ?></th>
			<th><?php echo $this->Paginator->sort('meta_description'); ?></th>
			<th><?php echo $this->Paginator->sort('meta_keyword'); ?></th>
			<th><?php echo $this->Paginator->sort('status'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($tourPackages as $tourPackage): ?>
	<tr>
		<td><?php echo h($tourPackage['TourPackage']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($tourPackage['Site']['name'], array('controller' => 'sites', 'action' => 'view', $tourPackage['Site']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($tourPackage['Hotel']['name'], array('controller' => 'hotels', 'action' => 'view', $tourPackage['Hotel']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($tourPackage['RoomType']['name'], array('controller' => 'room_types', 'action' => 'view', $tourPackage['RoomType']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($tourPackage['HotelRoom']['name'], array('controller' => 'hotel_rooms', 'action' => 'view', $tourPackage['HotelRoom']['id'])); ?>
		</td>
		<td><?php echo h($tourPackage['TourPackage']['name']); ?>&nbsp;</td>
		<td><?php echo h($tourPackage['TourPackage']['short_description']); ?>&nbsp;</td>
		<td><?php echo h($tourPackage['TourPackage']['long_description']); ?>&nbsp;</td>
		<td><?php echo h($tourPackage['TourPackage']['tp_order']); ?>&nbsp;</td>
		<td><?php echo h($tourPackage['TourPackage']['no_person']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($tourPackage['ActivityType']['name'], array('controller' => 'activity_types', 'action' => 'view', $tourPackage['ActivityType']['id'])); ?>
		</td>
		<td><?php echo h($tourPackage['TourPackage']['st_pt_state']); ?>&nbsp;</td>
		<td><?php echo h($tourPackage['TourPackage']['st_pt_city']); ?>&nbsp;</td>
		<td><?php echo h($tourPackage['TourPackage']['st_pt_area']); ?>&nbsp;</td>
		<td><?php echo h($tourPackage['TourPackage']['end_pt_state']); ?>&nbsp;</td>
		<td><?php echo h($tourPackage['TourPackage']['end_pt_city']); ?>&nbsp;</td>
		<td><?php echo h($tourPackage['TourPackage']['end_pt_area']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($tourPackage['PopularPoint']['name'], array('controller' => 'popular_points', 'action' => 'view', $tourPackage['PopularPoint']['id'])); ?>
		</td>
		<td><?php echo h($tourPackage['TourPackage']['st_date']); ?>&nbsp;</td>
		<td><?php echo h($tourPackage['TourPackage']['end_date']); ?>&nbsp;</td>
		<td><?php echo h($tourPackage['TourPackage']['price_per_person']); ?>&nbsp;</td>
		<td><?php echo h($tourPackage['TourPackage']['pricing_tax_status']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($tourPackage['Tax']['name'], array('controller' => 'taxes', 'action' => 'view', $tourPackage['Tax']['id'])); ?>
		</td>
		<td><?php echo h($tourPackage['TourPackage']['child_age_below1']); ?>&nbsp;</td>
		<td><?php echo h($tourPackage['TourPackage']['price_age_below1']); ?>&nbsp;</td>
		<td><?php echo h($tourPackage['TourPackage']['child_age_below2']); ?>&nbsp;</td>
		<td><?php echo h($tourPackage['TourPackage']['price_age_below2']); ?>&nbsp;</td>
		<td><?php echo h($tourPackage['TourPackage']['child_age_below3']); ?>&nbsp;</td>
		<td><?php echo h($tourPackage['TourPackage']['price_age_below3']); ?>&nbsp;</td>
		<td><?php echo h($tourPackage['TourPackage']['child_above_age1']); ?>&nbsp;</td>
		<td><?php echo h($tourPackage['TourPackage']['price_above_age1']); ?>&nbsp;</td>
		<td><?php echo h($tourPackage['TourPackage']['child_above_age2']); ?>&nbsp;</td>
		<td><?php echo h($tourPackage['TourPackage']['price_above_age2']); ?>&nbsp;</td>
		<td><?php echo h($tourPackage['TourPackage']['child_above_age3']); ?>&nbsp;</td>
		<td><?php echo h($tourPackage['TourPackage']['price_above_age3']); ?>&nbsp;</td>
		<td><?php echo h($tourPackage['TourPackage']['commision']); ?>&nbsp;</td>
		<td><?php echo h($tourPackage['TourPackage']['special_price']); ?>&nbsp;</td>
		<td><?php echo h($tourPackage['TourPackage']['special_price_earning']); ?>&nbsp;</td>
		<td><?php echo h($tourPackage['TourPackage']['commision_customer']); ?>&nbsp;</td>
		<td><?php echo h($tourPackage['TourPackage']['commision_customer_earining']); ?>&nbsp;</td>
		<td><?php echo h($tourPackage['TourPackage']['commision_agent']); ?>&nbsp;</td>
		<td><?php echo h($tourPackage['TourPackage']['commision_agent_earining']); ?>&nbsp;</td>
		<td><?php echo h($tourPackage['TourPackage']['tp_keyword']); ?>&nbsp;</td>
		<td><?php echo h($tourPackage['TourPackage']['meta_title']); ?>&nbsp;</td>
		<td><?php echo h($tourPackage['TourPackage']['meta_description']); ?>&nbsp;</td>
		<td><?php echo h($tourPackage['TourPackage']['meta_keyword']); ?>&nbsp;</td>
		<td><?php echo h($tourPackage['TourPackage']['status']); ?>&nbsp;</td>
		<td><?php echo h($tourPackage['TourPackage']['modified']); ?>&nbsp;</td>
		<td><?php echo h($tourPackage['TourPackage']['created']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $tourPackage['TourPackage']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $tourPackage['TourPackage']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $tourPackage['TourPackage']['id']), null, __('Are you sure you want to delete # %s?', $tourPackage['TourPackage']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Tour Package'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Sites'), array('controller' => 'sites', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Site'), array('controller' => 'sites', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Hotels'), array('controller' => 'hotels', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Hotel'), array('controller' => 'hotels', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Room Types'), array('controller' => 'room_types', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Room Type'), array('controller' => 'room_types', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Hotel Rooms'), array('controller' => 'hotel_rooms', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Hotel Room'), array('controller' => 'hotel_rooms', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Activity Types'), array('controller' => 'activity_types', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Activity Type'), array('controller' => 'activity_types', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Popular Points'), array('controller' => 'popular_points', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Popular Point'), array('controller' => 'popular_points', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Taxes'), array('controller' => 'taxes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tax'), array('controller' => 'taxes', 'action' => 'add')); ?> </li>
	</ul>
</div>
