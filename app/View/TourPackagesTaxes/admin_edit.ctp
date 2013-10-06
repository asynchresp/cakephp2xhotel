<div class="tourPackagesTaxes form">
    <div class="um_box_mid_content_top"><span class="umstyle1"><?php echo __('Edit Tour Packages Tax'); ?></span></div>
    <div class="content_mid">
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
</div>
<?php echo $this->element('left_nav');?>
