<script language="javascript" type="text/javascript">

	function getStatesByAjax(countryId) {
		jQuery.ajax({
            type:'POST',
 			url:'<?php echo Router::url(array('controller'=>'popular_points','action'=>'getstate'),false);?>',
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
 			url:'<?php echo Router::url(array('controller'=>'popular_points','action'=>'getcity'),false);?>',
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
<div class="popularPoints form">
    <div class="um_box_mid_content_top"><span class="umstyle1"><?php echo __('Edit Popular Point'); ?></span></div>
        <div class="content_mid">
<?php echo $this->Form->create('PopularPoint',array('type'=>'file')); ?>
	<fieldset>
		<!--<legend><?php // echo __('Edit Popular Point'); ?></legend>-->
	<?php
		$data = $this->request->data;
		
		echo $this->Form->input('id');
		//echo $this->Form->input('site_id');
		echo $this->Form->input('name');
		echo $this->Form->input('description', array('class'=>'ckeditor'));
		echo $this->Form->input('activity_type_id');
		echo $this->Form->input('best_time_visit_to');
		echo $this->Form->input('best_time_visit_from');
		echo $this->Form->input('suitable');
		echo $this->Form->input('age_group');
		echo $this->Form->input('entry_fees');
		/*echo $this->Form->input('country_id');
		echo $this->Form->input('state_id');
		echo $this->Form->input('city_id');*/
		echo $this -> Form -> input('country_id', array('id' => 'PopularPointCountryId', 'label' => 'Country','class'=>'{validate:{required : true, messages:{required:"Please enter Country"}}}','onchange'=>"getStatesByAjax(this.value);",'empty'=>'Select Country'));
		echo '<div id="stateDiv">';
		echo $this -> Form -> input('state_id', array('id' => 'PopularPointStateId', 'label' => 'State','class'=>'{validate:{required : true, messages:{required:"Please enter State"}}}','onchange'=>"getCitiesByAjax(this.value);",'empty'=>'Select State'));
		echo '</div>';	
		echo '<div id="cityDiv">';
		echo $this->Form->input('city_id',array('id'=>'PopularPointCityId','label'=>'City','empty'=>'','class'=>'{validate:{required : true, messages:{required:"Please select City"}}}','empty'=>'Select City'));
		echo '</div>';			
		echo $this->Form->input('area');
		echo $this->Form->input('latitude');
		echo $this->Form->input('longitude');
		echo $this->Form->input('visit_duration');
		echo $this->Form->input('opening_time');
		echo $this->Form->input('closing_time');
		//echo $this->Form->input('pp_image');
		
		echo $this->Form->input('pp_image',array('type'=>'file'));
		$filename = ROOT.DS."app".DS."webroot".DS."img".DS."popular_point_image".DS.h($data['PopularPoint']['pp_image_dir']).DS.h($data['PopularPoint']['pp_image']);
		if(file_exists($filename)) {
			echo $this->Html->image('/app/webroot/img/popular_point_image/' . h($data['PopularPoint']['pp_image_dir'] . "/thumb_".h($data['PopularPoint']['pp_image'])), array('alt'=>h($data['PopularPoint']['name'])));
		} else {
			echo $this->Html->image('/app/webroot/img/admin/thumb_no_image.png', array('alt'=>h($data['PopularPoint']['name'])));
		}
		echo $this->Form->input('pp_video');
		echo $this->Form->input('meta_title');
		echo $this->Form->input('meta_description');
		echo $this->Form->input('meta_keyword');
		//echo $this->Form->input('status');
		echo $this->Form->label('popularpoints.status');
		$options = array('1' => 'Active', '0' => 'Inactive');
		$attributes = array('legend' => false);
		echo $this->Form->radio('status', $options, $attributes);		
		echo $this->Form->input('TourPackage');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
</div>
<?php echo $this->element('left_nav');?>
