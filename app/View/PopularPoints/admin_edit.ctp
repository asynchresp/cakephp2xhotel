<div class="popularPoints form">
    <div class="um_box_mid_content_top"><span class="umstyle1"><?php echo __('Edit Popular Point'); ?></span></div>
        <div class="content_mid">
<?php echo $this->Form->create('PopularPoint'); ?>
	<fieldset>
		<!--<legend><?php // echo __('Edit Popular Point'); ?></legend>-->
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('site_id');
		echo $this->Form->input('name');
		echo $this->Form->input('description');
		echo $this->Form->input('activity_type_id');
		echo $this->Form->input('best_time_visit_to');
		echo $this->Form->input('best_time_visit_from');
		echo $this->Form->input('suitable');
		echo $this->Form->input('age_group');
		echo $this->Form->input('entry_fees');
		echo $this->Form->input('country_id');
		echo $this->Form->input('state_id');
		echo $this->Form->input('city_id');
		echo $this->Form->input('area');
		echo $this->Form->input('latitude');
		echo $this->Form->input('longitude');
		echo $this->Form->input('visit_duration');
		echo $this->Form->input('opening_time');
		echo $this->Form->input('closing_time');
		echo $this->Form->input('pp_image');
		echo $this->Form->input('pp_video');
		echo $this->Form->input('meta_title');
		echo $this->Form->input('meta_description');
		echo $this->Form->input('meta_keyword');
		echo $this->Form->input('status');
		echo $this->Form->input('TourPackage');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
</div>
<?php echo $this->element('left_nav');?>