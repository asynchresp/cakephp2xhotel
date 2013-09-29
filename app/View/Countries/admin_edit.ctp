<div class="countries form">
    <div class="um_box_mid_content_top"><span class="umstyle1"><?php echo __('Edit Country'); ?></span></div>
        <div class="content_mid">
<?php echo $this->Form->create('Country'); ?>
	<fieldset>
		<!--<legend><?php // echo __('Edit Country'); ?></legend>-->
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name');
		echo $this->Form->input('description');
		//echo $this->Form->input('status');
		echo $this->Form->label('country.status');
		$options = array('1' => 'Active', '0' => 'Inactive');
		$attributes = array('legend' => false);
		echo $this->Form->radio('status', $options, $attributes);		
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
</div>
<?php echo $this->element('left_nav');?>
