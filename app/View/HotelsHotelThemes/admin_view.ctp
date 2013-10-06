<div class="hotelsHotelThemes view">
    <div class="um_box_mid_content_top"><span class="umstyle1"><?php echo __('Hotels Hotel Theme'); ?></span></div>
        <div class="content_mid">
<!--<h2><?php // echo __('Hotels Hotel Theme'); ?></h2>-->
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($hotelsHotelTheme['HotelsHotelTheme']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Hotel'); ?></dt>
		<dd>
			<?php echo $this->Html->link($hotelsHotelTheme['Hotel']['name'], array('controller' => 'hotels', 'action' => 'view', $hotelsHotelTheme['Hotel']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Hotel Theme'); ?></dt>
		<dd>
			<?php echo $this->Html->link($hotelsHotelTheme['HotelTheme']['name'], array('controller' => 'hotel_themes', 'action' => 'view', $hotelsHotelTheme['HotelTheme']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
</div>
<?php echo $this->element('left_nav');?>