<div class="taxes index">
	<h2><?php echo __('Taxes'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th><?php echo $this->Paginator->sort('tax_percentage'); ?></th>
			<th><?php echo $this->Paginator->sort('status'); ?></th>
			<th><?php echo $this->Paginator->sort('city_id'); ?></th>
			<th><?php echo $this->Paginator->sort('state_id'); ?></th>
			<th><?php echo $this->Paginator->sort('country_id'); ?></th>
			
			<?php /* ?><th><?php echo $this->Paginator->sort('site_id'); ?></th>
			<th><?php echo $this->Paginator->sort('description'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th><?php */ ?>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($taxes as $tax): ?>
	<tr>
		<td><?php echo h($tax['Tax']['id']); ?>&nbsp;</td>
		<td><?php echo h($tax['Tax']['name']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($tax['City']['name'], array('controller' => 'cities', 'action' => 'view', $tax['City']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($tax['State']['name'], array('controller' => 'states', 'action' => 'view', $tax['State']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($tax['Country']['name'], array('controller' => 'countries', 'action' => 'view', $tax['Country']['id'])); ?>
		</td>
		<td><?php echo h($tax['Tax']['tax_percentage']); ?>&nbsp;</td>
		<td><?php if(h($tax['Tax']['status']) == 1) { echo "Active"; } else { echo "Inactive"; } ?>&nbsp;</td>
		
		<?php /* ?><td>
			<?php echo $this->Html->link($tax['Site']['name'], array('controller' => 'sites', 'action' => 'view', $tax['Site']['id'])); ?>
		</td>
		<td><?php echo h($tax['Tax']['description']); ?>&nbsp;</td>
		<td><?php echo h($tax['Tax']['modified']); ?>&nbsp;</td>
		<td><?php echo h($tax['Tax']['created']); ?>&nbsp;</td><?php */ ?>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $tax['Tax']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $tax['Tax']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $tax['Tax']['id']), null, __('Are you sure you want to delete # %s?', $tax['Tax']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Tax'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Sites'), array('controller' => 'sites', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Site'), array('controller' => 'sites', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Countries'), array('controller' => 'countries', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Country'), array('controller' => 'countries', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List States'), array('controller' => 'states', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New State'), array('controller' => 'states', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Cities'), array('controller' => 'cities', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New City'), array('controller' => 'cities', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Hotel Rooms'), array('controller' => 'hotel_rooms', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Hotel Room'), array('controller' => 'hotel_rooms', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Tour Packages'), array('controller' => 'tour_packages', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tour Package'), array('controller' => 'tour_packages', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Hotels'), array('controller' => 'hotels', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Hotel'), array('controller' => 'hotels', 'action' => 'add')); ?> </li>
	</ul>
</div>
