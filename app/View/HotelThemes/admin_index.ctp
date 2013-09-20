<div class="hotelThemes index">
	<h2><?php echo __('Hotel Themes'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th><?php echo $this->Paginator->sort('status'); ?></th>
			
			<?php /* ?><th><?php echo $this->Paginator->sort('site_id'); ?></th>
			<th><?php echo $this->Paginator->sort('description'); ?></th>
			<th><?php echo $this->Paginator->sort('meta_title'); ?></th>
			<th><?php echo $this->Paginator->sort('meta_description'); ?></th>
			<th><?php echo $this->Paginator->sort('meta_keyword'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th><?php */ ?>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($hotelThemes as $hotelTheme): ?>
	<tr>
		<td><?php echo h($hotelTheme['HotelTheme']['id']); ?>&nbsp;</td>
		<td><?php echo h($hotelTheme['HotelTheme']['name']); ?>&nbsp;</td>
		<td><?php if(h($hotelTheme['HotelTheme']['status']) == 1) { echo "Active"; } else { echo "Inactive"; } ?>&nbsp;</td>
		
		<?php /* ?>
		<td>
			<?php echo $this->Html->link($hotelTheme['Site']['name'], array('controller' => 'sites', 'action' => 'view', $hotelTheme['Site']['id'])); ?>
		</td>		
		<td><?php echo h($hotelTheme['HotelTheme']['description']); ?>&nbsp;</td>
		<td><?php echo h($hotelTheme['HotelTheme']['meta_title']); ?>&nbsp;</td>
		<td><?php echo h($hotelTheme['HotelTheme']['meta_description']); ?>&nbsp;</td>
		<td><?php echo h($hotelTheme['HotelTheme']['meta_keyword']); ?>&nbsp;</td>
		<td><?php echo h($hotelTheme['HotelTheme']['modified']); ?>&nbsp;</td>
		<td><?php echo h($hotelTheme['HotelTheme']['created']); ?>&nbsp;</td><?php */ ?>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $hotelTheme['HotelTheme']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $hotelTheme['HotelTheme']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $hotelTheme['HotelTheme']['id']), null, __('Are you sure you want to delete # %s?', $hotelTheme['HotelTheme']['id'])); ?>
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
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Hotel Theme'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Sites'), array('controller' => 'sites', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Site'), array('controller' => 'sites', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Hotels'), array('controller' => 'hotels', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Hotel'), array('controller' => 'hotels', 'action' => 'add')); ?> </li>
	</ul>
</div>
