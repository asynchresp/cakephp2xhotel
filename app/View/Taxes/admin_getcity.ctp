<?php
	//pr($this->request->data);
	//pr($cities);
	echo $this->Form->input('Tax.city_id',array('id'=>'TaxCityId','label'=>'City','class'=>'{validate:{required : true, messages:{required:"Please select City"}}}','empty' => 'Select City'));
?>