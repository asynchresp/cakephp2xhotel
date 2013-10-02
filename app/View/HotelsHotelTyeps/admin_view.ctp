<div class="hotelsHotelTyeps view">
    <div class="um_box_mid_content_top"><span class="umstyle1"><?php echo __('Hotels Hotel Tyep'); ?></span></div>
        <div class="content_mid">
<!--<h2><?php // echo __('Hotels Hotel Tyep'); ?></h2>-->
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($hotelsHotelTyep['HotelsHotelTyep']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Hotel'); ?></dt>
		<dd>
			<?php echo $this->Html->link($hotelsHotelTyep['Hotel']['name'], array('controller' => 'hotels', 'action' => 'view', $hotelsHotelTyep['Hotel']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Hotel Type'); ?></dt>
		<dd>
			<?php echo $this->Html->link($hotelsHotelTyep['HotelType']['name'], array('controller' => 'hotel_types', 'action' => 'view', $hotelsHotelTyep['HotelType']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
</div>
<?php echo $this->element('left_nav');?>