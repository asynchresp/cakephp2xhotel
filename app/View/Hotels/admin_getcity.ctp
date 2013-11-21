<?php
	echo $this->Form->input('Hotel.city_id',array('id'=>'HotelCityId','label'=>'City','class'=>'{validate:{required : true, messages:{required:"Please select City"}}}','empty' => 'Select City'));
?>