<?php
	echo $this->Form->input('Area.city_id',array('id'=>'AreaCityId','label'=>'City','class'=>'{validate:{required : true, messages:{required:"Please select City"}}}','empty' => 'Select City'));
?>