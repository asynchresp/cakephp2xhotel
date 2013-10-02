<div class="roomTypes form">
    <div class="um_box_mid_content_top"><span class="umstyle1"><?php echo __('Add Room Type'); ?></span></div>
        <div class="content_mid">
<?php echo $this->Form->create('RoomType'); ?>
	<fieldset>
		<!--<legend><?php // echo __('Add Room Type'); ?></legend>-->
	<?php
		echo $this->Form->input('int');
		echo $this->Form->input('name');
		echo $this->Form->input('description');
		echo $this->Form->input('status');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
</div>
<?php echo $this->element('left_nav');?>
