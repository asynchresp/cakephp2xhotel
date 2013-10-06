<div class="popularPoints index">
    <div class="um_box_mid_content_top"><span class="umstyle1"><?php echo __('Popular Points'); ?></span></div>
        <div class="content_mid">
	<!--<h2><?php // echo __('Popular Points'); ?></h2>-->
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th><?php echo $this->Paginator->sort('area'); ?></th>
			<th><?php echo $this->Paginator->sort('city_id'); ?></th>
			<th><?php echo $this->Paginator->sort('state_id'); ?></th>
			<th><?php echo $this->Paginator->sort('country_id'); ?></th>
			<th><?php echo $this->Paginator->sort('status'); ?></th>
			
			<?php /* ?><th><?php echo $this->Paginator->sort('site_id'); ?></th>
			<th><?php echo $this->Paginator->sort('description'); ?></th>
			<th><?php echo $this->Paginator->sort('activity_type_id'); ?></th>
			<th><?php echo $this->Paginator->sort('best_time_visit_to'); ?></th>
			<th><?php echo $this->Paginator->sort('best_time_visit_from'); ?></th>
			<th><?php echo $this->Paginator->sort('suitable'); ?></th>
			<th><?php echo $this->Paginator->sort('age_group'); ?></th>
			<th><?php echo $this->Paginator->sort('entry_fees'); ?></th>
			<th><?php echo $this->Paginator->sort('latitude'); ?></th>
			<th><?php echo $this->Paginator->sort('longitude'); ?></th>
			<th><?php echo $this->Paginator->sort('visit_duration'); ?></th>
			<th><?php echo $this->Paginator->sort('opening_time'); ?></th>
			<th><?php echo $this->Paginator->sort('closing_time'); ?></th>
			<th><?php echo $this->Paginator->sort('pp_image'); ?></th>
			<th><?php echo $this->Paginator->sort('pp_video'); ?></th>
			<th><?php echo $this->Paginator->sort('meta_title'); ?></th>
			<th><?php echo $this->Paginator->sort('meta_description'); ?></th>
			<th><?php echo $this->Paginator->sort('meta_keyword'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th><?php */ ?>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($popularPoints as $popularPoint): ?>
	<tr>
		<td><?php echo h($popularPoint['PopularPoint']['id']); ?>&nbsp;</td>
		<td><?php echo h($popularPoint['PopularPoint']['name']); ?>&nbsp;</td>
		<td><?php echo h($popularPoint['PopularPoint']['area']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($popularPoint['City']['name'], array('controller' => 'cities', 'action' => 'view', $popularPoint['City']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($popularPoint['State']['name'], array('controller' => 'states', 'action' => 'view', $popularPoint['State']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($popularPoint['Country']['name'], array('controller' => 'countries', 'action' => 'view', $popularPoint['Country']['id'])); ?>
		</td>
		<td><?php if(h($popularPoint['PopularPoint']['status']) == 1) { echo "Active"; } else { echo "Inactive"; } ?>&nbsp;</td>
		
		<?php /* ?><td>
			<?php echo $this->Html->link($popularPoint['Site']['name'], array('controller' => 'sites', 'action' => 'view', $popularPoint['Site']['id'])); ?>
		</td>
		<td><?php echo h($popularPoint['PopularPoint']['description']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($popularPoint['ActivityType']['name'], array('controller' => 'activity_types', 'action' => 'view', $popularPoint['ActivityType']['id'])); ?>
		</td>
		<td><?php echo h($popularPoint['PopularPoint']['best_time_visit_to']); ?>&nbsp;</td>
		<td><?php echo h($popularPoint['PopularPoint']['best_time_visit_from']); ?>&nbsp;</td>
		<td><?php echo h($popularPoint['PopularPoint']['suitable']); ?>&nbsp;</td>
		<td><?php echo h($popularPoint['PopularPoint']['age_group']); ?>&nbsp;</td>
		<td><?php echo h($popularPoint['PopularPoint']['entry_fees']); ?>&nbsp;</td>
		<td><?php echo h($popularPoint['PopularPoint']['latitude']); ?>&nbsp;</td>
		<td><?php echo h($popularPoint['PopularPoint']['longitude']); ?>&nbsp;</td>
		<td><?php echo h($popularPoint['PopularPoint']['visit_duration']); ?>&nbsp;</td>
		<td><?php echo h($popularPoint['PopularPoint']['opening_time']); ?>&nbsp;</td>
		<td><?php echo h($popularPoint['PopularPoint']['closing_time']); ?>&nbsp;</td>
		<td><?php echo h($popularPoint['PopularPoint']['pp_image']); ?>&nbsp;</td>
		<td><?php echo h($popularPoint['PopularPoint']['pp_video']); ?>&nbsp;</td>
		<td><?php echo h($popularPoint['PopularPoint']['meta_title']); ?>&nbsp;</td>
		<td><?php echo h($popularPoint['PopularPoint']['meta_description']); ?>&nbsp;</td>
		<td><?php echo h($popularPoint['PopularPoint']['meta_keyword']); ?>&nbsp;</td>
		<td><?php echo h($popularPoint['PopularPoint']['modified']); ?>&nbsp;</td>
		<td><?php echo h($popularPoint['PopularPoint']['created']); ?>&nbsp;</td><?php */ ?>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $popularPoint['PopularPoint']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $popularPoint['PopularPoint']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $popularPoint['PopularPoint']['id']), null, __('Are you sure you want to delete # %s?', $popularPoint['PopularPoint']['id'])); ?>
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
