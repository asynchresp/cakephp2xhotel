<div class="taxes view">
<h2><?php echo __('Tax'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($tax['Tax']['id']); ?>
			&nbsp;
		</dd>
		<?php /* ?><dt><?php echo __('Site'); ?></dt>
		<dd>
			<?php echo $this->Html->link($tax['Site']['name'], array('controller' => 'sites', 'action' => 'view', $tax['Site']['id'])); ?>
			&nbsp;
		</dd><?php */ ?>
		<dt><?php echo __('Country'); ?></dt>
		<dd>
			<?php echo $this->Html->link($tax['Country']['name'], array('controller' => 'countries', 'action' => 'view', $tax['Country']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('State'); ?></dt>
		<dd>
			<?php echo $this->Html->link($tax['State']['name'], array('controller' => 'states', 'action' => 'view', $tax['State']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('City'); ?></dt>
		<dd>
			<?php echo $this->Html->link($tax['City']['name'], array('controller' => 'cities', 'action' => 'view', $tax['City']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($tax['Tax']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Description'); ?></dt>
		<dd>
			<?php echo html_entity_decode(h($tax['Tax']['description'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tax Percentage'); ?></dt>
		<dd>
			<?php echo h($tax['Tax']['tax_percentage']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Status'); ?></dt>
		<dd>
			<?php if(h($tax['Tax']['status']) == 1) { echo "Active"; } else { echo "Inactive"; } ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($tax['Tax']['modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($tax['Tax']['created']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Tax'), array('action' => 'edit', $tax['Tax']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Tax'), array('action' => 'delete', $tax['Tax']['id']), null, __('Are you sure you want to delete # %s?', $tax['Tax']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Taxes'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tax'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Sites'), array('controller' => 'sites', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Site'), array('controller' => 'sites', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Countries'), array('controller' => 'countries', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Country'), array('controller' => 'countries', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List States'), array('controller' => 'states', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New State'), array('controller' => 'states', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Cities'), array('controller' => 'cities', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New City'), array('controller' => 'cities', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Hotel Rooms'), array('controller' => 'hotel_rooms', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Hotel Room'), array('controller' => 'hotel_rooms', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Tour Packages'), array('controller' => 'tour_packages', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tour Package'), array('controller' => 'tour_packages', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Hotels'), array('controller' => 'hotels', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Hotel'), array('controller' => 'hotels', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Hotel Rooms'); ?></h3>
	<?php if (!empty($tax['HotelRoom'])): ?>
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
		foreach ($tax['HotelRoom'] as $hotelRoom): ?>
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
	<h3><?php echo __('Related Tour Packages'); ?></h3>
	<?php if (!empty($tax['TourPackage'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Site Id'); ?></th>
		<th><?php echo __('Hotel Id'); ?></th>
		<th><?php echo __('Room Type Id'); ?></th>
		<th><?php echo __('Hotel Room Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Short Description'); ?></th>
		<th><?php echo __('Long Description'); ?></th>
		<th><?php echo __('Tp Order'); ?></th>
		<th><?php echo __('No Person'); ?></th>
		<th><?php echo __('Activity Type Id'); ?></th>
		<th><?php echo __('St Pt State'); ?></th>
		<th><?php echo __('St Pt City'); ?></th>
		<th><?php echo __('St Pt Area'); ?></th>
		<th><?php echo __('End Pt State'); ?></th>
		<th><?php echo __('End Pt City'); ?></th>
		<th><?php echo __('End Pt Area'); ?></th>
		<th><?php echo __('Popular Point Id'); ?></th>
		<th><?php echo __('St Date'); ?></th>
		<th><?php echo __('End Date'); ?></th>
		<th><?php echo __('Price Per Person'); ?></th>
		<th><?php echo __('Pricing Tax Status'); ?></th>
		<th><?php echo __('Tax Id'); ?></th>
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
		<th><?php echo __('Tp Keyword'); ?></th>
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
		foreach ($tax['TourPackage'] as $tourPackage): ?>
		<tr>
			<td><?php echo $tourPackage['id']; ?></td>
			<td><?php echo $tourPackage['site_id']; ?></td>
			<td><?php echo $tourPackage['hotel_id']; ?></td>
			<td><?php echo $tourPackage['room_type_id']; ?></td>
			<td><?php echo $tourPackage['hotel_room_id']; ?></td>
			<td><?php echo $tourPackage['name']; ?></td>
			<td><?php echo $tourPackage['short_description']; ?></td>
			<td><?php echo $tourPackage['long_description']; ?></td>
			<td><?php echo $tourPackage['tp_order']; ?></td>
			<td><?php echo $tourPackage['no_person']; ?></td>
			<td><?php echo $tourPackage['activity_type_id']; ?></td>
			<td><?php echo $tourPackage['st_pt_state']; ?></td>
			<td><?php echo $tourPackage['st_pt_city']; ?></td>
			<td><?php echo $tourPackage['st_pt_area']; ?></td>
			<td><?php echo $tourPackage['end_pt_state']; ?></td>
			<td><?php echo $tourPackage['end_pt_city']; ?></td>
			<td><?php echo $tourPackage['end_pt_area']; ?></td>
			<td><?php echo $tourPackage['popular_point_id']; ?></td>
			<td><?php echo $tourPackage['st_date']; ?></td>
			<td><?php echo $tourPackage['end_date']; ?></td>
			<td><?php echo $tourPackage['price_per_person']; ?></td>
			<td><?php echo $tourPackage['pricing_tax_status']; ?></td>
			<td><?php echo $tourPackage['tax_id']; ?></td>
			<td><?php echo $tourPackage['child_age_below1']; ?></td>
			<td><?php echo $tourPackage['price_age_below1']; ?></td>
			<td><?php echo $tourPackage['child_age_below2']; ?></td>
			<td><?php echo $tourPackage['price_age_below2']; ?></td>
			<td><?php echo $tourPackage['child_age_below3']; ?></td>
			<td><?php echo $tourPackage['price_age_below3']; ?></td>
			<td><?php echo $tourPackage['child_above_age1']; ?></td>
			<td><?php echo $tourPackage['price_above_age1']; ?></td>
			<td><?php echo $tourPackage['child_above_age2']; ?></td>
			<td><?php echo $tourPackage['price_above_age2']; ?></td>
			<td><?php echo $tourPackage['child_above_age3']; ?></td>
			<td><?php echo $tourPackage['price_above_age3']; ?></td>
			<td><?php echo $tourPackage['commision']; ?></td>
			<td><?php echo $tourPackage['special_price']; ?></td>
			<td><?php echo $tourPackage['special_price_earning']; ?></td>
			<td><?php echo $tourPackage['commision_customer']; ?></td>
			<td><?php echo $tourPackage['commision_customer_earining']; ?></td>
			<td><?php echo $tourPackage['commision_agent']; ?></td>
			<td><?php echo $tourPackage['commision_agent_earining']; ?></td>
			<td><?php echo $tourPackage['tp_keyword']; ?></td>
			<td><?php echo $tourPackage['meta_title']; ?></td>
			<td><?php echo $tourPackage['meta_description']; ?></td>
			<td><?php echo $tourPackage['meta_keyword']; ?></td>
			<td><?php echo $tourPackage['status']; ?></td>
			<td><?php echo $tourPackage['modified']; ?></td>
			<td><?php echo $tourPackage['created']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'tour_packages', 'action' => 'view', $tourPackage['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'tour_packages', 'action' => 'edit', $tourPackage['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'tour_packages', 'action' => 'delete', $tourPackage['id']), null, __('Are you sure you want to delete # %s?', $tourPackage['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Tour Package'), array('controller' => 'tour_packages', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Hotels'); ?></h3>
	<?php if (!empty($tax['Hotel'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Site Id'); ?></th>
		<th><?php echo __('Hotel Group Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Short Description'); ?></th>
		<th><?php echo __('Long Description'); ?></th>
		<th><?php echo __('Hotel Logo'); ?></th>
		<th><?php echo __('Hotel Order'); ?></th>
		<th><?php echo __('Point Near By Hotel'); ?></th>
		<th><?php echo __('Hotel Type Id'); ?></th>
		<th><?php echo __('Hotel Theme Id'); ?></th>
		<th><?php echo __('Area'); ?></th>
		<th><?php echo __('Address Line1'); ?></th>
		<th><?php echo __('Address Line2'); ?></th>
		<th><?php echo __('Country Id'); ?></th>
		<th><?php echo __('State Id'); ?></th>
		<th><?php echo __('City Id'); ?></th>
		<th><?php echo __('Latitude'); ?></th>
		<th><?php echo __('Longitude'); ?></th>
		<th><?php echo __('Star Rating Id'); ?></th>
		<th><?php echo __('Checkindatetime'); ?></th>
		<th><?php echo __('Checkoutdatetime'); ?></th>
		<th><?php echo __('Hotel Facility Category Id'); ?></th>
		<th><?php echo __('Hotel Facility Id'); ?></th>
		<th><?php echo __('Hotel Image'); ?></th>
		<th><?php echo __('Hotel Video'); ?></th>
		<th><?php echo __('Pricing Tax Status'); ?></th>
		<th><?php echo __('Hotel Tax'); ?></th>
		<th><?php echo __('Meta Title'); ?></th>
		<th><?php echo __('Meta Description'); ?></th>
		<th><?php echo __('Meta Keyword'); ?></th>
		<th><?php echo __('Main Keyword Tag'); ?></th>
		<th><?php echo __('Nearby Location Tag'); ?></th>
		<th><?php echo __('Hotel Cancellation Policy Id'); ?></th>
		<th><?php echo __('Hotel Modification Policy Id'); ?></th>
		<th><?php echo __('Status'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($tax['Hotel'] as $hotel): ?>
		<tr>
			<td><?php echo $hotel['id']; ?></td>
			<td><?php echo $hotel['site_id']; ?></td>
			<td><?php echo $hotel['hotel_group_id']; ?></td>
			<td><?php echo $hotel['name']; ?></td>
			<td><?php echo $hotel['short_description']; ?></td>
			<td><?php echo $hotel['long_description']; ?></td>
			<td><?php echo $hotel['hotel_logo']; ?></td>
			<td><?php echo $hotel['hotel_order']; ?></td>
			<td><?php echo $hotel['point_near_by_hotel']; ?></td>
			<td><?php echo $hotel['hotel_type_id']; ?></td>
			<td><?php echo $hotel['hotel_theme_id']; ?></td>
			<td><?php echo $hotel['area']; ?></td>
			<td><?php echo $hotel['address_line1']; ?></td>
			<td><?php echo $hotel['address_line2']; ?></td>
			<td><?php echo $hotel['country_id']; ?></td>
			<td><?php echo $hotel['state_id']; ?></td>
			<td><?php echo $hotel['city_id']; ?></td>
			<td><?php echo $hotel['latitude']; ?></td>
			<td><?php echo $hotel['longitude']; ?></td>
			<td><?php echo $hotel['star_rating_id']; ?></td>
			<td><?php echo $hotel['checkindatetime']; ?></td>
			<td><?php echo $hotel['checkoutdatetime']; ?></td>
			<td><?php echo $hotel['hotel_facility_category_id']; ?></td>
			<td><?php echo $hotel['hotel_facility_id']; ?></td>
			<td><?php echo $hotel['hotel_image']; ?></td>
			<td><?php echo $hotel['hotel_video']; ?></td>
			<td><?php echo $hotel['pricing_tax_status']; ?></td>
			<td><?php echo $hotel['hotel_tax']; ?></td>
			<td><?php echo $hotel['meta_title']; ?></td>
			<td><?php echo $hotel['meta_description']; ?></td>
			<td><?php echo $hotel['meta_keyword']; ?></td>
			<td><?php echo $hotel['main_keyword_tag']; ?></td>
			<td><?php echo $hotel['nearby_location_tag']; ?></td>
			<td><?php echo $hotel['hotel_cancellation_policy_id']; ?></td>
			<td><?php echo $hotel['hotel_modification_policy_id']; ?></td>
			<td><?php echo $hotel['status']; ?></td>
			<td><?php echo $hotel['modified']; ?></td>
			<td><?php echo $hotel['created']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'hotels', 'action' => 'view', $hotel['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'hotels', 'action' => 'edit', $hotel['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'hotels', 'action' => 'delete', $hotel['id']), null, __('Are you sure you want to delete # %s?', $hotel['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Hotel'), array('controller' => 'hotels', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
