<div class="hotelRoomsTaxes view">
<h2><?php echo __('Hotel Rooms Tax'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($hotelRoomsTax['HotelRoomsTax']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Hotel Room'); ?></dt>
		<dd>
			<?php echo $this->Html->link($hotelRoomsTax['HotelRoom']['name'], array('controller' => 'hotel_rooms', 'action' => 'view', $hotelRoomsTax['HotelRoom']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tax'); ?></dt>
		<dd>
			<?php echo $this->Html->link($hotelRoomsTax['Tax']['name'], array('controller' => 'taxes', 'action' => 'view', $hotelRoomsTax['Tax']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Hotel Rooms Tax'), array('action' => 'edit', $hotelRoomsTax['HotelRoomsTax']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Hotel Rooms Tax'), array('action' => 'delete', $hotelRoomsTax['HotelRoomsTax']['id']), null, __('Are you sure you want to delete # %s?', $hotelRoomsTax['HotelRoomsTax']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Hotel Rooms Taxes'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Hotel Rooms Tax'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Hotel Rooms'), array('controller' => 'hotel_rooms', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Hotel Room'), array('controller' => 'hotel_rooms', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Taxes'), array('controller' => 'taxes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tax'), array('controller' => 'taxes', 'action' => 'add')); ?> </li>
	</ul>
</div>
