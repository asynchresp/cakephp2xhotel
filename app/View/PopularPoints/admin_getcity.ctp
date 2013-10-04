<?php
	echo $this->Form->input('PopularPoint.city_id',array('id'=>'PopularPointCityId','label'=>'City','class'=>'{validate:{required : true, messages:{required:"Please select City"}}}','empty' => 'Select City'));
?>