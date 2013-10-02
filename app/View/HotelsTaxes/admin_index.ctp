<div class="hotelsTaxes index">
     <div class="um_box_mid_content_top"><span class="umstyle1"><?php echo __('Hotels Taxes'); ?></span></div>
        <div class="content_mid">
	<!--<h2><?php // echo __('Hotels Taxes'); ?></h2>-->
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('hotel_id'); ?></th>
			<th><?php echo $this->Paginator->sort('tax_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($hotelsTaxes as $hotelsTax): ?>
	<tr>
		<td><?php echo h($hotelsTax['HotelsTax']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($hotelsTax['Hotel']['name'], array('controller' => 'hotels', 'action' => 'view', $hotelsTax['Hotel']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($hotelsTax['Tax']['name'], array('controller' => 'taxes', 'action' => 'view', $hotelsTax['Tax']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $hotelsTax['HotelsTax']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $hotelsTax['HotelsTax']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $hotelsTax['HotelsTax']['id']), null, __('Are you sure you want to delete # %s?', $hotelsTax['HotelsTax']['id'])); ?>
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