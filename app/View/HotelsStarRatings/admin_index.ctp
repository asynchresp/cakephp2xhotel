<div class="hotelsStarRatings index">
	<h2><?php echo __('Hotels Star Ratings'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('hotel_id'); ?></th>
			<th><?php echo $this->Paginator->sort('star_rating_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($hotelsStarRatings as $hotelsStarRating): ?>
	<tr>
		<td><?php echo h($hotelsStarRating['HotelsStarRating']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($hotelsStarRating['Hotel']['name'], array('controller' => 'hotels', 'action' => 'view', $hotelsStarRating['Hotel']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($hotelsStarRating['StarRating']['name'], array('controller' => 'star_ratings', 'action' => 'view', $hotelsStarRating['StarRating']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $hotelsStarRating['HotelsStarRating']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $hotelsStarRating['HotelsStarRating']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $hotelsStarRating['HotelsStarRating']['id']), null, __('Are you sure you want to delete # %s?', $hotelsStarRating['HotelsStarRating']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Hotels Star Rating'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Hotels'), array('controller' => 'hotels', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Hotel'), array('controller' => 'hotels', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Star Ratings'), array('controller' => 'star_ratings', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Star Rating'), array('controller' => 'star_ratings', 'action' => 'add')); ?> </li>
	</ul>
</div>
