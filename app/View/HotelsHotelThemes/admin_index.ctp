<div class="hotelsHotelThemes index">
      <div class="um_box_mid_content_top"><span class="umstyle1"><?php echo __('Hotels Hotel Themes'); ?></span></div>
        <div class="content_mid">
	<!--<h2><?php // echo __('Hotels Hotel Themes'); ?></h2>-->
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('hotel_id'); ?></th>
			<th><?php echo $this->Paginator->sort('hotel_theme_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($hotelsHotelThemes as $hotelsHotelTheme): ?>
	<tr>
		<td><?php echo h($hotelsHotelTheme['HotelsHotelTheme']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($hotelsHotelTheme['Hotel']['name'], array('controller' => 'hotels', 'action' => 'view', $hotelsHotelTheme['Hotel']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($hotelsHotelTheme['HotelTheme']['name'], array('controller' => 'hotel_themes', 'action' => 'view', $hotelsHotelTheme['HotelTheme']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $hotelsHotelTheme['HotelsHotelTheme']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $hotelsHotelTheme['HotelsHotelTheme']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $hotelsHotelTheme['HotelsHotelTheme']['id']), null, __('Are you sure you want to delete # %s?', $hotelsHotelTheme['HotelsHotelTheme']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
</div>
<?php echo $this->element('left_nav');?>