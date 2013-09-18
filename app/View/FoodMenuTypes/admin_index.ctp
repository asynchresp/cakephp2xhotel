<div class="foodMenuTypes index">
	<h2><?php echo __('Food Menu Types'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('site_id'); ?></th>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th><?php echo $this->Paginator->sort('description'); ?></th>
			<th><?php echo $this->Paginator->sort('meta_title'); ?></th>
			<th><?php echo $this->Paginator->sort('meta_description'); ?></th>
			<th><?php echo $this->Paginator->sort('meta_keyword'); ?></th>
			<th><?php echo $this->Paginator->sort('status'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($foodMenuTypes as $foodMenuType): ?>
	<tr>
		<td><?php echo h($foodMenuType['FoodMenuType']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($foodMenuType['Site']['name'], array('controller' => 'sites', 'action' => 'view', $foodMenuType['Site']['id'])); ?>
		</td>
		<td><?php echo h($foodMenuType['FoodMenuType']['name']); ?>&nbsp;</td>
		<td><?php echo h($foodMenuType['FoodMenuType']['description']); ?>&nbsp;</td>
		<td><?php echo h($foodMenuType['FoodMenuType']['meta_title']); ?>&nbsp;</td>
		<td><?php echo h($foodMenuType['FoodMenuType']['meta_description']); ?>&nbsp;</td>
		<td><?php echo h($foodMenuType['FoodMenuType']['meta_keyword']); ?>&nbsp;</td>
		<td><?php echo h($foodMenuType['FoodMenuType']['status']); ?>&nbsp;</td>
		<td><?php echo h($foodMenuType['FoodMenuType']['modified']); ?>&nbsp;</td>
		<td><?php echo h($foodMenuType['FoodMenuType']['created']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $foodMenuType['FoodMenuType']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $foodMenuType['FoodMenuType']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $foodMenuType['FoodMenuType']['id']), null, __('Are you sure you want to delete # %s?', $foodMenuType['FoodMenuType']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Food Menu Type'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Sites'), array('controller' => 'sites', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Site'), array('controller' => 'sites', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Food Packages'), array('controller' => 'food_packages', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Food Package'), array('controller' => 'food_packages', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Hotel Rooms'), array('controller' => 'hotel_rooms', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Hotel Room'), array('controller' => 'hotel_rooms', 'action' => 'add')); ?> </li>
	</ul>
</div>
