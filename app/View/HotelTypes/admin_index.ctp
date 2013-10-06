<div class="hotelTypes index">
    <div class="um_box_mid_content_top"><span class="umstyle1"><?php echo __('Hotel Types'); ?></span></div>
        <div class="content_mid">
	<!--<h2><?php // echo __('Hotel Types'); ?></h2>-->
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th><?php echo $this->Paginator->sort('status'); ?></th>
			
			<?php /* ?><th><?php echo $this->Paginator->sort('site_id'); ?></th>
			<th><?php echo $this->Paginator->sort('description'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th><?php */ ?>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($hotelTypes as $hotelType): ?>
	<tr>
		<td><?php echo h($hotelType['HotelType']['id']); ?>&nbsp;</td>
		<td><?php echo h($hotelType['HotelType']['name']); ?>&nbsp;</td>
		<td><?php if(h($hotelType['HotelType']['status']) == 1) { echo "Active"; } else { echo "Inactive"; } ?>&nbsp;</td>

		<?php /* ?><td>
			<?php echo $this->Html->link($hotelType['Site']['name'], array('controller' => 'sites', 'action' => 'view', $hotelType['Site']['id'])); ?>
		</td>
		<td><?php echo h($hotelType['HotelType']['description']); ?>&nbsp;</td>
		<td><?php echo h($hotelType['HotelType']['modified']); ?>&nbsp;</td>
		<td><?php echo h($hotelType['HotelType']['created']); ?>&nbsp;</td><?php */ ?>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $hotelType['HotelType']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $hotelType['HotelType']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $hotelType['HotelType']['id']), null, __('Are you sure you want to delete # %s?', $hotelType['HotelType']['id'])); ?>
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