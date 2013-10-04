<?php
	echo $this->Form->input('HotelRoom.state_id',array('id'=>'HotelRoomStateId','label'=>'State','class'=>'{validate:{required : true, messages:{required:"Please select State"}}}','onchange'=>"getCitiesByAjax(this.value);",'empty' => 'Select State'));
?>