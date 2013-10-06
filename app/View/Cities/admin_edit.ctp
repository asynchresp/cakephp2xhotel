<script language="javascript" type="text/javascript">

	function getStatesByAjax(countryId) {
		jQuery.ajax({
            type:'POST',
 			url:'<?php echo Router::url(array('controller'=>'cities','action'=>'getstate'),false);?>',
            data:'country_id='+countryId,
            success:function(data){
                $('#stateDiv').html(data);
            },
            error:function(message){
                alert(message);
            }
        });	
	}
	
</script>
<div class="cities form">
    <div class="um_box_mid_content_top"><span class="umstyle1"><?php echo __('Edit City'); ?></span></div>
        <div class="content_mid">
<?php echo $this->Form->create('City'); ?>
	<fieldset>
		<!--<legend><?php // echo __('Edit City'); ?></legend>-->
	<?php
		echo $this->Form->input('id');
		/*echo $this->Form->input('country_id');
		echo $this->Form->input('state_id');*/
		echo $this->Form->input('country_id', array('id' => 'CityCountryId', 'label' => 'Country','class'=>'{validate:{required : true, messages:{required:"Please enter Country"}}}','onchange'=>"getStatesByAjax(this.value);",'empty'=>'Select Country'));
		echo '<div id="stateDiv">';
		echo $this->Form->input('state_id', array('id' => 'CityStateId', 'label' => 'State','class'=>'{validate:{required : true, messages:{required:"Please enter State"}}}','empty'=>'Select State'));
		echo '</div>';			
		echo $this->Form->input('name');
		echo $this->Form->input('description', array('class'=>'ckeditor'));
		//echo $this->Form->input('status');
		echo $this->Form->label('city.status');
		$options = array('1' => 'Active', '0' => 'Inactive');
		$attributes = array('legend' => false);
		echo $this->Form->radio('status', $options, $attributes);		
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
</div>
<?php echo $this->element('left_nav');?>
