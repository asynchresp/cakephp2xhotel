<?php
	echo $this->Form->input('Tax.state_id',array('id'=>'TaxStateId','label'=>'State','class'=>'{validate:{required : true, messages:{required:"Please select State"}}}','onchange'=>"getCitiesByAjax(this.value);",'empty' => 'Select State'));
?>