<div class="hotelGroupsHotels form">
<?php echo $this->Form->create('HotelGroupsHotel'); ?>
	<fieldset>
		<legend><?php echo __('Edit Hotel Groups Hotel'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('hotel_group_id');
		echo $this->Form->input('hotel_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('HotelGroupsHotel.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('HotelGroupsHotel.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Hotel Groups Hotels'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Hotel Groups'), array('controller' => 'hotel_groups', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Hotel Group'), array('controller' => 'hotel_groups', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Hotels'), array('controller' => 'hotels', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Hotel'), array('controller' => 'hotels', 'action' => 'add')); ?> </li>
	</ul>
</div>
