<div class="hotelsPointNearByHotels view">
<h2><?php echo __('Hotels Point Near By Hotel'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($hotelsPointNearByHotel['HotelsPointNearByHotel']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Hotel'); ?></dt>
		<dd>
			<?php echo $this->Html->link($hotelsPointNearByHotel['Hotel']['name'], array('controller' => 'hotels', 'action' => 'view', $hotelsPointNearByHotel['Hotel']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Point Near By Hotel'); ?></dt>
		<dd>
			<?php echo $this->Html->link($hotelsPointNearByHotel['PointNearByHotel']['name'], array('controller' => 'point_near_by_hotels', 'action' => 'view', $hotelsPointNearByHotel['PointNearByHotel']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Hotels Point Near By Hotel'), array('action' => 'edit', $hotelsPointNearByHotel['HotelsPointNearByHotel']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Hotels Point Near By Hotel'), array('action' => 'delete', $hotelsPointNearByHotel['HotelsPointNearByHotel']['id']), null, __('Are you sure you want to delete # %s?', $hotelsPointNearByHotel['HotelsPointNearByHotel']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Hotels Point Near By Hotels'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Hotels Point Near By Hotel'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Hotels'), array('controller' => 'hotels', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Hotel'), array('controller' => 'hotels', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Point Near By Hotels'), array('controller' => 'point_near_by_hotels', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Point Near By Hotel'), array('controller' => 'point_near_by_hotels', 'action' => 'add')); ?> </li>
	</ul>
</div>
