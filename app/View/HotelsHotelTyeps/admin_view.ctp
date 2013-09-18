<div class="hotelsHotelTyeps view">
<h2><?php echo __('Hotels Hotel Tyep'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($hotelsHotelTyep['HotelsHotelTyep']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Hotel'); ?></dt>
		<dd>
			<?php echo $this->Html->link($hotelsHotelTyep['Hotel']['name'], array('controller' => 'hotels', 'action' => 'view', $hotelsHotelTyep['Hotel']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Hotel Type'); ?></dt>
		<dd>
			<?php echo $this->Html->link($hotelsHotelTyep['HotelType']['name'], array('controller' => 'hotel_types', 'action' => 'view', $hotelsHotelTyep['HotelType']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Hotels Hotel Tyep'), array('action' => 'edit', $hotelsHotelTyep['HotelsHotelTyep']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Hotels Hotel Tyep'), array('action' => 'delete', $hotelsHotelTyep['HotelsHotelTyep']['id']), null, __('Are you sure you want to delete # %s?', $hotelsHotelTyep['HotelsHotelTyep']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Hotels Hotel Tyeps'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Hotels Hotel Tyep'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Hotels'), array('controller' => 'hotels', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Hotel'), array('controller' => 'hotels', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Hotel Types'), array('controller' => 'hotel_types', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Hotel Type'), array('controller' => 'hotel_types', 'action' => 'add')); ?> </li>
	</ul>
</div>
