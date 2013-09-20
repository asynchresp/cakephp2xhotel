<div class="tourPackagesHotelRooms view">
<h2><?php echo __('Tour Packages Hotel Room'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($tourPackagesHotelRoom['TourPackagesHotelRoom']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tour Package'); ?></dt>
		<dd>
			<?php echo $this->Html->link($tourPackagesHotelRoom['TourPackage']['name'], array('controller' => 'tour_packages', 'action' => 'view', $tourPackagesHotelRoom['TourPackage']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Hotel Room'); ?></dt>
		<dd>
			<?php echo $this->Html->link($tourPackagesHotelRoom['HotelRoom']['name'], array('controller' => 'hotel_rooms', 'action' => 'view', $tourPackagesHotelRoom['HotelRoom']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Tour Packages Hotel Room'), array('action' => 'edit', $tourPackagesHotelRoom['TourPackagesHotelRoom']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Tour Packages Hotel Room'), array('action' => 'delete', $tourPackagesHotelRoom['TourPackagesHotelRoom']['id']), null, __('Are you sure you want to delete # %s?', $tourPackagesHotelRoom['TourPackagesHotelRoom']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Tour Packages Hotel Rooms'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tour Packages Hotel Room'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Tour Packages'), array('controller' => 'tour_packages', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tour Package'), array('controller' => 'tour_packages', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Hotel Rooms'), array('controller' => 'hotel_rooms', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Hotel Room'), array('controller' => 'hotel_rooms', 'action' => 'add')); ?> </li>
	</ul>
</div>
