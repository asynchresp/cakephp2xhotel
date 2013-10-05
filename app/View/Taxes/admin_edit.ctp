<script language="javascript" type="text/javascript">

	function getStatesByAjax(countryId) {
		jQuery.ajax({
            type:'POST',
 			url:'<?php echo Router::url(array('controller'=>'taxes','action'=>'getstate'),false);?>',
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
<?php echo $this->Form->create('Tax'); ?>
	<fieldset>
		<legend><?php echo __('Edit Tax'); ?></legend>
	<?php
		echo $this->Form->input('id');
		//echo $this->Form->input('site_id');
		/*echo $this->Form->input('country_id');
		echo $this->Form->input('state_id');
		echo $this->Form->input('city_id');*/
		echo $this->Form->input('country_id', array('id' => 'TaxCountryId', 'label' => 'Country','class'=>'{validate:{required : true, messages:{required:"Please enter Country"}}}','onchange'=>"getStatesByAjax(this.value);",'empty'=>'Select Country'));
		echo '<div id="stateDiv">';
		echo $this->Form->input('state_id', array('id' => 'TaxStateId', 'label' => 'State','class'=>'{validate:{required : true, messages:{required:"Please enter State"}}}','onchange'=>"getCitiesByAjax(this.value);",'empty'=>'Select State'));
		echo '</div>';	
		echo '<div id="cityDiv">';
		echo $this->Form->input('city_id',array('id'=>'TaxCityId','label'=>'City','empty'=>'','class'=>'{validate:{required : true, messages:{required:"Please select City"}}}','empty'=>'Select City'));
		echo '</div>';			
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
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Tax.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Tax.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Taxes'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Sites'), array('controller' => 'sites', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Site'), array('controller' => 'sites', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Countries'), array('controller' => 'countries', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Country'), array('controller' => 'countries', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List States'), array('controller' => 'states', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New State'), array('controller' => 'states', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Cities'), array('controller' => 'cities', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New City'), array('controller' => 'cities', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Hotel Rooms'), array('controller' => 'hotel_rooms', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Hotel Room'), array('controller' => 'hotel_rooms', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Tour Packages'), array('controller' => 'tour_packages', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tour Package'), array('controller' => 'tour_packages', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Hotels'), array('controller' => 'hotels', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Hotel'), array('controller' => 'hotels', 'action' => 'add')); ?> </li>
	</ul>
</div>
