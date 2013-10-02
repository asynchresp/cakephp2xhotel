<div class="hotelsPointNearByHotels index">
    <div class="um_box_mid_content_top"><span class="umstyle1"><?php echo __('Hotels Point Near By Hotels'); ?></span></div>
        <div class="content_mid">
	<!--<h2><?php // echo __('Hotels Point Near By Hotels'); ?></h2>-->
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('hotel_id'); ?></th>
			<th><?php echo $this->Paginator->sort('point_near_by_hotel_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($hotelsPointNearByHotels as $hotelsPointNearByHotel): ?>
	<tr>
		<td><?php echo h($hotelsPointNearByHotel['HotelsPointNearByHotel']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($hotelsPointNearByHotel['Hotel']['name'], array('controller' => 'hotels', 'action' => 'view', $hotelsPointNearByHotel['Hotel']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($hotelsPointNearByHotel['PointNearByHotel']['name'], array('controller' => 'point_near_by_hotels', 'action' => 'view', $hotelsPointNearByHotel['PointNearByHotel']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $hotelsPointNearByHotel['HotelsPointNearByHotel']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $hotelsPointNearByHotel['HotelsPointNearByHotel']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $hotelsPointNearByHotel['HotelsPointNearByHotel']['id']), null, __('Are you sure you want to delete # %s?', $hotelsPointNearByHotel['HotelsPointNearByHotel']['id'])); ?>
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