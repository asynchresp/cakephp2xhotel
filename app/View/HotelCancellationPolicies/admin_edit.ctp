<div class="hotelCancellationPolicies form">
<?php echo $this->Form->create('HotelCancellationPolicy'); ?>
	<fieldset>
		<legend><?php echo __('Edit Hotel Cancellation Policy'); ?></legend>
	<?php
		echo $this->Form->input('id');
		//echo $this->Form->input('site_id');
		echo $this->Form->input('name');
		echo $this->Form->input('description', array('class'=>'ckeditor'));
		echo $this->Form->input('no_before_days');
		echo $this->Form->input('perentage_deducted');
		//echo $this->Form->input('status');
		echo $this->Form->label('hotelcancellationpolicy.status');
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

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('HotelCancellationPolicy.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('HotelCancellationPolicy.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Hotel Cancellation Policies'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Sites'), array('controller' => 'sites', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Site'), array('controller' => 'sites', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Hotels'), array('controller' => 'hotels', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Hotel'), array('controller' => 'hotels', 'action' => 'add')); ?> </li>
	</ul>
</div>
