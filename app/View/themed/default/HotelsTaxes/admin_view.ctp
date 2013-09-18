<div class="hotelsTaxes view">
<h2><?php echo __('Hotels Tax'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($hotelsTax['HotelsTax']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Hotel'); ?></dt>
		<dd>
			<?php echo $this->Html->link($hotelsTax['Hotel']['name'], array('controller' => 'hotels', 'action' => 'view', $hotelsTax['Hotel']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tax'); ?></dt>
		<dd>
			<?php echo $this->Html->link($hotelsTax['Tax']['name'], array('controller' => 'taxes', 'action' => 'view', $hotelsTax['Tax']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Hotels Tax'), array('action' => 'edit', $hotelsTax['HotelsTax']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Hotels Tax'), array('action' => 'delete', $hotelsTax['HotelsTax']['id']), null, __('Are you sure you want to delete # %s?', $hotelsTax['HotelsTax']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Hotels Taxes'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Hotels Tax'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Hotels'), array('controller' => 'hotels', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Hotel'), array('controller' => 'hotels', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Taxes'), array('controller' => 'taxes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tax'), array('controller' => 'taxes', 'action' => 'add')); ?> </li>
	</ul>
</div>
