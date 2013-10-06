<div class="hotelFacilityCategories index">
    <div class="um_box_mid_content_top"><span class="umstyle1"><?php echo __('Hotel Facility Categories'); ?></span></div>
    <div class="content_mid">
	<!--<h2><?php // echo __('Hotel Facility Categories'); ?></h2>-->
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th><?php echo $this->Paginator->sort('hfc_order'); ?></th>
			<th><?php echo $this->Paginator->sort('status'); ?></th>

			<?php /* ?><th><?php echo $this->Paginator->sort('site_id'); ?></th>
			<th><?php echo $this->Paginator->sort('description'); ?></th>
			<th><?php echo $this->Paginator->sort('hfc_image'); ?></th>
			<th><?php echo $this->Paginator->sort('meta_title'); ?></th>
			<th><?php echo $this->Paginator->sort('meta_description'); ?></th>
			<th><?php echo $this->Paginator->sort('meta_keyword'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th><?php */ ?>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($hotelFacilityCategories as $hotelFacilityCategory): ?>
	<tr>
		<td><?php echo h($hotelFacilityCategory['HotelFacilityCategory']['id']); ?>&nbsp;</td>
		<td><?php echo h($hotelFacilityCategory['HotelFacilityCategory']['name']); ?>&nbsp;</td>
		<td><?php echo h($hotelFacilityCategory['HotelFacilityCategory']['hfc_order']); ?>&nbsp;</td>
		<td><?php if(h($hotelFacilityCategory['HotelFacilityCategory']['status']) == 1) { echo "Active"; } else { echo "Inactive"; } ?>&nbsp;</td>

		<?php /* ?><td><?php echo h($hotelFacilityCategory['HotelFacilityCategory']['description']); ?>&nbsp;</td>
		<td><?php echo h($hotelFacilityCategory['HotelFacilityCategory']['hfc_image']); ?>&nbsp;</td>
		<td><?php echo h($hotelFacilityCategory['HotelFacilityCategory']['meta_title']); ?>&nbsp;</td>
		<td><?php echo h($hotelFacilityCategory['HotelFacilityCategory']['meta_description']); ?>&nbsp;</td>
		<td><?php echo h($hotelFacilityCategory['HotelFacilityCategory']['meta_keyword']); ?>&nbsp;</td>
		<td><?php echo h($hotelFacilityCategory['HotelFacilityCategory']['modified']); ?>&nbsp;</td>
		<td><?php echo h($hotelFacilityCategory['HotelFacilityCategory']['created']); ?>&nbsp;</td><?php */ ?>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $hotelFacilityCategory['HotelFacilityCategory']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $hotelFacilityCategory['HotelFacilityCategory']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $hotelFacilityCategory['HotelFacilityCategory']['id']), null, __('Are you sure you want to delete # %s?', $hotelFacilityCategory['HotelFacilityCategory']['id'])); ?>
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
