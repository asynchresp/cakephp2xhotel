<?php
	echo $this->Form->input('PointNearByHotel.city_id',array('id'=>'PointNearByHotelCityId','label'=>'City','class'=>'{validate:{required : true, messages:{required:"Please select City"}}}','empty' => 'Select City'));
?>