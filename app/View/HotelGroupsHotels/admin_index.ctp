<div class="hotelGroupsHotels index">
    <div class="um_box_mid_content_top"><span class="umstyle1"><?php echo __('Hotel Groups Hotels'); ?></span></div>
    <div class="content_mid">
	<!--<h2><?php // echo __('Hotel Groups Hotels'); ?></h2>-->
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('hotel_group_id'); ?></th>
			<th><?php echo $this->Paginator->sort('hotel_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($hotelGroupsHotels as $hotelGroupsHotel): ?>
	<tr>
		<td><?php echo h($hotelGroupsHotel['HotelGroupsHotel']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($hotelGroupsHotel['HotelGroup']['name'], array('controller' => 'hotel_groups', 'action' => 'view', $hotelGroupsHotel['HotelGroup']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($hotelGroupsHotel['Hotel']['name'], array('controller' => 'hotels', 'action' => 'view', $hotelGroupsHotel['Hotel']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $hotelGroupsHotel['HotelGroupsHotel']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $hotelGroupsHotel['HotelGroupsHotel']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $hotelGroupsHotel['HotelGroupsHotel']['id']), null, __('Are you sure you want to delete # %s?', $hotelGroupsHotel['HotelGroupsHotel']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
</div>
<?php echo $this->element('left_nav');?>
