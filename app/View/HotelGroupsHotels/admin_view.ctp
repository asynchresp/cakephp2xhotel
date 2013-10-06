<div class="hotelGroupsHotels view">
    <div class="um_box_mid_content_top"><span class="umstyle1"><?php echo __('Hotel Groups Hotel'); ?></span></div>
    <div class="content_mid">
<!--<h2><?php // echo __('Hotel Groups Hotel'); ?></h2>-->
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($hotelGroupsHotel['HotelGroupsHotel']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Hotel Group'); ?></dt>
		<dd>
			<?php echo $this->Html->link($hotelGroupsHotel['HotelGroup']['name'], array('controller' => 'hotel_groups', 'action' => 'view', $hotelGroupsHotel['HotelGroup']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Hotel'); ?></dt>
		<dd>
			<?php echo $this->Html->link($hotelGroupsHotel['Hotel']['name'], array('controller' => 'hotels', 'action' => 'view', $hotelGroupsHotel['Hotel']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
</div>
<?php echo $this->element('left_nav');?>
