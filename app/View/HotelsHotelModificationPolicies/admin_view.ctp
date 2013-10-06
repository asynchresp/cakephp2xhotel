<div class="hotelsHotelModificationPolicies view">
    <div class="um_box_mid_content_top"><span class="umstyle1"><?php echo __('Hotels Hotel Modification Policy'); ?></span></div>
        <div class="content_mid">
<!--<h2><?php // echo __('Hotels Hotel Modification Policy'); ?></h2>-->
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($hotelsHotelModificationPolicy['HotelsHotelModificationPolicy']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Hotel'); ?></dt>
		<dd>
			<?php echo $this->Html->link($hotelsHotelModificationPolicy['Hotel']['name'], array('controller' => 'hotels', 'action' => 'view', $hotelsHotelModificationPolicy['Hotel']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Hotel Modification Policy'); ?></dt>
		<dd>
			<?php echo $this->Html->link($hotelsHotelModificationPolicy['HotelModificationPolicy']['name'], array('controller' => 'hotel_modification_policies', 'action' => 'view', $hotelsHotelModificationPolicy['HotelModificationPolicy']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
</div>
<?php echo $this->element('left_nav');?>
