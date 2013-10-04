<div class="activityTypes index">
	<h2><?php echo __('Activity Types'); ?></h2>
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
	<?php foreach ($activityTypes as $activityType): ?>
	<tr>
		<td><?php echo h($activityType['ActivityType']['id']); ?>&nbsp;</td>
		<td><?php echo h($activityType['ActivityType']['name']); ?>&nbsp;</td>
		<td><?php if(h($activityType['ActivityType']['status']) == 1) { echo "Active"; } else { echo "Inactive"; } ?>&nbsp;</td>
		<?php /* ?>
		<td>
			<?php echo $this->Html->link($activityType['Site']['name'], array('controller' => 'sites', 'action' => 'view', $activityType['Site']['id'])); ?>
		</td>		
		<td><?php echo h($activityType['ActivityType']['description']); ?>&nbsp;</td>
		<td><?php echo h($activityType['ActivityType']['meta_title']); ?>&nbsp;</td>
		<td><?php echo h($activityType['ActivityType']['meta_description']); ?>&nbsp;</td>
		<td><?php echo h($activityType['ActivityType']['meta_keyword']); ?>&nbsp;</td>
		<td><?php echo h($activityType['ActivityType']['modified']); ?>&nbsp;</td>
		<td><?php echo h($activityType['ActivityType']['created']); ?>&nbsp;</td><?php */ ?>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $activityType['ActivityType']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $activityType['ActivityType']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $activityType['ActivityType']['id']), null, __('Are you sure you want to delete # %s?', $activityType['ActivityType']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Activity Type'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Sites'), array('controller' => 'sites', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Site'), array('controller' => 'sites', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Popular Points'), array('controller' => 'popular_points', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Popular Point'), array('controller' => 'popular_points', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Tour Packages'), array('controller' => 'tour_packages', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tour Package'), array('controller' => 'tour_packages', 'action' => 'add')); ?> </li>
	</ul>
</div>
