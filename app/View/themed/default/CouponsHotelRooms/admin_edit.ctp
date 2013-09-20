<div class="couponsHotelRooms form">
<?php echo $this->Form->create('CouponsHotelRoom'); ?>
	<fieldset>
		<legend><?php echo __('Edit Coupons Hotel Room'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('coupon_id');
		echo $this->Form->input('hotel_room_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('CouponsHotelRoom.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('CouponsHotelRoom.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Coupons Hotel Rooms'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Coupons'), array('controller' => 'coupons', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Coupon'), array('controller' => 'coupons', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Hotel Rooms'), array('controller' => 'hotel_rooms', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Hotel Room'), array('controller' => 'hotel_rooms', 'action' => 'add')); ?> </li>
	</ul>
</div>
