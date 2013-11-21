<script language="javascript" type="text/javascript">
	function getStatesByAjax(countryId) {
		jQuery.ajax({
            type:'POST',
 			url:'<?php echo Router::url(array('controller'=>'sites','action'=>'getstate'),false);?>',
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
			url:'<?php echo Router::url(array('controller'=>'sites','action'=>'getcity'),false);?>',
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
<div class="sites form">    
    <div class="um_box_mid_content_top"><span class="umstyle1"><?php echo __('Edit Site'); ?></span></div>
    <div class="um_box_mid_content_mid">
<?php echo $this->Form->create('Site',array('type'=>'file')); ?>
	<fieldset>
		<legend><?php // echo __('Edit Site'); ?></legend>
	<?php
		$data = $this->request->data;
		
		echo $this->Form->input('id');
		echo $this->Form->input('name');
		echo $this->Form->input('description', array('class'=>'ckeditor'));
		echo $this->Form->input('site_base_url');
		echo $this->Form->input('site_base_path');
		 
		echo $this->Form->input('site_logo',array('type'=>'file'));
		$filename = ROOT.DS."app".DS."webroot".DS."img".DS."site_logo".DS.h($data['Site']['site_logo_dir']).DS.h($data['Site']['site_logo']);
		$fileExistChk = 0;
		if(file_exists($filename)) {
			$fileExistChk = 1;
			echo $this->Html->image('/app/webroot/img/site_logo/' . h($data['Site']['site_logo_dir'] . "/thumb_".h($data['Site']['site_logo'])), array('alt'=>h($data['Site']['name'])));
		} else {
			echo $this->Html->image('/app/webroot/img/admin/thumb_no_image.png', array('alt'=>h($data['Site']['name'])));
		}
		if($fileExistChk == 1) {	
        echo $this->Form->input('Site.site_logo.remove', array('type' => 'checkbox', 'label' => 'Remove existing file'));
		}
		echo $this->Form->input('site_bckgrd_color');
		echo $this->Form->input('site_foregrd_color');
		echo $this->Form->input('address_line1');
		echo $this->Form->input('address_line2');
		echo $this->Form->input('zipcode');
		/*echo $this->Form->input('country_id');
		echo $this->Form->input('state_id');
		echo $this->Form->input('city_id');*/
		echo $this -> Form -> input('country_id', array('id' => 'SiteCountryId', 'label' => 'Country','class'=>'{validate:{required : true, messages:{required:"Please enter Country"}}}','onchange'=>"getStatesByAjax(this.value);",'empty'=>'Select Country'));
		echo '<div id="stateDiv">';
		echo $this -> Form -> input('state_id', array('id' => 'SiteStateId', 'label' => 'State','class'=>'{validate:{required : true, messages:{required:"Please enter State"}}}','onchange'=>"getCitiesByAjax(this.value);",'empty'=>'Select State'));
		echo '</div>';	
		echo '<div id="cityDiv">';
		echo $this->Form->input('city_id',array('id'=>'SiteCityId','label'=>'City','empty'=>'','class'=>'{validate:{required : true, messages:{required:"Please select City"}}}','empty'=>'Select City'));
		echo '</div>';		
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
