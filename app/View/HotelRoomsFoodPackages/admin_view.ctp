<div class="hotelRoomsFoodPackages view">
     <div class="um_box_mid_content_top"><span class="umstyle1"><?php echo __('Hotel Rooms Food Package'); ?></span></div>
    <div class="content_mid">
<!--<h2><?php // echo __('Hotel Rooms Food Package'); ?></h2>-->
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($hotelRoomsFoodPackage['HotelRoomsFoodPackage']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Hotel Room'); ?></dt>
		<dd>
			<?php echo $this->Html->link($hotelRoomsFoodPackage['HotelRoom']['name'], array('controller' => 'hotel_rooms', 'action' => 'view', $hotelRoomsFoodPackage['HotelRoom']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Food Package'); ?></dt>
		<dd>
			<?php echo $this->Html->link($hotelRoomsFoodPackage['FoodPackage']['title'], array('controller' => 'food_packages', 'action' => 'view', $hotelRoomsFoodPackage['FoodPackage']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
</div>
<?php echo $this->element('left_nav');?>