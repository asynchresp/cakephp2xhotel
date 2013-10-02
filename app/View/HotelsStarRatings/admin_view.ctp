<div class="hotelsStarRatings view">
    <div class="um_box_mid_content_top"><span class="umstyle1"><?php echo __('Hotels Star Rating'); ?></span></div>
        <div class="content_mid">
<!--<h2><?php // echo __('Hotels Star Rating'); ?></h2>-->
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($hotelsStarRating['HotelsStarRating']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Hotel'); ?></dt>
		<dd>
			<?php echo $this->Html->link($hotelsStarRating['Hotel']['name'], array('controller' => 'hotels', 'action' => 'view', $hotelsStarRating['Hotel']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Star Rating'); ?></dt>
		<dd>
			<?php echo $this->Html->link($hotelsStarRating['StarRating']['name'], array('controller' => 'star_ratings', 'action' => 'view', $hotelsStarRating['StarRating']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
</div>
<?php echo $this->element('left_nav');?>