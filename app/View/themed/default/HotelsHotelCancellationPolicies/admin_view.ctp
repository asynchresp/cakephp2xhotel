<div class="hotelsHotelCancellationPolicies view">
<h2><?php echo __('Hotels Hotel Cancellation Policy'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($hotelsHotelCancellationPolicy['HotelsHotelCancellationPolicy']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Hotel'); ?></dt>
		<dd>
			<?php echo $this->Html->link($hotelsHotelCancellationPolicy['Hotel']['name'], array('controller' => 'hotels', 'action' => 'view', $hotelsHotelCancellationPolicy['Hotel']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Hotel Cancellation Policy'); ?></dt>
		<dd>
			<?php echo $this->Html->link($hotelsHotelCancellationPolicy['HotelCancellationPolicy']['name'], array('controller' => 'hotel_cancellation_policies', 'action' => 'view', $hotelsHotelCancellationPolicy['HotelCancellationPolicy']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Hotels Hotel Cancellation Policy'), array('action' => 'edit', $hotelsHotelCancellationPolicy['HotelsHotelCancellationPolicy']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Hotels Hotel Cancellation Policy'), array('action' => 'delete', $hotelsHotelCancellationPolicy['HotelsHotelCancellationPolicy']['id']), null, __('Are you sure you want to delete # %s?', $hotelsHotelCancellationPolicy['HotelsHotelCancellationPolicy']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Hotels Hotel Cancellation Policies'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Hotels Hotel Cancellation Policy'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Hotels'), array('controller' => 'hotels', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Hotel'), array('controller' => 'hotels', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Hotel Cancellation Policies'), array('controller' => 'hotel_cancellation_policies', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Hotel Cancellation Policy'), array('controller' => 'hotel_cancellation_policies', 'action' => 'add')); ?> </li>
	</ul>
</div>
