<div class="coupons index">
    <div class="um_box_mid_content_top"><span class="umstyle1"><?php echo __('Coupons'); ?></span></div>
    <div class="content_mid">
	<!--<h2><?php // echo __('Coupons'); ?></h2>-->
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('site_id'); ?></th>
			<th><?php echo $this->Paginator->sort('hotel_id'); ?></th>
			<th><?php echo $this->Paginator->sort('room_type_id'); ?></th>
			<th><?php echo $this->Paginator->sort('hotel_room_id'); ?></th>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th><?php echo $this->Paginator->sort('description'); ?></th>
			<th><?php echo $this->Paginator->sort('coupon_code'); ?></th>
			<th><?php echo $this->Paginator->sort('coupon_st_date'); ?></th>
			<th><?php echo $this->Paginator->sort('coupon_expiry_date'); ?></th>
			<th><?php echo $this->Paginator->sort('min_night'); ?></th>
			<th><?php echo $this->Paginator->sort('max_guest'); ?></th>
			<th><?php echo $this->Paginator->sort('discount'); ?></th>
			<th><?php echo $this->Paginator->sort('meta_title'); ?></th>
			<th><?php echo $this->Paginator->sort('meta_description'); ?></th>
			<th><?php echo $this->Paginator->sort('meta_keyword'); ?></th>
			<th><?php echo $this->Paginator->sort('status'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($coupons as $coupon): ?>
	<tr>
		<td><?php echo h($coupon['Coupon']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($coupon['Site']['name'], array('controller' => 'sites', 'action' => 'view', $coupon['Site']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($coupon['Hotel']['name'], array('controller' => 'hotels', 'action' => 'view', $coupon['Hotel']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($coupon['RoomType']['name'], array('controller' => 'room_types', 'action' => 'view', $coupon['RoomType']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($coupon['HotelRoom']['name'], array('controller' => 'hotel_rooms', 'action' => 'view', $coupon['HotelRoom']['id'])); ?>
		</td>
		<td><?php echo h($coupon['Coupon']['name']); ?>&nbsp;</td>
		<td><?php echo h($coupon['Coupon']['description']); ?>&nbsp;</td>
		<td><?php echo h($coupon['Coupon']['coupon_code']); ?>&nbsp;</td>
		<td><?php echo h($coupon['Coupon']['coupon_st_date']); ?>&nbsp;</td>
		<td><?php echo h($coupon['Coupon']['coupon_expiry_date']); ?>&nbsp;</td>
		<td><?php echo h($coupon['Coupon']['min_night']); ?>&nbsp;</td>
		<td><?php echo h($coupon['Coupon']['max_guest']); ?>&nbsp;</td>
		<td><?php echo h($coupon['Coupon']['discount']); ?>&nbsp;</td>
		<td><?php echo h($coupon['Coupon']['meta_title']); ?>&nbsp;</td>
		<td><?php echo h($coupon['Coupon']['meta_description']); ?>&nbsp;</td>
		<td><?php echo h($coupon['Coupon']['meta_keyword']); ?>&nbsp;</td>
		<td><?php echo h($coupon['Coupon']['status']); ?>&nbsp;</td>
		<td><?php echo h($coupon['Coupon']['modified']); ?>&nbsp;</td>
		<td><?php echo h($coupon['Coupon']['created']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $coupon['Coupon']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $coupon['Coupon']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $coupon['Coupon']['id']), null, __('Are you sure you want to delete # %s?', $coupon['Coupon']['id'])); ?>
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