<div class="taxes index">
    <div class="um_box_mid_content_top"><span class="umstyle1"><?php echo __('Taxes'); ?></span></div>
    <div class="content_mid">
	<!--<h2><?php // echo __('Taxes'); ?></h2>-->
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
</div>
<?php echo $this->element('left_nav');?>
