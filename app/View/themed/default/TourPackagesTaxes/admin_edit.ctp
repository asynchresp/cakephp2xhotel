<div class="tourPackagesTaxes form">
<?php echo $this->Form->create('TourPackagesTax'); ?>
	<fieldset>
		<legend><?php echo __('Edit Tour Packages Tax'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('tour_package_id');
		echo $this->Form->input('tax_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('TourPackagesTax.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('TourPackagesTax.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Tour Packages Taxes'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Tour Packages'), array('controller' => 'tour_packages', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tour Package'), array('controller' => 'tour_packages', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Taxes'), array('controller' => 'taxes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tax'), array('controller' => 'taxes', 'action' => 'add')); ?> </li>
	</ul>
</div>
