<div class="pointNearByHotels form">
    <div class="um_box_mid_content_top"><span class="umstyle1"><?php echo __('Edit Point Near By Hotel'); ?></span></div>
        <div class="content_mid">
<?php echo $this->Form->create('PointNearByHotel'); ?>
	<fieldset>
		<!--<legend><?php // echo __('Edit Point Near By Hotel'); ?></legend>-->
	<?php
		echo $this->Form->input('id');
		//echo $this->Form->input('site_id');
		echo $this->Form->input('name');
		echo $this->Form->input('description');
		echo $this->Form->input('country_id');
		echo $this->Form->input('state_id');
		echo $this->Form->input('city_id');
		echo $this->Form->input('area');
		echo $this->Form->input('latitude');
		echo $this->Form->input('longitude');
		//echo $this->Form->input('image');
		echo $this->Form->input('image', array('type' => 'file'));		
		echo $this->Form->input('meta_title');
		echo $this->Form->input('meta_description');
		echo $this->Form->input('meta_keyword');
		echo $this->Form->input('status');
		echo $this->Form->input('Hotel');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
</div>
<?php echo $this->element('left_nav');?>
