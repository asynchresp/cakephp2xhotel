<div class="couponsHotelRooms view">
    <div class="um_box_mid_content_top"><span class="umstyle1"><?php echo __('Coupons Hotel Room'); ?></span></div>
    <div class="content_mid">
<!--<h2><?php // echo __('Coupons Hotel Room'); ?></h2>-->
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($couponsHotelRoom['CouponsHotelRoom']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Coupon'); ?></dt>
		<dd>
			<?php echo $this->Html->link($couponsHotelRoom['Coupon']['name'], array('controller' => 'coupons', 'action' => 'view', $couponsHotelRoom['Coupon']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Hotel Room'); ?></dt>
		<dd>
			<?php echo $this->Html->link($couponsHotelRoom['HotelRoom']['name'], array('controller' => 'hotel_rooms', 'action' => 'view', $couponsHotelRoom['HotelRoom']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
</div>
<?php echo $this->element('left_nav');?>