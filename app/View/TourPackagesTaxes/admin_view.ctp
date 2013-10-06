<div class="tourPackagesTaxes view">
    <div class="um_box_mid_content_top"><span class="umstyle1"><?php echo __('Tour Packages Tax'); ?></span></div>
    <div class="content_mid">
<!--<h2><?php // echo __('Tour Packages Tax'); ?></h2>-->
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
</div>
<?php echo $this->element('left_nav');?>
