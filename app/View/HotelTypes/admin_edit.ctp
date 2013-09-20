<div class="hotelTypes form">
<?php echo $this->Form->create('HotelType'); ?>
	<fieldset>
		<legend><?php echo __('Edit Hotel Type'); ?></legend>
	<?php
		echo $this->Form->input('id');
		//echo $this->Form->input('site_id');
		echo $this->Form->input('name');
		echo $this->Form->input('description');
		//echo $this->Form->input('status');
		echo $this->Form->label('hoteltype.status');
		$options = array('1' => 'Active', '0' => 'Inactive');
		$attributes = array('legend' => false);
		echo $this->Form->radio('status', $options, $attributes);		
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('HotelType.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('HotelType.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Hotel Types'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Sites'), array('controller' => 'sites', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Site'), array('controller' => 'sites', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Hotels'), array('controller' => 'hotels', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Hotel'), array('controller' => 'hotels', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Hotels Hotel Tyeps'), array('controller' => 'hotels_hotel_tyeps', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Hotels Hotel Tyep'), array('controller' => 'hotels_hotel_tyeps', 'action' => 'add')); ?> </li>
	</ul>
</div>
