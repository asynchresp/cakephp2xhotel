<div class="tourPackages view">
     <div class="um_box_mid_content_top"><span class="umstyle1"><?php echo __('Tour Package'); ?></span></div>
    <div class="content_mid">
<!--<h2><?php // echo __('Tour Package'); ?></h2>-->
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($tourPackage['TourPackage']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Site'); ?></dt>
		<dd>
			<?php echo $this->Html->link($tourPackage['Site']['name'], array('controller' => 'sites', 'action' => 'view', $tourPackage['Site']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Hotel'); ?></dt>
		<dd>
			<?php echo $this->Html->link($tourPackage['Hotel']['name'], array('controller' => 'hotels', 'action' => 'view', $tourPackage['Hotel']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Room Type'); ?></dt>
		<dd>
			<?php echo $this->Html->link($tourPackage['RoomType']['name'], array('controller' => 'room_types', 'action' => 'view', $tourPackage['RoomType']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Hotel Room'); ?></dt>
		<dd>
			<?php echo $this->Html->link($tourPackage['HotelRoom']['name'], array('controller' => 'hotel_rooms', 'action' => 'view', $tourPackage['HotelRoom']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($tourPackage['TourPackage']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Short Description'); ?></dt>
		<dd>
			<?php echo html_entity_decode(h($tourPackage['TourPackage']['short_description'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Long Description'); ?></dt>
		<dd>
			<?php echo html_entity_decode(h($tourPackage['TourPackage']['long_description'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tp Order'); ?></dt>
		<dd>
			<?php echo h($tourPackage['TourPackage']['tp_order']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('No Person'); ?></dt>
		<dd>
			<?php echo h($tourPackage['TourPackage']['no_person']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Activity Type'); ?></dt>
		<dd>
			<?php echo $this->Html->link($tourPackage['ActivityType']['name'], array('controller' => 'activity_types', 'action' => 'view', $tourPackage['ActivityType']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('St Pt State'); ?></dt>
		<dd>
			<?php echo h($tourPackage['TourPackage']['st_pt_state']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('St Pt City'); ?></dt>
		<dd>
			<?php echo h($tourPackage['TourPackage']['st_pt_city']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('St Pt Area'); ?></dt>
		<dd>
			<?php echo h($tourPackage['TourPackage']['st_pt_area']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('End Pt State'); ?></dt>
		<dd>
			<?php echo h($tourPackage['TourPackage']['end_pt_state']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('End Pt City'); ?></dt>
		<dd>
			<?php echo h($tourPackage['TourPackage']['end_pt_city']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('End Pt Area'); ?></dt>
		<dd>
			<?php echo h($tourPackage['TourPackage']['end_pt_area']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Popular Point'); ?></dt>
		<dd>
			<?php echo $this->Html->link($tourPackage['PopularPoint']['name'], array('controller' => 'popular_points', 'action' => 'view', $tourPackage['PopularPoint']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('St Date'); ?></dt>
		<dd>
			<?php echo h($tourPackage['TourPackage']['st_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('End Date'); ?></dt>
		<dd>
			<?php echo h($tourPackage['TourPackage']['end_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Price Per Person'); ?></dt>
		<dd>
			<?php echo h($tourPackage['TourPackage']['price_per_person']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Pricing Tax Status'); ?></dt>
		<dd>
			<?php echo h($tourPackage['TourPackage']['pricing_tax_status']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tax'); ?></dt>
		<dd>
			<?php echo $this->Html->link($tourPackage['Tax']['name'], array('controller' => 'taxes', 'action' => 'view', $tourPackage['Tax']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Child Age Below1'); ?></dt>
		<dd>
			<?php echo h($tourPackage['TourPackage']['child_age_below1']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Price Age Below1'); ?></dt>
		<dd>
			<?php echo h($tourPackage['TourPackage']['price_age_below1']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Child Age Below2'); ?></dt>
		<dd>
			<?php echo h($tourPackage['TourPackage']['child_age_below2']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Price Age Below2'); ?></dt>
		<dd>
			<?php echo h($tourPackage['TourPackage']['price_age_below2']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Child Age Below3'); ?></dt>
		<dd>
			<?php echo h($tourPackage['TourPackage']['child_age_below3']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Price Age Below3'); ?></dt>
		<dd>
			<?php echo h($tourPackage['TourPackage']['price_age_below3']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Child Above Age1'); ?></dt>
		<dd>
			<?php echo h($tourPackage['TourPackage']['child_above_age1']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Price Above Age1'); ?></dt>
		<dd>
			<?php echo h($tourPackage['TourPackage']['price_above_age1']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Child Above Age2'); ?></dt>
		<dd>
			<?php echo h($tourPackage['TourPackage']['child_above_age2']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Price Above Age2'); ?></dt>
		<dd>
			<?php echo h($tourPackage['TourPackage']['price_above_age2']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Child Above Age3'); ?></dt>
		<dd>
			<?php echo h($tourPackage['TourPackage']['child_above_age3']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Price Above Age3'); ?></dt>
		<dd>
			<?php echo h($tourPackage['TourPackage']['price_above_age3']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Commision'); ?></dt>
		<dd>
			<?php echo h($tourPackage['TourPackage']['commision']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Special Price'); ?></dt>
		<dd>
			<?php echo h($tourPackage['TourPackage']['special_price']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Special Price Earning'); ?></dt>
		<dd>
			<?php echo h($tourPackage['TourPackage']['special_price_earning']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Commision Customer'); ?></dt>
		<dd>
			<?php echo h($tourPackage['TourPackage']['commision_customer']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Commision Customer Earining'); ?></dt>
		<dd>
			<?php echo h($tourPackage['TourPackage']['commision_customer_earining']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Commision Agent'); ?></dt>
		<dd>
			<?php echo h($tourPackage['TourPackage']['commision_agent']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Commision Agent Earining'); ?></dt>
		<dd>
			<?php echo h($tourPackage['TourPackage']['commision_agent_earining']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tp Keyword'); ?></dt>
		<dd>
			<?php echo h($tourPackage['TourPackage']['tp_keyword']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Meta Title'); ?></dt>
		<dd>
			<?php echo h($tourPackage['TourPackage']['meta_title']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Meta Description'); ?></dt>
		<dd>
			<?php echo h($tourPackage['TourPackage']['meta_description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Meta Keyword'); ?></dt>
		<dd>
			<?php echo h($tourPackage['TourPackage']['meta_keyword']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Status'); ?></dt>
		<dd>
			<?php if(h($tourPackage['TourPackage']['status']) == 1) { echo "Active"; } else { echo "Inactive"; } ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($tourPackage['TourPackage']['modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($tourPackage['TourPackage']['created']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
</div>

<?php echo $this->element('left_nav');?>
<?php /*?><div class="related">

	<h3><?php echo __('Related Activity Types'); ?></h3>
	<?php if (!empty($tourPackage['ActivityType'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Site Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Description'); ?></th>
		<th><?php echo __('Meta Title'); ?></th>
		<th><?php echo __('Meta Description'); ?></th>
		<th><?php echo __('Meta Keyword'); ?></th>
		<th><?php echo __('Status'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($tourPackage['ActivityType'] as $activityType): ?>
		<tr>
			<td><?php echo $activityType['id']; ?></td>
			<td><?php echo $activityType['site_id']; ?></td>
			<td><?php echo $activityType['name']; ?></td>
			<td><?php echo $activityType['description']; ?></td>
			<td><?php echo $activityType['meta_title']; ?></td>
			<td><?php echo $activityType['meta_description']; ?></td>
			<td><?php echo $activityType['meta_keyword']; ?></td>
			<td><?php echo $activityType['status']; ?></td>
			<td><?php echo $activityType['modified']; ?></td>
			<td><?php echo $activityType['created']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'activity_types', 'action' => 'view', $activityType['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'activity_types', 'action' => 'edit', $activityType['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'activity_types', 'action' => 'delete', $activityType['id']), null, __('Are you sure you want to delete # %s?', $activityType['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Activity Type'), array('controller' => 'activity_types', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Hotel Rooms'); ?></h3>
	<?php if (!empty($tourPackage['HotelRoom'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Country Id'); ?></th>
		<th><?php echo __('State Id'); ?></th>
		<th><?php echo __('City Id'); ?></th>
		<th><?php echo __('Hotel Id'); ?></th>
		<th><?php echo __('Room Type Id'); ?></th>
		<th><?php echo __('Inventory'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Short Description'); ?></th>
		<th><?php echo __('Long Description'); ?></th>
		<th><?php echo __('Max Adults'); ?></th>
		<th><?php echo __('Max Childs'); ?></th>
		<th><?php echo __('Extra Guest Occupancy'); ?></th>
		<th><?php echo __('No Of Beds'); ?></th>
		<th><?php echo __('Room Order'); ?></th>
		<th><?php echo __('Room Image1'); ?></th>
		<th><?php echo __('Room Image2'); ?></th>
		<th><?php echo __('Room Image3'); ?></th>
		<th><?php echo __('Room Image4'); ?></th>
		<th><?php echo __('Room Image5'); ?></th>
		<th><?php echo __('Room Video'); ?></th>
		<th><?php echo __('Food Menu Type Id'); ?></th>
		<th><?php echo __('Food Package Id'); ?></th>
		<th><?php echo __('Hotel Facility Category Id'); ?></th>
		<th><?php echo __('Hotel Facility Id'); ?></th>
		<th><?php echo __('Room Price'); ?></th>
		<th><?php echo __('Pricing Tax Status'); ?></th>
		<th><?php echo __('Tax Id'); ?></th>
		<th><?php echo __('Additional Guest'); ?></th>
		<th><?php echo __('Child Age Below1'); ?></th>
		<th><?php echo __('Price Age Below1'); ?></th>
		<th><?php echo __('Child Age Below2'); ?></th>
		<th><?php echo __('Price Age Below2'); ?></th>
		<th><?php echo __('Child Age Below3'); ?></th>
		<th><?php echo __('Price Age Below3'); ?></th>
		<th><?php echo __('Child Above Age1'); ?></th>
		<th><?php echo __('Price Above Age1'); ?></th>
		<th><?php echo __('Child Above Age2'); ?></th>
		<th><?php echo __('Price Above Age2'); ?></th>
		<th><?php echo __('Child Above Age3'); ?></th>
		<th><?php echo __('Price Above Age3'); ?></th>
		<th><?php echo __('Commision'); ?></th>
		<th><?php echo __('Special Price'); ?></th>
		<th><?php echo __('Special Price Earning'); ?></th>
		<th><?php echo __('Commision Customer'); ?></th>
		<th><?php echo __('Commision Customer Earining'); ?></th>
		<th><?php echo __('Commision Agent'); ?></th>
		<th><?php echo __('Commision Agent Earining'); ?></th>
		<th><?php echo __('Meta Title'); ?></th>
		<th><?php echo __('Meta Description'); ?></th>
		<th><?php echo __('Meta Keyword'); ?></th>
		<th><?php echo __('Status'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($tourPackage['HotelRoom'] as $hotelRoom): ?>
		<tr>
			<td><?php echo $hotelRoom['id']; ?></td>
			<td><?php echo $hotelRoom['country_id']; ?></td>
			<td><?php echo $hotelRoom['state_id']; ?></td>
			<td><?php echo $hotelRoom['city_id']; ?></td>
			<td><?php echo $hotelRoom['hotel_id']; ?></td>
			<td><?php echo $hotelRoom['room_type_id']; ?></td>
			<td><?php echo $hotelRoom['inventory']; ?></td>
			<td><?php echo $hotelRoom['name']; ?></td>
			<td><?php echo $hotelRoom['short_description']; ?></td>
			<td><?php echo $hotelRoom['long_description']; ?></td>
			<td><?php echo $hotelRoom['max_adults']; ?></td>
			<td><?php echo $hotelRoom['max_childs']; ?></td>
			<td><?php echo $hotelRoom['extra_guest_occupancy']; ?></td>
			<td><?php echo $hotelRoom['no_of_beds']; ?></td>
			<td><?php echo $hotelRoom['room_order']; ?></td>
			<td><?php echo $hotelRoom['room_image1']; ?></td>
			<td><?php echo $hotelRoom['room_image2']; ?></td>
			<td><?php echo $hotelRoom['room_image3']; ?></td>
			<td><?php echo $hotelRoom['room_image4']; ?></td>
			<td><?php echo $hotelRoom['room_image5']; ?></td>
			<td><?php echo $hotelRoom['room_video']; ?></td>
			<td><?php echo $hotelRoom['food_menu_type_id']; ?></td>
			<td><?php echo $hotelRoom['food_package_id']; ?></td>
			<td><?php echo $hotelRoom['hotel_facility_category_id']; ?></td>
			<td><?php echo $hotelRoom['hotel_facility_id']; ?></td>
			<td><?php echo $hotelRoom['room_price']; ?></td>
			<td><?php echo $hotelRoom['pricing_tax_status']; ?></td>
			<td><?php echo $hotelRoom['tax_id']; ?></td>
			<td><?php echo $hotelRoom['additional_guest']; ?></td>
			<td><?php echo $hotelRoom['child_age_below1']; ?></td>
			<td><?php echo $hotelRoom['price_age_below1']; ?></td>
			<td><?php echo $hotelRoom['child_age_below2']; ?></td>
			<td><?php echo $hotelRoom['price_age_below2']; ?></td>
			<td><?php echo $hotelRoom['child_age_below3']; ?></td>
			<td><?php echo $hotelRoom['price_age_below3']; ?></td>
			<td><?php echo $hotelRoom['child_above_age1']; ?></td>
			<td><?php echo $hotelRoom['price_above_age1']; ?></td>
			<td><?php echo $hotelRoom['child_above_age2']; ?></td>
			<td><?php echo $hotelRoom['price_above_age2']; ?></td>
			<td><?php echo $hotelRoom['child_above_age3']; ?></td>
			<td><?php echo $hotelRoom['price_above_age3']; ?></td>
			<td><?php echo $hotelRoom['commision']; ?></td>
			<td><?php echo $hotelRoom['special_price']; ?></td>
			<td><?php echo $hotelRoom['special_price_earning']; ?></td>
			<td><?php echo $hotelRoom['commision_customer']; ?></td>
			<td><?php echo $hotelRoom['commision_customer_earining']; ?></td>
			<td><?php echo $hotelRoom['commision_agent']; ?></td>
			<td><?php echo $hotelRoom['commision_agent_earining']; ?></td>
			<td><?php echo $hotelRoom['meta_title']; ?></td>
			<td><?php echo $hotelRoom['meta_description']; ?></td>
			<td><?php echo $hotelRoom['meta_keyword']; ?></td>
			<td><?php echo $hotelRoom['status']; ?></td>
			<td><?php echo $hotelRoom['modified']; ?></td>
			<td><?php echo $hotelRoom['created']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'hotel_rooms', 'action' => 'view', $hotelRoom['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'hotel_rooms', 'action' => 'edit', $hotelRoom['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'hotel_rooms', 'action' => 'delete', $hotelRoom['id']), null, __('Are you sure you want to delete # %s?', $hotelRoom['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Hotel Room'), array('controller' => 'hotel_rooms', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Popular Points'); ?></h3>
	<?php if (!empty($tourPackage['PopularPoint'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Site Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Description'); ?></th>
		<th><?php echo __('Activity Type Id'); ?></th>
		<th><?php echo __('Best Time Visit To'); ?></th>
		<th><?php echo __('Best Time Visit From'); ?></th>
		<th><?php echo __('Suitable'); ?></th>
		<th><?php echo __('Age Group'); ?></th>
		<th><?php echo __('Entry Fees'); ?></th>
		<th><?php echo __('Country Id'); ?></th>
		<th><?php echo __('State Id'); ?></th>
		<th><?php echo __('City Id'); ?></th>
		<th><?php echo __('Area'); ?></th>
		<th><?php echo __('Latitude'); ?></th>
		<th><?php echo __('Longitude'); ?></th>
		<th><?php echo __('Visit Duration'); ?></th>
		<th><?php echo __('Opening Time'); ?></th>
		<th><?php echo __('Closing Time'); ?></th>
		<th><?php echo __('Pp Image'); ?></th>
		<th><?php echo __('Pp Video'); ?></th>
		<th><?php echo __('Meta Title'); ?></th>
		<th><?php echo __('Meta Description'); ?></th>
		<th><?php echo __('Meta Keyword'); ?></th>
		<th><?php echo __('Status'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($tourPackage['PopularPoint'] as $popularPoint): ?>
		<tr>
			<td><?php echo $popularPoint['id']; ?></td>
			<td><?php echo $popularPoint['site_id']; ?></td>
			<td><?php echo $popularPoint['name']; ?></td>
			<td><?php echo $popularPoint['description']; ?></td>
			<td><?php echo $popularPoint['activity_type_id']; ?></td>
			<td><?php echo $popularPoint['best_time_visit_to']; ?></td>
			<td><?php echo $popularPoint['best_time_visit_from']; ?></td>
			<td><?php echo $popularPoint['suitable']; ?></td>
			<td><?php echo $popularPoint['age_group']; ?></td>
			<td><?php echo $popularPoint['entry_fees']; ?></td>
			<td><?php echo $popularPoint['country_id']; ?></td>
			<td><?php echo $popularPoint['state_id']; ?></td>
			<td><?php echo $popularPoint['city_id']; ?></td>
			<td><?php echo $popularPoint['area']; ?></td>
			<td><?php echo $popularPoint['latitude']; ?></td>
			<td><?php echo $popularPoint['longitude']; ?></td>
			<td><?php echo $popularPoint['visit_duration']; ?></td>
			<td><?php echo $popularPoint['opening_time']; ?></td>
			<td><?php echo $popularPoint['closing_time']; ?></td>
			<td><?php echo $popularPoint['pp_image']; ?></td>
			<td><?php echo $popularPoint['pp_video']; ?></td>
			<td><?php echo $popularPoint['meta_title']; ?></td>
			<td><?php echo $popularPoint['meta_description']; ?></td>
			<td><?php echo $popularPoint['meta_keyword']; ?></td>
			<td><?php echo $popularPoint['status']; ?></td>
			<td><?php echo $popularPoint['modified']; ?></td>
			<td><?php echo $popularPoint['created']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'popular_points', 'action' => 'view', $popularPoint['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'popular_points', 'action' => 'edit', $popularPoint['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'popular_points', 'action' => 'delete', $popularPoint['id']), null, __('Are you sure you want to delete # %s?', $popularPoint['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Popular Point'), array('controller' => 'popular_points', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Taxes'); ?></h3>
	<?php if (!empty($tourPackage['Tax'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Site Id'); ?></th>
		<th><?php echo __('Country Id'); ?></th>
		<th><?php echo __('State Id'); ?></th>
		<th><?php echo __('City Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Description'); ?></th>
		<th><?php echo __('Tax Percentage'); ?></th>
		<th><?php echo __('Status'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($tourPackage['Tax'] as $tax): ?>
		<tr>
			<td><?php echo $tax['id']; ?></td>
			<td><?php echo $tax['site_id']; ?></td>
			<td><?php echo $tax['country_id']; ?></td>
			<td><?php echo $tax['state_id']; ?></td>
			<td><?php echo $tax['city_id']; ?></td>
			<td><?php echo $tax['name']; ?></td>
			<td><?php echo $tax['description']; ?></td>
			<td><?php echo $tax['tax_percentage']; ?></td>
			<td><?php echo $tax['status']; ?></td>
			<td><?php echo $tax['modified']; ?></td>
			<td><?php echo $tax['created']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'taxes', 'action' => 'view', $tax['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'taxes', 'action' => 'edit', $tax['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'taxes', 'action' => 'delete', $tax['id']), null, __('Are you sure you want to delete # %s?', $tax['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Tax'), array('controller' => 'taxes', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div><?php */?>
