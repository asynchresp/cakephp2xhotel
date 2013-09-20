<div class="hotelsHotelThemes form">
<?php echo $this->Form->create('HotelsHotelTheme'); ?>
	<fieldset>
		<legend><?php echo __('Edit Hotels Hotel Theme'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('hotel_id');
		echo $this->Form->input('hotel_theme_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('HotelsHotelTheme.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('HotelsHotelTheme.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Hotels Hotel Themes'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Hotels'), array('controller' => 'hotels', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Hotel'), array('controller' => 'hotels', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Hotel Themes'), array('controller' => 'hotel_themes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Hotel Theme'), array('controller' => 'hotel_themes', 'action' => 'add')); ?> </li>
	</ul>
</div>
