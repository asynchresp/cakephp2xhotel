<div class="tourPackagesPopularPoints view">
<h2><?php echo __('Tour Packages Popular Point'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($tourPackagesPopularPoint['TourPackagesPopularPoint']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tour Package'); ?></dt>
		<dd>
			<?php echo $this->Html->link($tourPackagesPopularPoint['TourPackage']['name'], array('controller' => 'tour_packages', 'action' => 'view', $tourPackagesPopularPoint['TourPackage']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Popular Point'); ?></dt>
		<dd>
			<?php echo $this->Html->link($tourPackagesPopularPoint['PopularPoint']['name'], array('controller' => 'popular_points', 'action' => 'view', $tourPackagesPopularPoint['PopularPoint']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Tour Packages Popular Point'), array('action' => 'edit', $tourPackagesPopularPoint['TourPackagesPopularPoint']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Tour Packages Popular Point'), array('action' => 'delete', $tourPackagesPopularPoint['TourPackagesPopularPoint']['id']), null, __('Are you sure you want to delete # %s?', $tourPackagesPopularPoint['TourPackagesPopularPoint']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Tour Packages Popular Points'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tour Packages Popular Point'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Tour Packages'), array('controller' => 'tour_packages', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tour Package'), array('controller' => 'tour_packages', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Popular Points'), array('controller' => 'popular_points', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Popular Point'), array('controller' => 'popular_points', 'action' => 'add')); ?> </li>
	</ul>
</div>
