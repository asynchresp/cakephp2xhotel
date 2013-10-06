<div class="tourPackagesPopularPoints view">
    <div class="um_box_mid_content_top"><span class="umstyle1"><?php echo __('Tour Packages Popular Point'); ?></span></div>
    <div class="content_mid">
<!--<h2><?php // echo __('Tour Packages Popular Point'); ?></h2>-->
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
</div>
<?php echo $this->element('left_nav');?>
