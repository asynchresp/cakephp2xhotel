<div class="tourPackagesPopularPoints form">
    <div class="um_box_mid_content_top"><span class="umstyle1"><?php echo __('Add Tour Packages Popular Point'); ?></span></div>
    <div class="content_mid">
<?php echo $this->Form->create('TourPackagesPopularPoint'); ?>
	<fieldset>
		<!--<legend><?php // echo __('Add Tour Packages Popular Point'); ?></legend>-->
	<?php
		echo $this->Form->input('tour_package_id');
		echo $this->Form->input('popular_point_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
</div>
<?php echo $this->element('left_nav');?>
