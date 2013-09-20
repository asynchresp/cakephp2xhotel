<div class="hotelsStarRatings form">
<?php echo $this->Form->create('HotelsStarRating'); ?>
	<fieldset>
		<legend><?php echo __('Edit Hotels Star Rating'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('hotel_id');
		echo $this->Form->input('star_rating_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('HotelsStarRating.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('HotelsStarRating.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Hotels Star Ratings'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Hotels'), array('controller' => 'hotels', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Hotel'), array('controller' => 'hotels', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Star Ratings'), array('controller' => 'star_ratings', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Star Rating'), array('controller' => 'star_ratings', 'action' => 'add')); ?> </li>
	</ul>
</div>
