<div class="hotelsHotelCancellationPolicies view">
    <div class="um_box_mid_content_top"><span class="umstyle1"><?php echo __('Hotels Hotel Cancellation Policy'); ?></span></div>
        <div class="content_mid">
<!--<h2><?php // echo __('Hotels Hotel Cancellation Policy'); ?></h2>-->
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($hotelsHotelCancellationPolicy['HotelsHotelCancellationPolicy']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Hotel'); ?></dt>
		<dd>
			<?php echo $this->Html->link($hotelsHotelCancellationPolicy['Hotel']['name'], array('controller' => 'hotels', 'action' => 'view', $hotelsHotelCancellationPolicy['Hotel']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Hotel Cancellation Policy'); ?></dt>
		<dd>
			<?php echo $this->Html->link($hotelsHotelCancellationPolicy['HotelCancellationPolicy']['name'], array('controller' => 'hotel_cancellation_policies', 'action' => 'view', $hotelsHotelCancellationPolicy['HotelCancellationPolicy']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
</div>
<?php echo $this->element('left_nav');?>