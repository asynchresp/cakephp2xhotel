<div class="pointNearByHotels index">
    <div class="um_box_mid_content_top"><span class="umstyle1"><?php echo __('Point Near By Hotels'); ?></span></div>
        <div class="content_mid">
	<!--<h2><?php // echo __('Point Near By Hotels'); ?></h2>-->
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
			<th><?php echo $this->Paginator->sort('latitude'); ?></th>
			<th><?php echo $this->Paginator->sort('longitude'); ?></th>
			<th><?php echo $this->Paginator->sort('image'); ?></th>
			<th><?php echo $this->Paginator->sort('meta_title'); ?></th>
			<th><?php echo $this->Paginator->sort('meta_description'); ?></th>
			<th><?php echo $this->Paginator->sort('meta_keyword'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th><?php */ ?>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($pointNearByHotels as $pointNearByHotel): ?>
	<tr>
		<td><?php echo h($pointNearByHotel['PointNearByHotel']['id']); ?>&nbsp;</td>
		<td><?php echo h($pointNearByHotel['PointNearByHotel']['name']); ?>&nbsp;</td>
		<td><?php echo h($pointNearByHotel['PointNearByHotel']['area']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($pointNearByHotel['City']['name'], array('controller' => 'cities', 'action' => 'view', $pointNearByHotel['City']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($pointNearByHotel['State']['name'], array('controller' => 'states', 'action' => 'view', $pointNearByHotel['State']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($pointNearByHotel['Country']['name'], array('controller' => 'countries', 'action' => 'view', $pointNearByHotel['Country']['id'])); ?>
		</td>
		<td><?php if(h($pointNearByHotel['PointNearByHotel']['status']) == 1) { echo "Active"; } else { echo "Inactive"; } ?>&nbsp;</td>
	
		
		<?php /* ?><td>
			<?php echo $this->Html->link($pointNearByHotel['Site']['name'], array('controller' => 'sites', 'action' => 'view', $pointNearByHotel['Site']['id'])); ?>
		</td>
		<td><?php echo h($pointNearByHotel['PointNearByHotel']['description']); ?>&nbsp;</td>
		<td><?php echo h($pointNearByHotel['PointNearByHotel']['latitude']); ?>&nbsp;</td>
		<td><?php echo h($pointNearByHotel['PointNearByHotel']['longitude']); ?>&nbsp;</td>
		<td><?php echo h($pointNearByHotel['PointNearByHotel']['image']); ?>&nbsp;</td>
		<td><?php echo h($pointNearByHotel['PointNearByHotel']['meta_title']); ?>&nbsp;</td>
		<td><?php echo h($pointNearByHotel['PointNearByHotel']['meta_description']); ?>&nbsp;</td>
		<td><?php echo h($pointNearByHotel['PointNearByHotel']['meta_keyword']); ?>&nbsp;</td>
		<td><?php echo h($pointNearByHotel['PointNearByHotel']['modified']); ?>&nbsp;</td>
		<td><?php echo h($pointNearByHotel['PointNearByHotel']['created']); ?>&nbsp;</td><?php */ ?>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $pointNearByHotel['PointNearByHotel']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $pointNearByHotel['PointNearByHotel']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $pointNearByHotel['PointNearByHotel']['id']), null, __('Are you sure you want to delete # %s?', $pointNearByHotel['PointNearByHotel']['id'])); ?>
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