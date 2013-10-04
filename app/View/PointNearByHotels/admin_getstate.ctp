<?php
	echo $this->Form->input('PointNearByHotel.state_id',array('id'=>'PointNearByHotelStateId','label'=>'State','class'=>'{validate:{required : true, messages:{required:"Please select State"}}}','onchange'=>"getCitiesByAjax(this.value);",'empty' => 'Select State'));
?>