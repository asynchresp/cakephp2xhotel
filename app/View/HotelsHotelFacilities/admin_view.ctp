<div class="hotelsHotelFacilities view">
    <div class="um_box_mid_content_top"><span class="umstyle1"><?php echo __('Hotels Hotel Facility'); ?></span></div>
        <div class="content_mid">
<!--<h2><?php // echo __('Hotels Hotel Facility'); ?></h2>-->
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($hotelsHotelFacility['HotelsHotelFacility']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Hotel'); ?></dt>
		<dd>
			<?php echo $this->Html->link($hotelsHotelFacility['Hotel']['name'], array('controller' => 'hotels', 'action' => 'view', $hotelsHotelFacility['Hotel']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Hotel Facility'); ?></dt>
		<dd>
			<?php echo $this->Html->link($hotelsHotelFacility['HotelFacility']['name'], array('controller' => 'hotel_facilities', 'action' => 'view', $hotelsHotelFacility['HotelFacility']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
</div>
<?php echo $this->element('left_nav');?>