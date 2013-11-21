<div class="foodPackages form">
    <div class="um_box_mid_content_top"><span class="umstyle1"><?php echo __('Add Food Package'); ?></span></div>
    <div class="content_mid">
<?php echo $this->Form->create('FoodPackage'); ?>
	<fieldset>
		<!--<legend><?php // echo __('Add Food Package'); ?></legend>-->
	<?php
		echo $this->Form->input('food_menu_type_id');
		echo $this->Form->input('title');
		echo $this->Form->input('child_age_below1');
		echo $this->Form->input('price_age_below1');
		echo $this->Form->input('child_age_below2');
		echo $this->Form->input('price_age_below2');
		echo $this->Form->input('child_age_below3');
		echo $this->Form->input('price_age_below3');
		echo $this->Form->input('child_above_age1');
		echo $this->Form->input('price_above_age1');
		echo $this->Form->input('child_above_age2');
		echo $this->Form->input('price_above_age2');
		echo $this->Form->input('child_above_age3');
		echo $this->Form->input('price_above_age3');
		echo $this->Form->input('upload_menu');
		echo $this->Form->input('meta_title');
		echo $this->Form->input('meta_description');
		echo $this->Form->input('meta_keyword');
		//echo $this->Form->input('status');
		echo $this->Form->label('FoodPackage.status');
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
