<div class="hotelsHotelThemes view">
<h2><?php echo __('Hotels Hotel Theme'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($hotelsHotelTheme['HotelsHotelTheme']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Hotel'); ?></dt>
		<dd>
			<?php echo $this->Html->link($hotelsHotelTheme['Hotel']['name'], array('controller' => 'hotels', 'action' => 'view', $hotelsHotelTheme['Hotel']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Hotel Theme'); ?></dt>
		<dd>
			<?php echo $this->Html->link($hotelsHotelTheme['HotelTheme']['name'], array('controller' => 'hotel_themes', 'action' => 'view', $hotelsHotelTheme['HotelTheme']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Hotels Hotel Theme'), array('action' => 'edit', $hotelsHotelTheme['HotelsHotelTheme']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Hotels Hotel Theme'), array('action' => 'delete', $hotelsHotelTheme['HotelsHotelTheme']['id']), null, __('Are you sure you want to delete # %s?', $hotelsHotelTheme['HotelsHotelTheme']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Hotels Hotel Themes'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Hotels Hotel Theme'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Hotels'), array('controller' => 'hotels', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Hotel'), array('controller' => 'hotels', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Hotel Themes'), array('controller' => 'hotel_themes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Hotel Theme'), array('controller' => 'hotel_themes', 'action' => 'add')); ?> </li>
	</ul>
</div>
