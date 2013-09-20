<div class="hotelModificationPolicies form">
<?php echo $this->Form->create('HotelModificationPolicy'); ?>
	<fieldset>
		<legend><?php echo __('Add Hotel Modification Policy'); ?></legend>
	<?php
		//echo $this->Form->input('site_id');
		echo $this->Form->input('name');
		echo $this->Form->input('description');
		echo $this->Form->input('no_before_days');
		echo $this->Form->input('perentage_deducted');
		//echo $this->Form->input('status');
		echo $this->Form->label('hotelmodificationpolicy.status');
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

		<li><?php echo $this->Html->link(__('List Hotel Modification Policies'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Sites'), array('controller' => 'sites', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Site'), array('controller' => 'sites', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Hotels'), array('controller' => 'hotels', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Hotel'), array('controller' => 'hotels', 'action' => 'add')); ?> </li>
	</ul>
</div>
