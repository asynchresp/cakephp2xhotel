<div class="hotelsStarRatings view">
<h2><?php echo __('Hotels Star Rating'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($hotelsStarRating['HotelsStarRating']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Hotel'); ?></dt>
		<dd>
			<?php echo $this->Html->link($hotelsStarRating['Hotel']['name'], array('controller' => 'hotels', 'action' => 'view', $hotelsStarRating['Hotel']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Star Rating'); ?></dt>
		<dd>
			<?php echo $this->Html->link($hotelsStarRating['StarRating']['name'], array('controller' => 'star_ratings', 'action' => 'view', $hotelsStarRating['StarRating']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Hotels Star Rating'), array('action' => 'edit', $hotelsStarRating['HotelsStarRating']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Hotels Star Rating'), array('action' => 'delete', $hotelsStarRating['HotelsStarRating']['id']), null, __('Are you sure you want to delete # %s?', $hotelsStarRating['HotelsStarRating']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Hotels Star Ratings'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Hotels Star Rating'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Hotels'), array('controller' => 'hotels', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Hotel'), array('controller' => 'hotels', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Star Ratings'), array('controller' => 'star_ratings', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Star Rating'), array('controller' => 'star_ratings', 'action' => 'add')); ?> </li>
	</ul>
</div>
