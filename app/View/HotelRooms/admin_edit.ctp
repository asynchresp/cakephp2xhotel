<script language="javascript" type="text/javascript">
	function getStatesByAjax(countryId) {
		jQuery.ajax({
            type:'POST',
 			url:'<?php echo Router::url(array('controller'=>'hotel_rooms','action'=>'getstate'),false);?>',
            data:'country_id='+countryId,
            success:function(data){
                $('#stateDiv').html(data);
				getCitiesByAjax(0);
            },
            error:function(message){
                alert(message);
            }
        });	
	}
	
	function getCitiesByAjax(stateId){
       
        jQuery.ajax({
            type:'POST',
			url:'<?php echo Router::url(array('controller'=>'hotel_rooms','action'=>'getcity'),false);?>',
            data:'state_id='+stateId,
            success:function(data){
                $('#cityDiv').html(data);
            },
            error:function(message){
                alert(message);
            }
        });
       
    }
	
</script>
<div class="hotelRooms form">
    <div class="um_box_mid_content_top"><span class="umstyle1"><?php echo __('Edit Hotel Room'); ?></span></div>
    <div class="content_mid">
<?php echo $this->Form->create('HotelRoom',array('type'=>'file')); ?>
	<fieldset>
		<!--<legend><?php // echo __('Edit Hotel Room'); ?></legend>-->
	<?php
		$data = $this->request->data;
		echo $this->Form->input('id');
		/*echo $this -> Form -> input('country_id', array('id'=>'HotelRoomCountryId', 'label'=>'Country','class'=>'{validate:{required : true, messages:{required:"Please enter Country"}}}','onchange'=>"getStatesByAjax(this.value);",'empty'=>'Select Country'));
		echo '<div id="stateDiv">';
		echo $this -> Form -> input('state_id', array('id'=>'HotelRoomStateId', 'label'=>'State','class'=>'{validate:{required : true, messages:{required:"Please enter State"}}}','onchange'=>"getCitiesByAjax(this.value);",'empty'=>'Select State'));
		echo '</div>';	
		echo '<div id="cityDiv">';
		echo $this->Form->input('city_id',array('id'=>'HotelRoomCityId','label'=>'City','class'=>'{validate:{required : true, messages:{required:"Please select City"}}}','empty'=>'Select City'));
		echo '</div>';*/
		echo $this->Form->input('hotel_id');
		echo $this->Form->input('room_type_id');
		echo $this->Form->input('inventory');
		echo $this->Form->input('name');
		echo $this->Form->input('short_description');
		echo $this->Form->input('long_description', array('class'=>'ckeditor'));
		echo $this->Form->input('max_adults');
		echo $this->Form->input('max_childs');
		echo $this->Form->input('extra_guest_occupancy');
		echo $this->Form->input('no_of_beds');
		echo $this->Form->input('room_order');
		echo $this->Form->input('room_image1',array('type'=>'file'));
		$RoomImgDir1 = $data['HotelRoom']['id'];
		$filename = ROOT.DS."app".DS."webroot".DS."img".DS."room_image1".DS.h($RoomImgDir1).DS.h($data['HotelRoom']['room_image1']);
		$fileExistChk1 = 0;
		if(file_exists($filename)) {
			$fileExistChk1 = 1;
			echo $this->Html->image('/app/webroot/img/room_image1/' . h($RoomImgDir1 . "/thumb_".h($data['HotelRoom']['room_image1'])), array('alt'=>h($data['HotelRoom']['name'])));
		} else {
			echo $this->Html->image('/app/webroot/img/admin/thumb_no_image.png', array('alt'=>h($data['HotelRoom']['name'])));
		}
		if($fileExistChk1 == 1) {	
        echo $this->Form->input('HotelRoom.room_image1.remove', array('type' => 'checkbox', 'label' => 'Remove existing file'));
		}		
		
		echo $this->Form->input('room_image2',array('type'=>'file'));
		$RoomImgDir2 = $data['HotelRoom']['id'];
		$filename = ROOT.DS."app".DS."webroot".DS."img".DS."room_image2".DS.h($RoomImgDir2).DS.h($data['HotelRoom']['room_image2']);
		$fileExistChk2 = 0;
		if(file_exists($filename)) {
			$fileExistChk2 = 1;
			echo $this->Html->image('/app/webroot/img/room_image2/' . h($RoomImgDir2 . "/thumb_".h($data['HotelRoom']['room_image2'])), array('alt'=>h($data['HotelRoom']['name'])));
		} else {
			echo $this->Html->image('/app/webroot/img/admin/thumb_no_image.png', array('alt'=>h($data['HotelRoom']['name'])));
		}
		if($fileExistChk2 == 1) {	
        echo $this->Form->input('HotelRoom.room_image2.remove', array('type' => 'checkbox', 'label' => 'Remove existing file'));
		}
				
		echo $this->Form->input('room_image3',array('type'=>'file'));
		$RoomImgDir3 = $data['HotelRoom']['id'];
		$filename = ROOT.DS."app".DS."webroot".DS."img".DS."room_image3".DS.h($RoomImgDir3).DS.h($data['HotelRoom']['room_image3']);
		$fileExistChk3 = 0;
		if(file_exists($filename)) {
			$fileExistChk3 = 1;
			echo $this->Html->image('/app/webroot/img/room_image3/' . h($RoomImgDir3 . "/thumb_".h($data['HotelRoom']['room_image3'])), array('alt'=>h($data['HotelRoom']['name'])));
		} else {
			echo $this->Html->image('/app/webroot/img/admin/thumb_no_image.png', array('alt'=>h($data['HotelRoom']['name'])));
		}
		if($fileExistChk3 == 1) {	
        echo $this->Form->input('HotelRoom.room_image3.remove', array('type' => 'checkbox', 'label' => 'Remove existing file'));
		}		
		echo $this->Form->input('room_image4',array('type'=>'file'));
		$RoomImgDir4 = $data['HotelRoom']['id'];
		$filename = ROOT.DS."app".DS."webroot".DS."img".DS."room_image4".DS.h($RoomImgDir4).DS.h($data['HotelRoom']['room_image4']);
		$fileExistChk4 = 0;
		if(file_exists($filename)) {
			$fileExistChk4 = 1;
			echo $this->Html->image('/app/webroot/img/room_image4/' . h($RoomImgDir4 . "/thumb_".h($data['HotelRoom']['room_image4'])), array('alt'=>h($data['HotelRoom']['name'])));
		} else {
			echo $this->Html->image('/app/webroot/img/admin/thumb_no_image.png', array('alt'=>h($data['HotelRoom']['name'])));
		}
		if($fileExistChk4 == 1) {	
        echo $this->Form->input('HotelRoom.room_image4.remove', array('type' => 'checkbox', 'label' => 'Remove existing file'));
		}
		echo $this->Form->input('room_image5',array('type'=>'file'));
		$RoomImgDir5 = $data['HotelRoom']['id'];
		$filename = ROOT.DS."app".DS."webroot".DS."img".DS."room_image5".DS.h($RoomImgDir5).DS.h($data['HotelRoom']['room_image5']);
		$fileExistChk5 = 0;
		if(file_exists($filename)) {
			$fileExistChk5 = 1;
			echo $this->Html->image('/app/webroot/img/room_image5/' . h($RoomImgDir5 . "/thumb_".h($data['HotelRoom']['room_image5'])), array('alt'=>h($data['HotelRoom']['name'])));
		} else {
			echo $this->Html->image('/app/webroot/img/admin/thumb_no_image.png', array('alt'=>h($data['HotelRoom']['name'])));
		}
		if($fileExistChk5 == 1) {	
        echo $this->Form->input('HotelRoom.room_image5.remove', array('type' => 'checkbox', 'label' => 'Remove existing file'));
		}

		echo $this->Form->input('room_video',array('type'=>'file'));
		//echo $filename = ROOT.DS."app".DS."webroot".DS."img".DS."room_video".DS.h($data['HotelRoom']['id']).DS.h($data['Hotel']['room_video']);
		$videofile = FULL_BASE_URL.'/hotel/app/webroot/img/room_video/' . h($data['HotelRoom']['id']) . "/".h($data['HotelRoom']['room_video']);
		
		
		echo $this->Form->input('food_menu_type_id');
		echo $this->Form->input('food_package_id');
		echo $this->Form->input('hotel_facility_category_id');
		echo $this->Form->input('hotel_facility_id', array('type' => 'hidden'));
		echo $this->Form->input('HotelFacility');
		echo $this->Form->input('room_price');
		echo $this->Form->input('pricing_tax_status');
		echo $this->Form->input('tax_id');
		echo $this->Form->input('additional_guest');
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
		echo $this->Form->input('commision');
		echo $this->Form->input('special_price');
		echo $this->Form->input('special_price_earning');
		echo $this->Form->input('commision_customer');
		echo $this->Form->input('commision_customer_earining');
		echo $this->Form->input('commision_agent');
		echo $this->Form->input('commision_agent_earining');
		echo $this->Form->input('meta_title');
		echo $this->Form->input('meta_description');
		echo $this->Form->input('meta_keyword');
		//echo $this->Form->input('status');
		echo $this->Form->label('hotelroom.status');
		$options = array('1' => 'Active', '0' => 'Inactive');
		$attributes = array('legend' => false);
		echo $this->Form->radio('status', $options, $attributes);		
		echo $this->Form->input('Coupon');
		/*echo $this->Form->input('FoodMenuType');
		echo $this->Form->input('FoodPackage');
		echo $this->Form->input('HotelFacility');
		echo $this->Form->input('HotelFacilityCategory');
		echo $this->Form->input('Tax');*/
		echo $this->Form->input('TourPackage');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
</div>
<?php echo $this->element('left_nav');?>
