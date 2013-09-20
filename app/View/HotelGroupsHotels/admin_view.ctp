<div class="hotelGroupsHotels view">
<h2><?php echo __('Hotel Groups Hotel'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($hotelGroupsHotel['HotelGroupsHotel']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Hotel Group'); ?></dt>
		<dd>
			<?php echo $this->Html->link($hotelGroupsHotel['HotelGroup']['name'], array('controller' => 'hotel_groups', 'action' => 'view', $hotelGroupsHotel['HotelGroup']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Hotel'); ?></dt>
		<dd>
			<?php echo $this->Html->link($hotelGroupsHotel['Hotel']['name'], array('controller' => 'hotels', 'action' => 'view', $hotelGroupsHotel['Hotel']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Hotel Groups Hotel'), array('action' => 'edit', $hotelGroupsHotel['HotelGroupsHotel']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Hotel Groups Hotel'), array('action' => 'delete', $hotelGroupsHotel['HotelGroupsHotel']['id']), null, __('Are you sure you want to delete # %s?', $hotelGroupsHotel['HotelGroupsHotel']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Hotel Groups Hotels'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Hotel Groups Hotel'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Hotel Groups'), array('controller' => 'hotel_groups', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Hotel Group'), array('controller' => 'hotel_groups', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Hotels'), array('controller' => 'hotels', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Hotel'), array('controller' => 'hotels', 'action' => 'add')); ?> </li>
	</ul>
</div>
