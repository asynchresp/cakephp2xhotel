<?php
	echo $this->Form->input('Area.state_id',array('id'=>'AreaStateId','label'=>'State','class'=>'{validate:{required : true, messages:{required:"Please select State"}}}','onchange'=>"getCitiesByAjax(this.value);",'empty' => 'Select State'));
?>