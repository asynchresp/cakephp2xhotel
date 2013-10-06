<div class="hotelRoomsTaxes view">
    <div class="um_box_mid_content_top"><span class="umstyle1"><?php echo __('Hotel Rooms Tax'); ?></span></div>
        <div class="content_mid">
<!--<h2><?php // echo __('Hotel Rooms Tax'); ?></h2>-->
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($hotelRoomsTax['HotelRoomsTax']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Hotel Room'); ?></dt>
		<dd>
			<?php echo $this->Html->link($hotelRoomsTax['HotelRoom']['name'], array('controller' => 'hotel_rooms', 'action' => 'view', $hotelRoomsTax['HotelRoom']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tax'); ?></dt>
		<dd>
			<?php echo $this->Html->link($hotelRoomsTax['Tax']['name'], array('controller' => 'taxes', 'action' => 'view', $hotelRoomsTax['Tax']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
</div>
<?php echo $this->element('left_nav');?>