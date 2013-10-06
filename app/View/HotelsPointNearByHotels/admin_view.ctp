<div class="hotelsPointNearByHotels view">
    <div class="um_box_mid_content_top"><span class="umstyle1"><?php echo __('Hotels Point Near By Hotel'); ?></span></div>
        <div class="content_mid">
<!--<h2><?php // echo __('Hotels Point Near By Hotel'); ?></h2>-->
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($hotelsPointNearByHotel['HotelsPointNearByHotel']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Hotel'); ?></dt>
		<dd>
			<?php echo $this->Html->link($hotelsPointNearByHotel['Hotel']['name'], array('controller' => 'hotels', 'action' => 'view', $hotelsPointNearByHotel['Hotel']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Point Near By Hotel'); ?></dt>
		<dd>
			<?php echo $this->Html->link($hotelsPointNearByHotel['PointNearByHotel']['name'], array('controller' => 'point_near_by_hotels', 'action' => 'view', $hotelsPointNearByHotel['PointNearByHotel']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
</div>
<?php echo $this->element('left_nav');?>