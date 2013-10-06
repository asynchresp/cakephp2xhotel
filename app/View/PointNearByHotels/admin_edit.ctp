<script language="javascript" type="text/javascript">

	function getStatesByAjax(countryId) {
		jQuery.ajax({
            type:'POST',
 			url:'<?php echo Router::url(array('controller'=>'point_near_by_hotels','action'=>'getstate'),false);?>',
            data:'country_id='+countryId,
            success:function(data){
                $('#stateDiv').html(data);
            },
            error:function(message){
                alert(message);
            }
        });	
	}

	function getCitiesByAjax(stateId){
       
        jQuery.ajax({
            type:'POST',
 			url:'<?php echo Router::url(array('controller'=>'point_near_by_hotels','action'=>'getcity'),false);?>',
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
<div class="pointNearByHotels form">
    <div class="um_box_mid_content_top"><span class="umstyle1"><?php echo __('Edit Point Near By Hotel'); ?></span></div>
        <div class="content_mid">
<?php echo $this->Form->create('PointNearByHotel',array('type'=>'file')); ?>
	<fieldset>
		<!--<legend><?php // echo __('Edit Point Near By Hotel'); ?></legend>-->
	<?php
		$data = $this->request->data;
		
		echo $this->Form->input('id');
		echo $this->Form->input('name');
		echo $this->Form->input('description', array('class'=>'ckeditor'));
		echo $this -> Form -> input('country_id', array('id' => 'PointNearByHotelCountryId', 'label' => 'Country','class'=>'{validate:{required : true, messages:{required:"Please enter Country"}}}','onchange'=>"getStatesByAjax(this.value);",'empty'=>'Select Country'));
		echo '<div id="stateDiv">';
		echo $this -> Form -> input('state_id', array('id' => 'PointNearByHotelStateId', 'label' => 'State','class'=>'{validate:{required : true, messages:{required:"Please enter State"}}}','onchange'=>"getCitiesByAjax(this.value);",'empty'=>'Select State'));
		echo '</div>';	
		echo '<div id="cityDiv">';
		echo $this->Form->input('city_id',array('id'=>'PointNearByHotelCityId','label'=>'City','empty'=>'','class'=>'{validate:{required : true, messages:{required:"Please select City"}}}','empty'=>'Select City'));
		echo '</div>';			
		echo $this->Form->input('area');
		echo $this->Form->input('latitude');
		echo $this->Form->input('longitude');
			
		echo $this->Form->input('image', array('type' => 'file'));
		$filename = ROOT.DS."app".DS."webroot".DS."img".DS."point_near_by_hotel_image".DS.h($data['PointNearByHotel']['image_dir']).DS.h($data['PointNearByHotel']['image']);
		if(file_exists($filename)) {
			echo $this->Html->image('/app/webroot/img/point_near_by_hotel_image/' . h($data['PointNearByHotel']['image_dir'] . "/thumb_".h($data['PointNearByHotel']['image'])), array('alt'=>h($data['PointNearByHotel']['name'])));
		} else {
			echo $this->Html->image('/app/webroot/img/admin/thumb_no_image.png', array('alt'=>h($data['PointNearByHotel']['name'])));
		}
		echo $this->Form->input('PointNearByHotel.image.remove', array('type' => 'checkbox', 'label' => 'Remove existing file'));
		
		echo $this->Form->input('meta_title');
		echo $this->Form->input('meta_description');
		echo $this->Form->input('meta_keyword');
		//echo $this->Form->input('status');
		echo $this->Form->label('PointNearByHotel.status');
		$options = array('1' => 'Active', '0' => 'Inactive');
		$attributes = array('legend' => false);
		echo $this->Form->radio('status', $options, $attributes);	
		echo $this->Form->input('Hotel');
		/*echo $this->Form->input('site_id');
		echo $this->Form->input('country_id');
		echo $this->Form->input('state_id');
		echo $this->Form->input('city_id');*/
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
</div>
<?php echo $this->element('left_nav');?>
