<div class="areas index">
    <div class="um_box_mid_content_top"><span class="umstyle1"><?php echo __('Areas'); ?></span></div>
        <div class="content_mid">
	<!--<h2><?php // echo __('Areas'); ?></h2>-->
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th><?php echo $this->Paginator->sort('city_id'); ?></th>
			<th><?php echo $this->Paginator->sort('state_id'); ?></th>
			<th><?php echo $this->Paginator->sort('country_id'); ?></th>
			<th><?php echo $this->Paginator->sort('status'); ?></th>
			
			<?php /* ?><th><?php echo $this->Paginator->sort('description'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th><?php */ ?>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($areas as $area): ?>
	<tr>
		<td><?php echo h($area['Area']['id']); ?>&nbsp;</td>
		<td><?php echo h($area['Area']['name']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($area['City']['name'], array('controller' => 'cities', 'action' => 'view', $area['City']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($area['State']['name'], array('controller' => 'states', 'action' => 'view', $area['State']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($area['Country']['name'], array('controller' => 'countries', 'action' => 'view', $area['Country']['id'])); ?>
		</td>
		<td><?php if(h($area['Area']['status']) == 1) { echo "Active"; } else { echo "Inactive"; } ?>&nbsp;</td>
		
		<?php /* ?><td><?php echo h($area['Area']['description']); ?>&nbsp;</td>
		<td><?php echo h($area['Area']['modified']); ?>&nbsp;</td>
		<td><?php echo h($area['Area']['created']); ?>&nbsp;</td><?php */ ?>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $area['Area']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $area['Area']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $area['Area']['id']), null, __('Are you sure you want to delete # %s?', $area['Area']['id'])); ?>
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
