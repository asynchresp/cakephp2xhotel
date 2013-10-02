<div class="tourPackagesActivityTypes view">
    <div class="um_box_mid_content_top"><span class="umstyle1"><?php echo __('Tour Packages Activity Type'); ?></span></div>
    <div class="content_mid">
<!--<h2><?php // echo __('Tour Packages Activity Type'); ?></h2>-->
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
</div>
<?php echo $this->element('left_nav');?>
