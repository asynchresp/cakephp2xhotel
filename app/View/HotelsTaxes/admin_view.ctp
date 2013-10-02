<div class="hotelsTaxes view">
    <div class="um_box_mid_content_top"><span class="umstyle1"><?php echo __('Hotels Tax'); ?></span></div>
        <div class="content_mid">
<!--<h2><?php // echo __('Hotels Tax'); ?></h2>-->
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($hotelsTax['HotelsTax']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Hotel'); ?></dt>
		<dd>
			<?php echo $this->Html->link($hotelsTax['Hotel']['name'], array('controller' => 'hotels', 'action' => 'view', $hotelsTax['Hotel']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tax'); ?></dt>
		<dd>
			<?php echo $this->Html->link($hotelsTax['Tax']['name'], array('controller' => 'taxes', 'action' => 'view', $hotelsTax['Tax']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
</div>
<?php echo $this->element('left_nav');?>
