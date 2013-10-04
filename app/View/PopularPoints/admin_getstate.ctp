<?php
	echo $this->Form->input('PopularPoint.state_id',array('id'=>'PopularPointStateId','label'=>'State','class'=>'{validate:{required : true, messages:{required:"Please select State"}}}','onchange'=>"getCitiesByAjax(this.value);",'empty' => 'Select State'));
?>