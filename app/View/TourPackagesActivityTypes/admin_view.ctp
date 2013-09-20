<div class="tourPackagesActivityTypes view">
<h2><?php echo __('Tour Packages Activity Type'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($tourPackagesActivityType['TourPackagesActivityType']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tour Package'); ?></dt>
		<dd>
			<?php echo $this->Html->link($tourPackagesActivityType['TourPackage']['name'], array('controller' => 'tour_packages', 'action' => 'view', $tourPackagesActivityType['TourPackage']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Activity Type'); ?></dt>
		<dd>
			<?php echo $this->Html->link($tourPackagesActivityType['ActivityType']['name'], array('controller' => 'activity_types', 'action' => 'view', $tourPackagesActivityType['ActivityType']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Tour Packages Activity Type'), array('action' => 'edit', $tourPackagesActivityType['TourPackagesActivityType']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Tour Packages Activity Type'), array('action' => 'delete', $tourPackagesActivityType['TourPackagesActivityType']['id']), null, __('Are you sure you want to delete # %s?', $tourPackagesActivityType['TourPackagesActivityType']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Tour Packages Activity Types'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tour Packages Activity Type'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Tour Packages'), array('controller' => 'tour_packages', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tour Package'), array('controller' => 'tour_packages', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Activity Types'), array('controller' => 'activity_types', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Activity Type'), array('controller' => 'activity_types', 'action' => 'add')); ?> </li>
	</ul>
</div>
