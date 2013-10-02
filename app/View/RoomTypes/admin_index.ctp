<div class="roomTypes index">
    <div class="um_box_mid_content_top"><span class="umstyle1"><?php echo __('Room Types'); ?></span></div>
        <div class="content_mid">
	<!--<h2><?php // echo __('Room Types'); ?></h2>-->
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('int'); ?></th>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th><?php echo $this->Paginator->sort('description'); ?></th>
			<th><?php echo $this->Paginator->sort('status'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($roomTypes as $roomType): ?>
	<tr>
		<td><?php echo h($roomType['RoomType']['int']); ?>&nbsp;</td>
		<td><?php echo h($roomType['RoomType']['name']); ?>&nbsp;</td>
		<td><?php echo h($roomType['RoomType']['description']); ?>&nbsp;</td>
		<td><?php echo h($roomType['RoomType']['status']); ?>&nbsp;</td>
		<td><?php echo h($roomType['RoomType']['modified']); ?>&nbsp;</td>
		<td><?php echo h($roomType['RoomType']['created']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $roomType['RoomType']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $roomType['RoomType']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $roomType['RoomType']['id']), null, __('Are you sure you want to delete # %s?', $roomType['RoomType']['id'])); ?>
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
