<div class="foodMenuTypes form">
    <div class="um_box_mid_content_top"><span class="umstyle1"><?php echo __('Edit Food Menu Type'); ?></span></div>
    <div class="content_mid">
<?php echo $this->Form->create('FoodMenuType'); ?>
	<fieldset>
		<!--<legend><?php // echo __('Edit Food Menu Type'); ?></legend>-->
	<?php
		echo $this->Form->input('id');
		//echo $this->Form->input('site_id');
		echo $this->Form->input('name');
		echo $this->Form->input('description', array('class'=>'ckeditor'));
		echo $this->Form->input('meta_title');
		echo $this->Form->input('meta_description');
		echo $this->Form->input('meta_keyword');
		//echo $this->Form->input('status');
		echo $this->Form->label('FoodMenuType.status');
		$options = array('1' => 'Active', '0' => 'Inactive');
		$attributes = array('legend' => false);
		echo $this->Form->radio('status', $options, $attributes);			
		//echo $this->Form->input('HotelRoom');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
</div>
<?php echo $this->element('left_nav');?>
