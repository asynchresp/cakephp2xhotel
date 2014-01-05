<script language="javascript" type="text/javascript">

	function getStatesByAjax(countryId) {
		jQuery.ajax({
            type:'POST',
 			url:'<?php echo Router::url(array('controller'=>'taxes','action'=>'getstate'),false);?>',
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
			url:'<?php echo Router::url(array('controller'=>'taxes','action'=>'getcity'),false);?>',
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

<div class="taxes form">
    <div class="um_box_mid_content_top"><span class="umstyle1"><?php echo __('Edit Tax'); ?></span></div>
    <div class="content_mid">

<?php echo $this->Form->create('Tax'); ?>
	<fieldset>
		<!--<legend><?php // echo __('Edit Tax'); ?></legend>-->
	<?php
		echo $this->Form->input('id');
		//echo $this->Form->input('site_id');
		/*echo $this->Form->input('country_id');
		echo $this->Form->input('state_id');
		echo $this->Form->input('city_id');*/
		echo $this->Form->input('country_id', array('id' => 'TaxCountryId', 'label' => 'Country','class'=>'{validate:{required : true, messages:{required:"Please enter Country"}}}','onchange'=>"getStatesByAjax(this.value);",'empty'=>'Select Country'));
		echo '<div id="stateDiv">';
		echo $this->Form->input('state_id', array('id' => 'TaxStateId', 'label' => 'State','class'=>'{validate:{required : true, messages:{required:"Please enter State"}}}','empty'=>'Select State'));
		echo '</div>';	
		/*echo '<div id="cityDiv">';
		echo $this->Form->input('city_id',array('id'=>'TaxCityId','label'=>'City','empty'=>'','class'=>'{validate:{required : true, messages:{required:"Please select City"}}}','empty'=>'Select City'));
		echo '</div>';*/			
		echo $this->Form->input('name');
		echo $this->Form->input('description', array('class'=>'ckeditor'));
		echo $this->Form->input('tax_percentage');
		//echo $this->Form->input('status');
		echo $this->Form->label('tax.status');
		$options = array('1' => 'Active', '0' => 'Inactive');
		$attributes = array('legend' => false);
		echo $this->Form->radio('status', $options, $attributes);
		
		echo $this->Form->input('HotelRoom');
		echo $this->Form->input('Hotel');
		echo $this->Form->input('TourPackage');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
</div>
<?php echo $this->element('left_nav');?>
