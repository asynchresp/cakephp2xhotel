<?php
	echo $this->Form->input('City.state_id',array('id'=>'CityStateId','label'=>'State','class'=>'{validate:{required : true, messages:{required:"Please select State"}}}','empty' => 'Select State'));
?>