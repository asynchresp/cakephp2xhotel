<div class="couponsHotelRooms index">
    <div class="um_box_mid_content_top"><span class="umstyle1"><?php echo __('Coupons Hotel Rooms'); ?></span></div>
    <div class="content_mid">
	<!--<h2><?php // echo __('Coupons Hotel Rooms'); ?></h2>-->
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('coupon_id'); ?></th>
			<th><?php echo $this->Paginator->sort('hotel_room_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($couponsHotelRooms as $couponsHotelRoom): ?>
	<tr>
		<td><?php echo h($couponsHotelRoom['CouponsHotelRoom']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($couponsHotelRoom['Coupon']['name'], array('controller' => 'coupons', 'action' => 'view', $couponsHotelRoom['Coupon']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($couponsHotelRoom['HotelRoom']['name'], array('controller' => 'hotel_rooms', 'action' => 'view', $couponsHotelRoom['HotelRoom']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $couponsHotelRoom['CouponsHotelRoom']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $couponsHotelRoom['CouponsHotelRoom']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $couponsHotelRoom['CouponsHotelRoom']['id']), null, __('Are you sure you want to delete # %s?', $couponsHotelRoom['CouponsHotelRoom']['id'])); ?>
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
