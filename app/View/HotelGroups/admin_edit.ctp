<div class="hotelGroups form">
    <div class="um_box_mid_content_top"><span class="umstyle1"><?php echo __('Edit Hotel Group'); ?></span></div>
    <div class="content_mid">
<?php echo $this->Form->create('HotelGroup',array('type'=>'file')); ?>
	<fieldset>
		<!--<legend><?php // echo __('Edit Hotel Group'); ?></legend>-->
	<?php
		$data = $this->request->data;
		echo $this->Form->input('id');
		echo $this->Form->input('site_id');
		echo $this->Form->input('name');
		echo $this->Form->input('description', array('class'=>'ckeditor'));
		//echo $this->Form->input('hotel_group_logo');
        //echo $this->Form->input('hotel_group_logo', array('type' => 'file'));
		echo $this->Form->input('hotel_group_logo',array('type'=>'file'));
		$filename = ROOT.DS."app".DS."webroot".DS."img".DS."hotel_group_logo".DS.h($data['HotelGroup']['hotel_group_logo_dir']).DS.h($data['HotelGroup']['hotel_group_logo']);
		$fileExistChk = 0;
		if(file_exists($filename)) {
			$fileExistChk = 1;
			echo $this->Html->image('/app/webroot/img/hotel_group_logo/' . h($data['HotelGroup']['hotel_group_logo_dir'] . "/thumb_".h($data['HotelGroup']['hotel_group_logo'])), array('alt'=>h($data['HotelGroup']['name'])));
		} else {
			echo $this->Html->image('/app/webroot/img/admin/thumb_no_image.png', array('alt'=>h($data['HotelGroup']['name'])));
		}
		if($fileExistChk == 1) {	
        echo $this->Form->input('hotelgroups.hotel_group_logo.remove', array('type' => 'checkbox', 'label' => 'Remove existing file'));
		}		
		
		echo $this->Form->input('group_order');
		echo $this->Form->input('meta_title');
		echo $this->Form->input('meta_description');
		echo $this->Form->input('meta_keyword');
		//echo $this->Form->input('status');
		echo $this->Form->label('hotelgroups.status');
		$options = array('1' => 'Active', '0' => 'Inactive');
		$attributes = array('legend' => false);
		echo $this->Form->radio('status', $options, $attributes);		
		
		//echo $this->Form->input('Hotel');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
</div>
<?php echo $this->element('left_nav');?>
