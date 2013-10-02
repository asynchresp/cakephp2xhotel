<div class="hotelCancellationPolicies index">
    <div class="um_box_mid_content_top"><span class="umstyle1"><?php echo __('Hotel Cancellation Policies'); ?></span></div>
    <div class="content_mid">
	<!--<h2><?php // echo __('Hotel Cancellation Policies'); ?></h2>-->
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th><?php echo $this->Paginator->sort('no_before_days'); ?></th>
			<th><?php echo $this->Paginator->sort('perentage_deducted'); ?></th>
			<th><?php echo $this->Paginator->sort('status'); ?></th>
			
			<?php /* ?><th><?php echo $this->Paginator->sort('site_id'); ?></th>
			<th><?php echo $this->Paginator->sort('description'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th><?php */ ?>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($hotelCancellationPolicies as $hotelCancellationPolicy): ?>
	<tr>
		<td><?php echo h($hotelCancellationPolicy['HotelCancellationPolicy']['id']); ?>&nbsp;</td>
		<td><?php echo h($hotelCancellationPolicy['HotelCancellationPolicy']['name']); ?>&nbsp;</td>
		<td><?php echo h($hotelCancellationPolicy['HotelCancellationPolicy']['no_before_days']); ?>&nbsp;</td>
		<td><?php echo h($hotelCancellationPolicy['HotelCancellationPolicy']['perentage_deducted']); ?>&nbsp;</td>
		<td><?php if(h($hotelCancellationPolicy['HotelCancellationPolicy']['status']) == 1) { echo "Active"; } else { echo "Inactive"; } ?>&nbsp;</td>
		
		<?php /* ?>
		<td>
			<?php echo $this->Html->link($hotelCancellationPolicy['Site']['name'], array('controller' => 'sites', 'action' => 'view', $hotelCancellationPolicy['Site']['id'])); ?>
		</td>
		<td><?php echo h($hotelCancellationPolicy['HotelCancellationPolicy']['description']); ?>&nbsp;</td>
		<td><?php echo h($hotelCancellationPolicy['HotelCancellationPolicy']['modified']); ?>&nbsp;</td>
		<td><?php echo h($hotelCancellationPolicy['HotelCancellationPolicy']['created']); ?>&nbsp;</td><?php */ ?>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $hotelCancellationPolicy['HotelCancellationPolicy']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $hotelCancellationPolicy['HotelCancellationPolicy']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $hotelCancellationPolicy['HotelCancellationPolicy']['id']), null, __('Are you sure you want to delete # %s?', $hotelCancellationPolicy['HotelCancellationPolicy']['id'])); ?>
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