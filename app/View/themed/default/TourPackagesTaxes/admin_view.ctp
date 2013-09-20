<div class="tourPackagesTaxes view">
<h2><?php echo __('Tour Packages Tax'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($tourPackagesTax['TourPackagesTax']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tour Package'); ?></dt>
		<dd>
			<?php echo $this->Html->link($tourPackagesTax['TourPackage']['name'], array('controller' => 'tour_packages', 'action' => 'view', $tourPackagesTax['TourPackage']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tax'); ?></dt>
		<dd>
			<?php echo $this->Html->link($tourPackagesTax['Tax']['name'], array('controller' => 'taxes', 'action' => 'view', $tourPackagesTax['Tax']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Tour Packages Tax'), array('action' => 'edit', $tourPackagesTax['TourPackagesTax']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Tour Packages Tax'), array('action' => 'delete', $tourPackagesTax['TourPackagesTax']['id']), null, __('Are you sure you want to delete # %s?', $tourPackagesTax['TourPackagesTax']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Tour Packages Taxes'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tour Packages Tax'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Tour Packages'), array('controller' => 'tour_packages', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tour Package'), array('controller' => 'tour_packages', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Taxes'), array('controller' => 'taxes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tax'), array('controller' => 'taxes', 'action' => 'add')); ?> </li>
	</ul>
</div>
