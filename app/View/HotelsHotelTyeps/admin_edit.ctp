<div class="hotelsHotelTyeps form">
<?php echo $this->Form->create('HotelsHotelTyep'); ?>
	<fieldset>
		<legend><?php echo __('Edit Hotels Hotel Tyep'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('hotel_id');
		echo $this->Form->input('hotel_type_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('HotelsHotelTyep.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('HotelsHotelTyep.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Hotels Hotel Tyeps'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Hotels'), array('controller' => 'hotels', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Hotel'), array('controller' => 'hotels', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Hotel Types'), array('controller' => 'hotel_types', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Hotel Type'), array('controller' => 'hotel_types', 'action' => 'add')); ?> </li>
	</ul>
</div>
