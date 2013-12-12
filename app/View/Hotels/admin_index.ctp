<div class="hotels index">
     <div class="um_box_mid_content_top"><span class="umstyle1"><?php echo __('Hotels'); ?></span>
         <span style="float: right">Add New Hotel</span>
     </div>
        <div class="content_mid">
	<!--<h2><?php // echo __('Hotels'); ?></h2>-->
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th><?php echo $this->Paginator->sort('hotel_type_id'); ?></th>
			<?php /* ?><th><?php echo $this->Paginator->sort('hotel_group_id'); ?></th><?php */ ?>
			<th><?php echo $this->Paginator->sort('area'); ?></th>
			<th><?php echo $this->Paginator->sort('city_id'); ?></th>
			<th><?php echo $this->Paginator->sort('state_id'); ?></th>
			<th><?php echo $this->Paginator->sort('country_id'); ?></th>
			<th><?php echo $this->Paginator->sort('hotel_order'); ?></th>
			<th><?php echo $this->Paginator->sort('status'); ?></th>
			
			
			<?php /* ?><th><?php echo $this->Paginator->sort('site_id'); ?></th>
			<th><?php echo $this->Paginator->sort('short_description'); ?></th>
			<th><?php echo $this->Paginator->sort('long_description'); ?></th>
			<th><?php echo $this->Paginator->sort('hotel_logo'); ?></th>
			<th><?php echo $this->Paginator->sort('point_near_by_hotel'); ?></th>
			<th><?php echo $this->Paginator->sort('hotel_theme_id'); ?></th>
			<th><?php echo $this->Paginator->sort('address_line1'); ?></th>
			<th><?php echo $this->Paginator->sort('address_line2'); ?></th>
			<th><?php echo $this->Paginator->sort('latitude'); ?></th>
			<th><?php echo $this->Paginator->sort('longitude'); ?></th>
			<th><?php echo $this->Paginator->sort('star_rating_id'); ?></th>
			<th><?php echo $this->Paginator->sort('checkindatetime'); ?></th>
			<th><?php echo $this->Paginator->sort('checkoutdatetime'); ?></th>
			<th><?php echo $this->Paginator->sort('hotel_facility_category_id'); ?></th>
			<th><?php echo $this->Paginator->sort('hotel_facility_id'); ?></th>
			<th><?php echo $this->Paginator->sort('hotel_image'); ?></th>
			<th><?php echo $this->Paginator->sort('hotel_video'); ?></th>
			<th><?php echo $this->Paginator->sort('pricing_tax_status'); ?></th>
			<th><?php echo $this->Paginator->sort('hotel_tax'); ?></th>
			<th><?php echo $this->Paginator->sort('meta_title'); ?></th>
			<th><?php echo $this->Paginator->sort('meta_description'); ?></th>
			<th><?php echo $this->Paginator->sort('meta_keyword'); ?></th>
			<th><?php echo $this->Paginator->sort('main_keyword_tag'); ?></th>
			<th><?php echo $this->Paginator->sort('nearby_location_tag'); ?></th>
			<th><?php echo $this->Paginator->sort('hotel_cancellation_policy_id'); ?></th>
			<th><?php echo $this->Paginator->sort('hotel_modification_policy_id'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th><?php */ ?>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($hotels as $hotel): ?>
	<tr>
		<td><?php echo h($hotel['Hotel']['id']); ?>&nbsp;</td>
		<td><?php echo h($hotel['Hotel']['name']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($hotel['HotelType']['name'], array('controller' => 'hotel_types', 'action' => 'view', $hotel['HotelType']['id'])); ?>
		</td>
		<?php /* ?><td>
			<?php echo $this->Html->link($hotel['HotelGroup']['name'], array('controller' => 'hotel_groups', 'action' => 'view', $hotel['HotelGroup']['id'])); ?>
		</td><?php */ ?>
		<td><?php echo h($hotel['Hotel']['area']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($hotel['City']['name'], array('controller' => 'cities', 'action' => 'view', $hotel['City']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($hotel['State']['name'], array('controller' => 'states', 'action' => 'view', $hotel['State']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($hotel['Country']['name'], array('controller' => 'countries', 'action' => 'view', $hotel['Country']['id'])); ?>
		</td>
		<td><?php echo h($hotel['Hotel']['hotel_order']); ?>&nbsp;</td>
		<td><?php if(h($hotel['Hotel']['status']) == 1) { echo "Active"; } else { echo "Inactive"; } ?>&nbsp;</td>
		
		
		<?php /* ?><td>
			<?php echo $this->Html->link($hotel['Site']['name'], array('controller' => 'sites', 'action' => 'view', $hotel['Site']['id'])); ?>
		</td>
		<td><?php echo h($hotel['Hotel']['short_description']); ?>&nbsp;</td>
		<td><?php echo h($hotel['Hotel']['long_description']); ?>&nbsp;</td>
		<td><?php echo h($hotel['Hotel']['hotel_logo']); ?>&nbsp;</td>
		<td><?php echo h($hotel['Hotel']['point_near_by_hotel']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($hotel['HotelTheme']['name'], array('controller' => 'hotel_themes', 'action' => 'view', $hotel['HotelTheme']['id'])); ?>
		</td>
		<td><?php echo h($hotel['Hotel']['address_line1']); ?>&nbsp;</td>
		<td><?php echo h($hotel['Hotel']['address_line2']); ?>&nbsp;</td>
		<td><?php echo h($hotel['Hotel']['latitude']); ?>&nbsp;</td>
		<td><?php echo h($hotel['Hotel']['longitude']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($hotel['StarRating']['name'], array('controller' => 'star_ratings', 'action' => 'view', $hotel['StarRating']['id'])); ?>
		</td>
		<td><?php echo h($hotel['Hotel']['checkindatetime']); ?>&nbsp;</td>
		<td><?php echo h($hotel['Hotel']['checkoutdatetime']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($hotel['HotelFacilityCategory']['name'], array('controller' => 'hotel_facility_categories', 'action' => 'view', $hotel['HotelFacilityCategory']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($hotel['HotelFacility']['name'], array('controller' => 'hotel_facilities', 'action' => 'view', $hotel['HotelFacility']['id'])); ?>
		</td>
		<td><?php echo h($hotel['Hotel']['hotel_image']); ?>&nbsp;</td>
		<td><?php echo h($hotel['Hotel']['hotel_video']); ?>&nbsp;</td>
		<td><?php echo h($hotel['Hotel']['pricing_tax_status']); ?>&nbsp;</td>
		<td><?php echo h($hotel['Hotel']['hotel_tax']); ?>&nbsp;</td>
		<td><?php echo h($hotel['Hotel']['meta_title']); ?>&nbsp;</td>
		<td><?php echo h($hotel['Hotel']['meta_description']); ?>&nbsp;</td>
		<td><?php echo h($hotel['Hotel']['meta_keyword']); ?>&nbsp;</td>
		<td><?php echo h($hotel['Hotel']['main_keyword_tag']); ?>&nbsp;</td>
		<td><?php echo h($hotel['Hotel']['nearby_location_tag']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($hotel['HotelCancellationPolicy']['name'], array('controller' => 'hotel_cancellation_policies', 'action' => 'view', $hotel['HotelCancellationPolicy']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($hotel['HotelModificationPolicy']['name'], array('controller' => 'hotel_modification_policies', 'action' => 'view', $hotel['HotelModificationPolicy']['id'])); ?>
		</td>
		<td><?php echo h($hotel['Hotel']['modified']); ?>&nbsp;</td>
		<td><?php echo h($hotel['Hotel']['created']); ?>&nbsp;</td><?php */ ?>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $hotel['Hotel']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $hotel['Hotel']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $hotel['Hotel']['id']), null, __('Are you sure you want to delete # %s?', $hotel['Hotel']['id'])); ?>
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