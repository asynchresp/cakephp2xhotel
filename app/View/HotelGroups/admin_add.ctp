<div class="hotelGroups form">
    <div class="um_box_mid_content_top"><span class="umstyle1"><?php echo __('Add Hotel Group'); ?></span></div>
    <div class="content_mid">
<?php echo $this->Form->create('HotelGroup',array('type'=>'file')); ?>
	<fieldset>
		<!--<legend><?php // echo __('Add Hotel Group'); ?></legend>-->
	<?php
		//echo $this->Form->input('site_id');
		echo $this->Form->input('name');
		echo $this->Form->input('description', array('class'=>'ckeditor'));
		//echo $this->Form->input('hotel_group_logo');
        echo $this->Form->input('hotel_group_logo', array('type' => 'file'));
		
		echo $this->Form->input('group_order');
		echo $this->Form->input('meta_title');
		echo $this->Form->input('meta_description');
		echo $this->Form->input('meta_keyword');
		//echo $this->Form->input('status');
		echo $this->Form->label('hotelgroups.status');
		$options = array('1' => 'Active', '0' => 'Inactive');
		$attributes = array('legend' => false);
		echo $this->Form->radio('status', $options, $attributes);		
		
		echo $this->Form->input('Hotel');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
</div>
<?php echo $this->element('left_nav');?>
