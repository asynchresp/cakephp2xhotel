<div class="tourPackagesPopularPoints form">
<?php echo $this->Form->create('TourPackagesPopularPoint'); ?>
	<fieldset>
		<legend><?php echo __('Add Tour Packages Popular Point'); ?></legend>
	<?php
		echo $this->Form->input('tour_package_id');
		echo $this->Form->input('popular_point_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Tour Packages Popular Points'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Tour Packages'), array('controller' => 'tour_packages', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tour Package'), array('controller' => 'tour_packages', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Popular Points'), array('controller' => 'popular_points', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Popular Point'), array('controller' => 'popular_points', 'action' => 'add')); ?> </li>
	</ul>
</div>
