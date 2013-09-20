<div class="couponsHotelRooms view">
<h2><?php echo __('Coupons Hotel Room'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($couponsHotelRoom['CouponsHotelRoom']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Coupon'); ?></dt>
		<dd>
			<?php echo $this->Html->link($couponsHotelRoom['Coupon']['name'], array('controller' => 'coupons', 'action' => 'view', $couponsHotelRoom['Coupon']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Hotel Room'); ?></dt>
		<dd>
			<?php echo $this->Html->link($couponsHotelRoom['HotelRoom']['name'], array('controller' => 'hotel_rooms', 'action' => 'view', $couponsHotelRoom['HotelRoom']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Coupons Hotel Room'), array('action' => 'edit', $couponsHotelRoom['CouponsHotelRoom']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Coupons Hotel Room'), array('action' => 'delete', $couponsHotelRoom['CouponsHotelRoom']['id']), null, __('Are you sure you want to delete # %s?', $couponsHotelRoom['CouponsHotelRoom']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Coupons Hotel Rooms'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Coupons Hotel Room'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Coupons'), array('controller' => 'coupons', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Coupon'), array('controller' => 'coupons', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Hotel Rooms'), array('controller' => 'hotel_rooms', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Hotel Room'), array('controller' => 'hotel_rooms', 'action' => 'add')); ?> </li>
	</ul>
</div>
