<div class="hotelRoomsFoodPackages view">
<h2><?php echo __('Hotel Rooms Food Package'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($hotelRoomsFoodPackage['HotelRoomsFoodPackage']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Hotel Room'); ?></dt>
		<dd>
			<?php echo $this->Html->link($hotelRoomsFoodPackage['HotelRoom']['name'], array('controller' => 'hotel_rooms', 'action' => 'view', $hotelRoomsFoodPackage['HotelRoom']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Food Package'); ?></dt>
		<dd>
			<?php echo $this->Html->link($hotelRoomsFoodPackage['FoodPackage']['title'], array('controller' => 'food_packages', 'action' => 'view', $hotelRoomsFoodPackage['FoodPackage']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Hotel Rooms Food Package'), array('action' => 'edit', $hotelRoomsFoodPackage['HotelRoomsFoodPackage']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Hotel Rooms Food Package'), array('action' => 'delete', $hotelRoomsFoodPackage['HotelRoomsFoodPackage']['id']), null, __('Are you sure you want to delete # %s?', $hotelRoomsFoodPackage['HotelRoomsFoodPackage']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Hotel Rooms Food Packages'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Hotel Rooms Food Package'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Hotel Rooms'), array('controller' => 'hotel_rooms', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Hotel Room'), array('controller' => 'hotel_rooms', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Food Packages'), array('controller' => 'food_packages', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Food Package'), array('controller' => 'food_packages', 'action' => 'add')); ?> </li>
	</ul>
</div>
