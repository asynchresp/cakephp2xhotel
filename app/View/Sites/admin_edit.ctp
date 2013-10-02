<div class="sites form">
    
    <div class="um_box_mid_content_top"><span class="umstyle1"><?php echo __('Edit Site'); ?></span></div>
    <div class="um_box_mid_content_mid">
<?php echo $this->Form->create('Site'); ?>
	<fieldset>
		<legend><?php // echo __('Edit Site'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name');
		echo $this->Form->input('description');
		echo $this->Form->input('site_base_url');
		echo $this->Form->input('site_base_path');
		echo $this->Form->input('site_logo');
		echo $this->Form->input('site_bckgrd_color');
		echo $this->Form->input('site_foregrd_color');
		echo $this->Form->input('address_line1');
		echo $this->Form->input('address_line2');
		echo $this->Form->input('zipcode');
		echo $this->Form->input('country_id');
		echo $this->Form->input('state_id');
		echo $this->Form->input('city_id');
		echo $this->Form->input('meta_title');
		echo $this->Form->input('meta_description');
		echo $this->Form->input('meta_keyword');
		//echo $this->Form->input('status');
		echo $this->Form->label('site.status');
		$options = array('1' => 'Active', '0' => 'Inactive');
		$attributes = array('legend' => false);
		echo $this->Form->radio('status', $options, $attributes);			
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
    
    </div>
</div>
<?php echo $this->element('left_nav');?>