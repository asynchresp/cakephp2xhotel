<div class="starRatings form">
<?php echo $this->Form->create('StarRating'); ?>
	<fieldset>
		<legend><?php echo __('Add Star Rating'); ?></legend>
	<?php
		echo $this->Form->input('name');
		echo $this->Form->input('shortcode');
		//echo $this->Form->input('image');
		echo $this->Form->input('image', array('type' => 'file'));
		
		//echo $this->Form->input('status');
		echo $this->Form->label('starrating.status');
		$options = array('1' => 'Active', '0' => 'Inactive');
		$attributes = array('legend' => false);
		echo $this->Form->radio('status', $options, $attributes);
				
		echo $this->Form->input('Hotel');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Star Ratings'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Hotels'), array('controller' => 'hotels', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Hotel'), array('controller' => 'hotels', 'action' => 'add')); ?> </li>
	</ul>
</div>
