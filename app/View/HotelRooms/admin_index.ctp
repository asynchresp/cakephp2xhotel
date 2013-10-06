<div class="hotelRooms index">
     <div class="um_box_mid_content_top"><span class="umstyle1"><?php echo __('Hotel Rooms'); ?></span></div>
    <div class="content_mid">
	<!--<h2><?php // echo __('Hotel Rooms'); ?></h2>-->
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th><?php echo $this->Paginator->sort('room_type_id'); ?></th>
			<th><?php echo $this->Paginator->sort('hotel_id'); ?></th>
			<th><?php echo $this->Paginator->sort('city_id'); ?></th>
			<th><?php echo $this->Paginator->sort('inventory'); ?></th>
			<th><?php echo $this->Paginator->sort('room_price'); ?></th>
			<th><?php echo $this->Paginator->sort('status'); ?></th>
			
			<?php /* ?><th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('country_id'); ?></th>
			<th><?php echo $this->Paginator->sort('state_id'); ?></th>
			<th><?php echo $this->Paginator->sort('max_adults'); ?></th>
			<th><?php echo $this->Paginator->sort('max_childs'); ?></th>
			<th><?php echo $this->Paginator->sort('extra_guest_occupancy'); ?></th>
			<th><?php echo $this->Paginator->sort('short_description'); ?></th>
			<th><?php echo $this->Paginator->sort('long_description'); ?></th>
			<th><?php echo $this->Paginator->sort('no_of_beds'); ?></th>
			<th><?php echo $this->Paginator->sort('room_order'); ?></th>
			<th><?php echo $this->Paginator->sort('room_image1'); ?></th>
			<th><?php echo $this->Paginator->sort('room_image2'); ?></th>
			<th><?php echo $this->Paginator->sort('room_image3'); ?></th>
			<th><?php echo $this->Paginator->sort('room_image4'); ?></th>
			<th><?php echo $this->Paginator->sort('room_image5'); ?></th>
			<th><?php echo $this->Paginator->sort('room_video'); ?></th>
			<th><?php echo $this->Paginator->sort('food_menu_type_id'); ?></th>
			<th><?php echo $this->Paginator->sort('food_package_id'); ?></th>
			<th><?php echo $this->Paginator->sort('hotel_facility_category_id'); ?></th>
			<th><?php echo $this->Paginator->sort('hotel_facility_id'); ?></th>
			<th><?php echo $this->Paginator->sort('pricing_tax_status'); ?></th>
			<th><?php echo $this->Paginator->sort('tax_id'); ?></th>
			<th><?php echo $this->Paginator->sort('additional_guest'); ?></th>
			<th><?php echo $this->Paginator->sort('child_age_below1'); ?></th>
			<th><?php echo $this->Paginator->sort('price_age_below1'); ?></th>
			<th><?php echo $this->Paginator->sort('child_age_below2'); ?></th>
			<th><?php echo $this->Paginator->sort('price_age_below2'); ?></th>
			<th><?php echo $this->Paginator->sort('child_age_below3'); ?></th>
			<th><?php echo $this->Paginator->sort('price_age_below3'); ?></th>
			<th><?php echo $this->Paginator->sort('child_above_age1'); ?></th>
			<th><?php echo $this->Paginator->sort('price_above_age1'); ?></th>
			<th><?php echo $this->Paginator->sort('child_above_age2'); ?></th>
			<th><?php echo $this->Paginator->sort('price_above_age2'); ?></th>
			<th><?php echo $this->Paginator->sort('child_above_age3'); ?></th>
			<th><?php echo $this->Paginator->sort('price_above_age3'); ?></th>
			<th><?php echo $this->Paginator->sort('commision'); ?></th>
			<th><?php echo $this->Paginator->sort('special_price'); ?></th>
			<th><?php echo $this->Paginator->sort('special_price_earning'); ?></th>
			<th><?php echo $this->Paginator->sort('commision_customer'); ?></th>
			<th><?php echo $this->Paginator->sort('commision_customer_earining'); ?></th>
			<th><?php echo $this->Paginator->sort('commision_agent'); ?></th>
			<th><?php echo $this->Paginator->sort('commision_agent_earining'); ?></th>
			<th><?php echo $this->Paginator->sort('meta_title'); ?></th>
			<th><?php echo $this->Paginator->sort('meta_description'); ?></th>
			<th><?php echo $this->Paginator->sort('meta_keyword'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th><?php */ ?>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($hotelRooms as $hotelRoom): ?>
	<tr>
		<td><?php echo h($hotelRoom['HotelRoom']['name']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($hotelRoom['RoomType']['name'], array('controller' => 'room_types', 'action' => 'view', $hotelRoom['RoomType']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($hotelRoom['Hotel']['name'], array('controller' => 'hotels', 'action' => 'view', $hotelRoom['Hotel']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($hotelRoom['City']['name'], array('controller' => 'cities', 'action' => 'view', $hotelRoom['City']['id'])); ?>
		</td>
		<td><?php echo h($hotelRoom['HotelRoom']['inventory']); ?>&nbsp;</td>
		<td><?php echo h($hotelRoom['HotelRoom']['room_price']); ?>&nbsp;</td>
		<td><?php if(h($hotelRoom['HotelRoom']['status']) == 1) { echo "Active"; } else { echo "Inactive"; } ?>&nbsp;</td>
		
		<?php /* ?><td><?php echo h($hotelRoom['HotelRoom']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($hotelRoom['Country']['name'], array('controller' => 'countries', 'action' => 'view', $hotelRoom['Country']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($hotelRoom['State']['name'], array('controller' => 'states', 'action' => 'view', $hotelRoom['State']['id'])); ?>
		</td>
		<td><?php echo h($hotelRoom['HotelRoom']['short_description']); ?>&nbsp;</td>
		<td><?php echo h($hotelRoom['HotelRoom']['long_description']); ?>&nbsp;</td>
		<td><?php echo h($hotelRoom['HotelRoom']['max_adults']); ?>&nbsp;</td>
		<td><?php echo h($hotelRoom['HotelRoom']['max_childs']); ?>&nbsp;</td>
		<td><?php echo h($hotelRoom['HotelRoom']['extra_guest_occupancy']); ?>&nbsp;</td>
		<td><?php echo h($hotelRoom['HotelRoom']['no_of_beds']); ?>&nbsp;</td>
		<td><?php echo h($hotelRoom['HotelRoom']['room_order']); ?>&nbsp;</td>
		<td><?php echo h($hotelRoom['HotelRoom']['room_image1']); ?>&nbsp;</td>
		<td><?php echo h($hotelRoom['HotelRoom']['room_image2']); ?>&nbsp;</td>
		<td><?php echo h($hotelRoom['HotelRoom']['room_image3']); ?>&nbsp;</td>
		<td><?php echo h($hotelRoom['HotelRoom']['room_image4']); ?>&nbsp;</td>
		<td><?php echo h($hotelRoom['HotelRoom']['room_image5']); ?>&nbsp;</td>
		<td><?php echo h($hotelRoom['HotelRoom']['room_video']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($hotelRoom['FoodMenuType']['name'], array('controller' => 'food_menu_types', 'action' => 'view', $hotelRoom['FoodMenuType']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($hotelRoom['FoodPackage']['title'], array('controller' => 'food_packages', 'action' => 'view', $hotelRoom['FoodPackage']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($hotelRoom['HotelFacilityCategory']['name'], array('controller' => 'hotel_facility_categories', 'action' => 'view', $hotelRoom['HotelFacilityCategory']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($hotelRoom['HotelFacility']['name'], array('controller' => 'hotel_facilities', 'action' => 'view', $hotelRoom['HotelFacility']['id'])); ?>
		</td>
		<td><?php echo h($hotelRoom['HotelRoom']['pricing_tax_status']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($hotelRoom['Tax']['name'], array('controller' => 'taxes', 'action' => 'view', $hotelRoom['Tax']['id'])); ?>
		</td>
		<td><?php echo h($hotelRoom['HotelRoom']['additional_guest']); ?>&nbsp;</td>
		<td><?php echo h($hotelRoom['HotelRoom']['child_age_below1']); ?>&nbsp;</td>
		<td><?php echo h($hotelRoom['HotelRoom']['price_age_below1']); ?>&nbsp;</td>
		<td><?php echo h($hotelRoom['HotelRoom']['child_age_below2']); ?>&nbsp;</td>
		<td><?php echo h($hotelRoom['HotelRoom']['price_age_below2']); ?>&nbsp;</td>
		<td><?php echo h($hotelRoom['HotelRoom']['child_age_below3']); ?>&nbsp;</td>
		<td><?php echo h($hotelRoom['HotelRoom']['price_age_below3']); ?>&nbsp;</td>
		<td><?php echo h($hotelRoom['HotelRoom']['child_above_age1']); ?>&nbsp;</td>
		<td><?php echo h($hotelRoom['HotelRoom']['price_above_age1']); ?>&nbsp;</td>
		<td><?php echo h($hotelRoom['HotelRoom']['child_above_age2']); ?>&nbsp;</td>
		<td><?php echo h($hotelRoom['HotelRoom']['price_above_age2']); ?>&nbsp;</td>
		<td><?php echo h($hotelRoom['HotelRoom']['child_above_age3']); ?>&nbsp;</td>
		<td><?php echo h($hotelRoom['HotelRoom']['price_above_age3']); ?>&nbsp;</td>
		<td><?php echo h($hotelRoom['HotelRoom']['commision']); ?>&nbsp;</td>
		<td><?php echo h($hotelRoom['HotelRoom']['special_price']); ?>&nbsp;</td>
		<td><?php echo h($hotelRoom['HotelRoom']['special_price_earning']); ?>&nbsp;</td>
		<td><?php echo h($hotelRoom['HotelRoom']['commision_customer']); ?>&nbsp;</td>
		<td><?php echo h($hotelRoom['HotelRoom']['commision_customer_earining']); ?>&nbsp;</td>
		<td><?php echo h($hotelRoom['HotelRoom']['commision_agent']); ?>&nbsp;</td>
		<td><?php echo h($hotelRoom['HotelRoom']['commision_agent_earining']); ?>&nbsp;</td>
		<td><?php echo h($hotelRoom['HotelRoom']['meta_title']); ?>&nbsp;</td>
		<td><?php echo h($hotelRoom['HotelRoom']['meta_description']); ?>&nbsp;</td>
		<td><?php echo h($hotelRoom['HotelRoom']['meta_keyword']); ?>&nbsp;</td>
		<td><?php echo h($hotelRoom['HotelRoom']['modified']); ?>&nbsp;</td>
		<td><?php echo h($hotelRoom['HotelRoom']['created']); ?>&nbsp;</td><?php */ ?>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $hotelRoom['HotelRoom']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $hotelRoom['HotelRoom']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $hotelRoom['HotelRoom']['id']), null, __('Are you sure you want to delete # %s?', $hotelRoom['HotelRoom']['id'])); ?>
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
