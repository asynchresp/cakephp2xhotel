<div class="hotelsHotelFacilityCategories view">
     <div class="um_box_mid_content_top"><span class="umstyle1"><?php echo __('Hotels Hotel Facility Category'); ?></span></div>
        <div class="content_mid">
<!--<h2><?php // echo __('Hotels Hotel Facility Category'); ?></h2>-->
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($hotelsHotelFacilityCategory['HotelsHotelFacilityCategory']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Hotel'); ?></dt>
		<dd>
			<?php echo $this->Html->link($hotelsHotelFacilityCategory['Hotel']['name'], array('controller' => 'hotels', 'action' => 'view', $hotelsHotelFacilityCategory['Hotel']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Hotel Facility Category'); ?></dt>
		<dd>
			<?php echo $this->Html->link($hotelsHotelFacilityCategory['HotelFacilityCategory']['name'], array('controller' => 'hotel_facility_categories', 'action' => 'view', $hotelsHotelFacilityCategory['HotelFacilityCategory']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
</div>
<?php echo $this->element('left_nav');?>