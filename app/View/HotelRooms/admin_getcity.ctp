<?php
	//pr($this->request->data);
	//pr($cities);
	echo $this->Form->input('HotelRoom.city_id',array('id'=>'HotelRoomCityId','label'=>'City','class'=>'{validate:{required : true, messages:{required:"Please select City"}}}','empty' => 'Select City'));
?>