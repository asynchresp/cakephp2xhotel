<div class="activityTypes form">
    <div class="um_box_mid_content_top"><span class="umstyle1"><?php echo __('Sites'); ?></span></div>
        <div class="content_mid">
<?php echo $this->Form->create('ActivityType'); ?>
	<fieldset>
		<legend><?php echo __('Edit Activity Type'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('site_id');
		echo $this->Form->input('name');
		echo $this->Form->input('description');
		echo $this->Form->input('meta_title');
		echo $this->Form->input('meta_description');
		echo $this->Form->input('meta_keyword');
		echo $this->Form->input('status');
		echo $this->Form->input('TourPackage');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
</div>
    
<?php echo $this->element('left_nav');?>
