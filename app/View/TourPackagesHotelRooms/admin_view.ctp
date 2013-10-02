<div class="tourPackagesHotelRooms view">
     <div class="um_box_mid_content_top"><span class="umstyle1"><?php echo __('Tour Packages Hotel Room'); ?></span></div>
    <div class="content_mid">
<!--<h2><?php // echo __('Tour Packages Hotel Room'); ?></h2>-->
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($tourPackagesHotelRoom['TourPackagesHotelRoom']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tour Package'); ?></dt>
		<dd>
			<?php echo $this->Html->link($tourPackagesHotelRoom['TourPackage']['name'], array('controller' => 'tour_packages', 'action' => 'view', $tourPackagesHotelRoom['TourPackage']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Hotel Room'); ?></dt>
		<dd>
			<?php echo $this->Html->link($tourPackagesHotelRoom['HotelRoom']['name'], array('controller' => 'hotel_rooms', 'action' => 'view', $tourPackagesHotelRoom['HotelRoom']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
</div>
<?php echo $this->element('left_nav');?>