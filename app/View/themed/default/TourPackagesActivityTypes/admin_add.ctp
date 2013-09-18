<div class="tourPackagesActivityTypes form">
<?php echo $this->Form->create('TourPackagesActivityType'); ?>
	<fieldset>
		<legend><?php echo __('Add Tour Packages Activity Type'); ?></legend>
	<?php
		echo $this->Form->input('tour_package_id');
		echo $this->Form->input('activity_type_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Tour Packages Activity Types'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Tour Packages'), array('controller' => 'tour_packages', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tour Package'), array('controller' => 'tour_packages', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Activity Types'), array('controller' => 'activity_types', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Activity Type'), array('controller' => 'activity_types', 'action' => 'add')); ?> </li>
	</ul>
</div>
