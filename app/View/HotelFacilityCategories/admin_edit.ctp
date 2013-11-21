<div class="hotelFacilityCategories form">
     <div class="um_box_mid_content_top"><span class="umstyle1"><?php echo __('Edit Hotel Facility Category'); ?></span></div>
    <div class="content_mid">
<?php echo $this->Form->create('HotelFacilityCategory',array('type'=>'file')); ?>
	<fieldset>
		<!--<legend><?php // echo __('Edit Hotel Facility Category'); ?></legend>-->
	<?php
		$data = $this->request->data;
		echo $this->Form->input('id');
		//echo $this->Form->input('site_id');
		echo $this->Form->input('name');
		echo $this->Form->input('description');
		//echo $this->Form->input('hfc_image');
		echo $this->Form->input('hfc_image', array('type' => 'file'));
		$filename = ROOT.DS."app".DS."webroot".DS."img".DS."hfc_image".DS.h($data['HotelFacilityCategory']['hfc_image_dir']).DS.h($data['HotelFacilityCategory']['hfc_image']);
		$fileExistChk = 0;
		if(file_exists($filename)) {
			$fileExistChk = 1;
			echo $this->Html->image('/app/webroot/img/hfc_image/' . h($data['HotelFacilityCategory']['hfc_image_dir'] . "/thumb_".h($data['HotelFacilityCategory']['hfc_image'])), array('alt'=>h($data['HotelFacilityCategory']['name'])));
		} else {
			echo $this->Html->image('/app/webroot/img/admin/thumb_no_image.png', array('alt'=>h($data['HotelFacilityCategory']['name'])));
		}
		if($fileExistChk == 1) {	
        echo $this->Form->input('hotel_facility_categories.hfc_image.remove', array('type' => 'checkbox', 'label' => 'Remove existing file'));
		}		
		echo $this->Form->input('hfc_order');
		echo $this->Form->input('meta_title');
		echo $this->Form->input('meta_description');
		echo $this->Form->input('meta_keyword');
		//echo $this->Form->input('status');
		echo $this->Form->label('hotelfacilitycategory.status');
		$options = array('1' => 'Active', '0' => 'Inactive');
		$attributes = array('legend' => false);
		echo $this->Form->radio('status', $options, $attributes);
		
		/*echo $this->Form->input('HotelFacility');
		echo $this->Form->input('HotelRoom');
		echo $this->Form->input('Hotel');*/
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
</div>
<?php echo $this->element('left_nav');?>