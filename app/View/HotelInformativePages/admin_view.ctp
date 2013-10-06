<div class="hotelInformativePages view">
    <div class="um_box_mid_content_top"><span class="umstyle1"><?php echo __('Hotel Informative Page'); ?></span></div>
    <div class="content_mid">
<!--<h2><?php // echo __('Hotel Informative Page'); ?></h2>-->
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($hotelInformativePage['HotelInformativePage']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Site'); ?></dt>
		<dd>
			<?php echo $this->Html->link($hotelInformativePage['Site']['name'], array('controller' => 'sites', 'action' => 'view', $hotelInformativePage['Site']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Hotel'); ?></dt>
		<dd>
			<?php echo $this->Html->link($hotelInformativePage['Hotel']['name'], array('controller' => 'hotels', 'action' => 'view', $hotelInformativePage['Hotel']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($hotelInformativePage['HotelInformativePage']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Short Description'); ?></dt>
		<dd>
			<?php echo html_entity_decode(h($hotelInformativePage['HotelInformativePage']['short_description'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Long Description'); ?></dt>
		<dd>
			<?php echo html_entity_decode(h($hotelInformativePage['HotelInformativePage']['long_description'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Meta Title'); ?></dt>
		<dd>
			<?php echo h($hotelInformativePage['HotelInformativePage']['meta_title']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Meta Description'); ?></dt>
		<dd>
			<?php echo h($hotelInformativePage['HotelInformativePage']['meta_description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Meta Keyword'); ?></dt>
		<dd>
			<?php echo h($hotelInformativePage['HotelInformativePage']['meta_keyword']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Status'); ?></dt>
		<dd>
			<?php if(h($hotelInformativePage['HotelInformativePage']['status']) == 1) { echo "Active"; } else { echo "Inactive"; } ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($hotelInformativePage['HotelInformativePage']['modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($hotelInformativePage['HotelInformativePage']['created']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
</div>
<?php echo $this->element('left_nav');?>
