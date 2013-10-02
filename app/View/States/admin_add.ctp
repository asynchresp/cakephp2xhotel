<div class="states form">
    <div class="um_box_mid_content_top"><span class="umstyle1"><?php echo __('Add State'); ?></span></div>
    <div class="content_mid">
<?php echo $this->Form->create('State'); ?>
	<fieldset>
		<!--<legend><?php // echo __('Add State'); ?></legend>-->
	<?php
		echo $this->Form->input('country_id');
		echo $this->Form->input('name');
		echo $this->Form->input('description');
		//echo $this->Form->input('status');
		echo $this->Form->label('atate.status');
		$options = array('1' => 'Active', '0' => 'Inactive');
		$attributes = array('legend' => false);
		echo $this->Form->radio('status', $options, $attributes);		
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
</div>
<?php echo $this->element('left_nav');?>