<div class="coupons form">
<?php echo $this->Form->create('Coupon'); ?>
	<fieldset>
		<legend><?php echo __('Add Coupon'); ?></legend>
	<?php
		//echo $this->Form->input('site_id');
		echo $this->Form->input('hotel_id');
		echo $this->Form->input('room_type_id');
		echo $this->Form->input('hotel_room_id');
		echo $this->Form->input('name');
		echo $this->Form->input('description');
		echo $this->Form->input('coupon_code');
		echo $this->Form->input('coupon_st_date');
		echo $this->Form->input('coupon_expiry_date');
		echo $this->Form->input('min_night');
		echo $this->Form->input('max_guest');
		echo $this->Form->input('discount');
		echo $this->Form->input('meta_title');
		echo $this->Form->input('meta_description');
		echo $this->Form->input('meta_keyword');
		//echo $this->Form->input('status');
		echo $this->Form->label('coupon.status');
		$options = array('1' => 'Active', '0' => 'Inactive');
		$attributes = array('legend' => false);
		echo $this->Form->radio('status', $options, $attributes);				
		echo $this->Form->input('HotelRoom');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Coupons'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Sites'), array('controller' => 'sites', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Site'), array('controller' => 'sites', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Hotels'), array('controller' => 'hotels', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Hotel'), array('controller' => 'hotels', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Room Types'), array('controller' => 'room_types', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Room Type'), array('controller' => 'room_types', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Hotel Rooms'), array('controller' => 'hotel_rooms', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Hotel Room'), array('controller' => 'hotel_rooms', 'action' => 'add')); ?> </li>
	</ul>
</div>
