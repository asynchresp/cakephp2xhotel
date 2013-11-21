<?php
	echo $this->Form->input('Hotel.state_id',array('id'=>'HotelStateId','label'=>'State','class'=>'{validate:{required : true, messages:{required:"Please select State"}}}','onchange'=>"getCitiesByAjax(this.value);",'empty' => 'Select State'));
?>