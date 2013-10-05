<?php
	//pr($this->request->data);
	//pr($cities);
	echo $this->Form->input('Site.city_id',array('id'=>'SiteCityId','label'=>'City','class'=>'{validate:{required : true, messages:{required:"Please select City"}}}','empty' => 'Select City'));
?>