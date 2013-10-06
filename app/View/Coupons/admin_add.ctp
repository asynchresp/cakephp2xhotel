<div class="coupons form">
    <div class="um_box_mid_content_top"><span class="umstyle1"><?php echo __('Add Coupon'); ?></span></div>
        <div class="content_mid">
<?php echo $this->Form->create('Coupon'); ?>
	<fieldset>
		<!--<legend><?php // echo __('Add Coupon'); ?></legend>-->
	<?php
		//echo $this->Form->input('site_id');
		echo $this->Form->input('hotel_id');
		echo $this->Form->input('room_type_id');
		echo $this->Form->input('hotel_room_id');
		echo $this->Form->input('name');
		echo $this->Form->input('description', array('class'=>'ckeditor'));
		echo $this->Form->input('coupon_code');
		echo $this->Form->input('coupon_st_date');
		echo $this->Form->input('coupon_expiry_date');
		echo $this->Form->input('min_night');
		echo $this->Form->input('max_guest');
		echo $this->Form->input('discount');
		echo $this->Form->input('meta_title');
		echo $this->Form->input('meta_description');
		echo $this->Form->input('meta_keyword');
		//echo $this->Form->input('status');
		echo $this->Form->label('coupon.status');
		$options = array('1' => 'Active', '0' => 'Inactive');
		$attributes = array('legend' => false);
		echo $this->Form->radio('status', $options, $attributes);				
		echo $this->Form->input('HotelRoom');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
</div>
<?php echo $this->element('left_nav');?>
