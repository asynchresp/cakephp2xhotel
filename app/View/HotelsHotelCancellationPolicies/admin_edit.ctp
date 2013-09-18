<div class="hotelsHotelCancellationPolicies form">
<?php echo $this->Form->create('HotelsHotelCancellationPolicy'); ?>
	<fieldset>
		<legend><?php echo __('Edit Hotels Hotel Cancellation Policy'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('hotel_id');
		echo $this->Form->input('hotel_cancellation_policy_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('HotelsHotelCancellationPolicy.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('HotelsHotelCancellationPolicy.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Hotels Hotel Cancellation Policies'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Hotels'), array('controller' => 'hotels', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Hotel'), array('controller' => 'hotels', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Hotel Cancellation Policies'), array('controller' => 'hotel_cancellation_policies', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Hotel Cancellation Policy'), array('controller' => 'hotel_cancellation_policies', 'action' => 'add')); ?> </li>
	</ul>
</div>
