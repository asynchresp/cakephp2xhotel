<div class="hotelsHotelModificationPolicies view">
<h2><?php echo __('Hotels Hotel Modification Policy'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($hotelsHotelModificationPolicy['HotelsHotelModificationPolicy']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Hotel'); ?></dt>
		<dd>
			<?php echo $this->Html->link($hotelsHotelModificationPolicy['Hotel']['name'], array('controller' => 'hotels', 'action' => 'view', $hotelsHotelModificationPolicy['Hotel']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Hotel Modification Policy'); ?></dt>
		<dd>
			<?php echo $this->Html->link($hotelsHotelModificationPolicy['HotelModificationPolicy']['name'], array('controller' => 'hotel_modification_policies', 'action' => 'view', $hotelsHotelModificationPolicy['HotelModificationPolicy']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Hotels Hotel Modification Policy'), array('action' => 'edit', $hotelsHotelModificationPolicy['HotelsHotelModificationPolicy']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Hotels Hotel Modification Policy'), array('action' => 'delete', $hotelsHotelModificationPolicy['HotelsHotelModificationPolicy']['id']), null, __('Are you sure you want to delete # %s?', $hotelsHotelModificationPolicy['HotelsHotelModificationPolicy']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Hotels Hotel Modification Policies'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Hotels Hotel Modification Policy'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Hotels'), array('controller' => 'hotels', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Hotel'), array('controller' => 'hotels', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Hotel Modification Policies'), array('controller' => 'hotel_modification_policies', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Hotel Modification Policy'), array('controller' => 'hotel_modification_policies', 'action' => 'add')); ?> </li>
	</ul>
</div>
