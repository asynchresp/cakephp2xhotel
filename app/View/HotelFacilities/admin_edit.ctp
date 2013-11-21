<div class="hotelFacilities form">
    <div class="um_box_mid_content_top"><span class="umstyle1"><?php echo __('Edit Hotel Facility'); ?></span></div>
    <div class="content_mid">
<?php echo $this->Form->create('HotelFacility',array('type'=>'file')); ?>
	<fieldset>
		<!--<legend><?php // echo __('Edit Hotel Facility'); ?></legend>-->
	<?php
		$data = $this->request->data;
		//pr($data);
		echo $this->Form->input('id');
		//echo $this->Form->input('site_id');
		echo $this->Form->input('hotel_facility_category_id');
		echo $this->Form->input('name');
		echo $this->Form->input('description', array('class'=>'ckeditor'));
		echo $this->Form->input('hf_order');
		//echo $this->Form->input('hf_image');
	
		
		echo $this->Form->input('hf_image', array('type' => 'file'));
		$filename = ROOT.DS."app".DS."webroot".DS."img".DS."hf_image".DS.h($data['HotelFacility']['hf_image_dir']).DS.h($data['HotelFacility']['hf_image']);
		if(file_exists($filename)) {
			echo $this->Html->image('/app/webroot/img/hf_image/' . h($data['HotelFacility']['hf_image_dir'] . "/thumb_".h($data['HotelFacility']['hf_image'])), array('alt'=>h($data['HotelFacility']['name'])));
		} else {
			echo $this->Html->image('/app/webroot/img/admin/thumb_no_image.png', array('alt'=>h($data['HotelFacility']['name'])));
		}
		echo $this->Form->input('HotelFacility.hf_image.remove', array('type' => 'checkbox', 'label' => 'Remove existing file'));
		
		echo $this->Form->input('show_at_checkout');
		echo $this->Form->input('price_for_adults');
		echo $this->Form->input('child_age_above');
		echo $this->Form->input('price_above_age');
		echo $this->Form->input('no_extra_charges');
		echo $this->Form->input('depends_upon_bill');
		echo $this->Form->input('meta_title');
		echo $this->Form->input('meta_description');
		echo $this->Form->input('meta_keyword');
		//echo $this->Form->input('status');
		echo $this->Form->label('hotelfacility.status');
		$options = array('1' => 'Active', '0' => 'Inactive');
		$attributes = array('legend' => false);
		echo $this->Form->radio('status', $options, $attributes);		
		
		/*echo $this->Form->input('HotelFacilityCategory');
		echo $this->Form->input('HotelRoom');
		echo $this->Form->input('Hotel');*/
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
</div>
<?php echo $this->element('left_nav');?>
