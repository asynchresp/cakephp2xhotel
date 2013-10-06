<div class="tourPackagesHotelRooms index">
     <div class="um_box_mid_content_top"><span class="umstyle1"><?php echo __('Tour Packages Hotel Rooms'); ?></span></div>
    <div class="content_mid">
	<!--<h2><?php // echo __('Tour Packages Hotel Rooms'); ?></h2>-->
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('tour_package_id'); ?></th>
			<th><?php echo $this->Paginator->sort('hotel_room_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($tourPackagesHotelRooms as $tourPackagesHotelRoom): ?>
	<tr>
		<td><?php echo h($tourPackagesHotelRoom['TourPackagesHotelRoom']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($tourPackagesHotelRoom['TourPackage']['name'], array('controller' => 'tour_packages', 'action' => 'view', $tourPackagesHotelRoom['TourPackage']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($tourPackagesHotelRoom['HotelRoom']['name'], array('controller' => 'hotel_rooms', 'action' => 'view', $tourPackagesHotelRoom['HotelRoom']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $tourPackagesHotelRoom['TourPackagesHotelRoom']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $tourPackagesHotelRoom['TourPackagesHotelRoom']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $tourPackagesHotelRoom['TourPackagesHotelRoom']['id']), null, __('Are you sure you want to delete # %s?', $tourPackagesHotelRoom['TourPackagesHotelRoom']['id'])); ?>
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
</div>
<?php echo $this->element('left_nav');?>
