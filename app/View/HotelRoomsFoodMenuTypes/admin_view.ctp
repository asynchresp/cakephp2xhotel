<div class="hotelRoomsFoodMenuTypes view">
    <div class="um_box_mid_content_top"><span class="umstyle1"><?php echo __('Hotel Rooms Food Menu Type'); ?></span></div>
    <div class="content_mid">
<!--<h2><?php // echo __('Hotel Rooms Food Menu Type'); ?></h2>-->
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($hotelRoomsFoodMenuType['HotelRoomsFoodMenuType']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Hotel Room'); ?></dt>
		<dd>
			<?php echo $this->Html->link($hotelRoomsFoodMenuType['HotelRoom']['name'], array('controller' => 'hotel_rooms', 'action' => 'view', $hotelRoomsFoodMenuType['HotelRoom']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Food Menu Type'); ?></dt>
		<dd>
			<?php echo $this->Html->link($hotelRoomsFoodMenuType['FoodMenuType']['name'], array('controller' => 'food_menu_types', 'action' => 'view', $hotelRoomsFoodMenuType['FoodMenuType']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
</div>
<?php echo $this->element('left_nav');?>
