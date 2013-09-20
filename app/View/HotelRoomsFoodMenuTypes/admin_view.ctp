<div class="hotelRoomsFoodMenuTypes view">
<h2><?php echo __('Hotel Rooms Food Menu Type'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($hotelRoomsFoodMenuType['HotelRoomsFoodMenuType']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Hotel Room'); ?></dt>
		<dd>
			<?php echo $this->Html->link($hotelRoomsFoodMenuType['HotelRoom']['name'], array('controller' => 'hotel_rooms', 'action' => 'view', $hotelRoomsFoodMenuType['HotelRoom']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Food Menu Type'); ?></dt>
		<dd>
			<?php echo $this->Html->link($hotelRoomsFoodMenuType['FoodMenuType']['name'], array('controller' => 'food_menu_types', 'action' => 'view', $hotelRoomsFoodMenuType['FoodMenuType']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Hotel Rooms Food Menu Type'), array('action' => 'edit', $hotelRoomsFoodMenuType['HotelRoomsFoodMenuType']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Hotel Rooms Food Menu Type'), array('action' => 'delete', $hotelRoomsFoodMenuType['HotelRoomsFoodMenuType']['id']), null, __('Are you sure you want to delete # %s?', $hotelRoomsFoodMenuType['HotelRoomsFoodMenuType']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Hotel Rooms Food Menu Types'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Hotel Rooms Food Menu Type'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Hotel Rooms'), array('controller' => 'hotel_rooms', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Hotel Room'), array('controller' => 'hotel_rooms', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Food Menu Types'), array('controller' => 'food_menu_types', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Food Menu Type'), array('controller' => 'food_menu_types', 'action' => 'add')); ?> </li>
	</ul>
</div>
