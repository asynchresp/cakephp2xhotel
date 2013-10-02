<div class="hotels view">
     <div class="um_box_mid_content_top"><span class="umstyle1"><?php echo __('Hotel'); ?></span></div>
        <div class="content_mid">
<!--<h2><?php // echo __('Hotel'); ?></h2>-->
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($hotel['Hotel']['id']); ?>
			&nbsp;
		</dd>
		<?php /* ?><dt><?php echo __('Site'); ?></dt>
		<dd>
			<?php echo $this->Html->link($hotel['Site']['name'], array('controller' => 'sites', 'action' => 'view', $hotel['Site']['id'])); ?>
			&nbsp;
		</dd><?php */ ?>
		<dt><?php echo __('Hotel Group'); ?></dt>
		<dd>
			<?php echo $this->Html->link($hotel['HotelGroup']['name'], array('controller' => 'hotel_groups', 'action' => 'view', $hotel['HotelGroup']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($hotel['Hotel']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Short Description'); ?></dt>
		<dd>
			<?php echo h($hotel['Hotel']['short_description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Long Description'); ?></dt>
		<dd>
			<?php echo h($hotel['Hotel']['long_description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Hotel Logo'); ?></dt>
		<dd>
			<?php echo h($hotel['Hotel']['hotel_logo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Hotel Order'); ?></dt>
		<dd>
			<?php echo h($hotel['Hotel']['hotel_order']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Point Near By Hotel'); ?></dt>
		<dd>
			<?php echo h($hotel['Hotel']['point_near_by_hotel']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Hotel Type'); ?></dt>
		<dd>
			<?php echo $this->Html->link($hotel['HotelType']['name'], array('controller' => 'hotel_types', 'action' => 'view', $hotel['HotelType']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Hotel Theme'); ?></dt>
		<dd>
			<?php echo $this->Html->link($hotel['HotelTheme']['name'], array('controller' => 'hotel_themes', 'action' => 'view', $hotel['HotelTheme']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Area'); ?></dt>
		<dd>
			<?php echo h($hotel['Hotel']['area']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Address Line1'); ?></dt>
		<dd>
			<?php echo h($hotel['Hotel']['address_line1']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Address Line2'); ?></dt>
		<dd>
			<?php echo h($hotel['Hotel']['address_line2']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Country'); ?></dt>
		<dd>
			<?php echo $this->Html->link($hotel['Country']['name'], array('controller' => 'countries', 'action' => 'view', $hotel['Country']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('State'); ?></dt>
		<dd>
			<?php echo $this->Html->link($hotel['State']['name'], array('controller' => 'states', 'action' => 'view', $hotel['State']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('City'); ?></dt>
		<dd>
			<?php echo $this->Html->link($hotel['City']['name'], array('controller' => 'cities', 'action' => 'view', $hotel['City']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Latitude'); ?></dt>
		<dd>
			<?php echo h($hotel['Hotel']['latitude']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Longitude'); ?></dt>
		<dd>
			<?php echo h($hotel['Hotel']['longitude']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Star Rating'); ?></dt>
		<dd>
			<?php echo $this->Html->link($hotel['StarRating']['name'], array('controller' => 'star_ratings', 'action' => 'view', $hotel['StarRating']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Checkindatetime'); ?></dt>
		<dd>
			<?php echo h($hotel['Hotel']['checkindatetime']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Checkoutdatetime'); ?></dt>
		<dd>
			<?php echo h($hotel['Hotel']['checkoutdatetime']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Hotel Facility Category'); ?></dt>
		<dd>
			<?php echo $this->Html->link($hotel['HotelFacilityCategory']['name'], array('controller' => 'hotel_facility_categories', 'action' => 'view', $hotel['HotelFacilityCategory']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Hotel Facility'); ?></dt>
		<dd>
			<?php echo $this->Html->link($hotel['HotelFacility']['name'], array('controller' => 'hotel_facilities', 'action' => 'view', $hotel['HotelFacility']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Hotel Image'); ?></dt>
		<dd>
			<?php echo h($hotel['Hotel']['hotel_image']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Hotel Video'); ?></dt>
		<dd>
			<?php echo h($hotel['Hotel']['hotel_video']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Pricing Tax Status'); ?></dt>
		<dd>
			<?php echo h($hotel['Hotel']['pricing_tax_status']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Hotel Tax'); ?></dt>
		<dd>
			<?php echo h($hotel['Hotel']['hotel_tax']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Meta Title'); ?></dt>
		<dd>
			<?php echo h($hotel['Hotel']['meta_title']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Meta Description'); ?></dt>
		<dd>
			<?php echo h($hotel['Hotel']['meta_description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Meta Keyword'); ?></dt>
		<dd>
			<?php echo h($hotel['Hotel']['meta_keyword']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Main Keyword Tag'); ?></dt>
		<dd>
			<?php echo h($hotel['Hotel']['main_keyword_tag']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nearby Location Tag'); ?></dt>
		<dd>
			<?php echo h($hotel['Hotel']['nearby_location_tag']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Hotel Cancellation Policy'); ?></dt>
		<dd>
			<?php echo $this->Html->link($hotel['HotelCancellationPolicy']['name'], array('controller' => 'hotel_cancellation_policies', 'action' => 'view', $hotel['HotelCancellationPolicy']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Hotel Modification Policy'); ?></dt>
		<dd>
			<?php echo $this->Html->link($hotel['HotelModificationPolicy']['name'], array('controller' => 'hotel_modification_policies', 'action' => 'view', $hotel['HotelModificationPolicy']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Status'); ?></dt>
		<dd>
			<?php if(h($hotel['Hotel']['status']) == 1) { echo "Active"; } else { echo "Inactive"; } ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($hotel['Hotel']['modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($hotel['Hotel']['created']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
</div>
<?php echo $this->element('left_nav');?>
<div class="related">
	<h3><?php echo __('Related Coupons'); ?></h3>
	<?php if (!empty($hotel['Coupon'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Site Id'); ?></th>
		<th><?php echo __('Hotel Id'); ?></th>
		<th><?php echo __('Room Type Id'); ?></th>
		<th><?php echo __('Hotel Room Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Description'); ?></th>
		<th><?php echo __('Coupon Code'); ?></th>
		<th><?php echo __('Coupon St Date'); ?></th>
		<th><?php echo __('Coupon Expiry Date'); ?></th>
		<th><?php echo __('Min Night'); ?></th>
		<th><?php echo __('Max Guest'); ?></th>
		<th><?php echo __('Discount'); ?></th>
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
		foreach ($hotel['Coupon'] as $coupon): ?>
		<tr>
			<td><?php echo $coupon['id']; ?></td>
			<td><?php echo $coupon['site_id']; ?></td>
			<td><?php echo $coupon['hotel_id']; ?></td>
			<td><?php echo $coupon['room_type_id']; ?></td>
			<td><?php echo $coupon['hotel_room_id']; ?></td>
			<td><?php echo $coupon['name']; ?></td>
			<td><?php echo $coupon['description']; ?></td>
			<td><?php echo $coupon['coupon_code']; ?></td>
			<td><?php echo $coupon['coupon_st_date']; ?></td>
			<td><?php echo $coupon['coupon_expiry_date']; ?></td>
			<td><?php echo $coupon['min_night']; ?></td>
			<td><?php echo $coupon['max_guest']; ?></td>
			<td><?php echo $coupon['discount']; ?></td>
			<td><?php echo $coupon['meta_title']; ?></td>
			<td><?php echo $coupon['meta_description']; ?></td>
			<td><?php echo $coupon['meta_keyword']; ?></td>
			<td><?php echo $coupon['status']; ?></td>
			<td><?php echo $coupon['modified']; ?></td>
			<td><?php echo $coupon['created']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'coupons', 'action' => 'view', $coupon['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'coupons', 'action' => 'edit', $coupon['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'coupons', 'action' => 'delete', $coupon['id']), null, __('Are you sure you want to delete # %s?', $coupon['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Coupon'), array('controller' => 'coupons', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Hotel Informative Pages'); ?></h3>
	<?php if (!empty($hotel['HotelInformativePage'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Site Id'); ?></th>
		<th><?php echo __('Hotel Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Short Description'); ?></th>
		<th><?php echo __('Long Description'); ?></th>
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
		foreach ($hotel['HotelInformativePage'] as $hotelInformativePage): ?>
		<tr>
			<td><?php echo $hotelInformativePage['id']; ?></td>
			<td><?php echo $hotelInformativePage['site_id']; ?></td>
			<td><?php echo $hotelInformativePage['hotel_id']; ?></td>
			<td><?php echo $hotelInformativePage['name']; ?></td>
			<td><?php echo $hotelInformativePage['short_description']; ?></td>
			<td><?php echo $hotelInformativePage['long_description']; ?></td>
			<td><?php echo $hotelInformativePage['meta_title']; ?></td>
			<td><?php echo $hotelInformativePage['meta_description']; ?></td>
			<td><?php echo $hotelInformativePage['meta_keyword']; ?></td>
			<td><?php echo $hotelInformativePage['status']; ?></td>
			<td><?php echo $hotelInformativePage['modified']; ?></td>
			<td><?php echo $hotelInformativePage['created']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'hotel_informative_pages', 'action' => 'view', $hotelInformativePage['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'hotel_informative_pages', 'action' => 'edit', $hotelInformativePage['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'hotel_informative_pages', 'action' => 'delete', $hotelInformativePage['id']), null, __('Are you sure you want to delete # %s?', $hotelInformativePage['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Hotel Informative Page'), array('controller' => 'hotel_informative_pages', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Hotel Rooms'); ?></h3>
	<?php if (!empty($hotel['HotelRoom'])): ?>
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
		foreach ($hotel['HotelRoom'] as $hotelRoom): ?>
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
	<?php if (!empty($hotel['TourPackage'])): ?>
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
		foreach ($hotel['TourPackage'] as $tourPackage): ?>
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
	<h3><?php echo __('Related Hotel Groups'); ?></h3>
	<?php if (!empty($hotel['HotelGroup'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Site Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Description'); ?></th>
		<th><?php echo __('Hotel Group Logo'); ?></th>
		<th><?php echo __('Group Order'); ?></th>
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
		foreach ($hotel['HotelGroup'] as $hotelGroup): ?>
		<tr>
			<td><?php echo $hotelGroup['id']; ?></td>
			<td><?php echo $hotelGroup['site_id']; ?></td>
			<td><?php echo $hotelGroup['name']; ?></td>
			<td><?php echo $hotelGroup['description']; ?></td>
			<td><?php echo $hotelGroup['hotel_group_logo']; ?></td>
			<td><?php echo $hotelGroup['group_order']; ?></td>
			<td><?php echo $hotelGroup['meta_title']; ?></td>
			<td><?php echo $hotelGroup['meta_description']; ?></td>
			<td><?php echo $hotelGroup['meta_keyword']; ?></td>
			<td><?php echo $hotelGroup['status']; ?></td>
			<td><?php echo $hotelGroup['modified']; ?></td>
			<td><?php echo $hotelGroup['created']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'hotel_groups', 'action' => 'view', $hotelGroup['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'hotel_groups', 'action' => 'edit', $hotelGroup['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'hotel_groups', 'action' => 'delete', $hotelGroup['id']), null, __('Are you sure you want to delete # %s?', $hotelGroup['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Hotel Group'), array('controller' => 'hotel_groups', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Hotel Cancellation Policies'); ?></h3>
	<?php if (!empty($hotel['HotelCancellationPolicy'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Site Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Description'); ?></th>
		<th><?php echo __('No Before Days'); ?></th>
		<th><?php echo __('Perentage Deducted'); ?></th>
		<th><?php echo __('Status'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($hotel['HotelCancellationPolicy'] as $hotelCancellationPolicy): ?>
		<tr>
			<td><?php echo $hotelCancellationPolicy['id']; ?></td>
			<td><?php echo $hotelCancellationPolicy['site_id']; ?></td>
			<td><?php echo $hotelCancellationPolicy['name']; ?></td>
			<td><?php echo $hotelCancellationPolicy['description']; ?></td>
			<td><?php echo $hotelCancellationPolicy['no_before_days']; ?></td>
			<td><?php echo $hotelCancellationPolicy['perentage_deducted']; ?></td>
			<td><?php echo $hotelCancellationPolicy['status']; ?></td>
			<td><?php echo $hotelCancellationPolicy['modified']; ?></td>
			<td><?php echo $hotelCancellationPolicy['created']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'hotel_cancellation_policies', 'action' => 'view', $hotelCancellationPolicy['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'hotel_cancellation_policies', 'action' => 'edit', $hotelCancellationPolicy['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'hotel_cancellation_policies', 'action' => 'delete', $hotelCancellationPolicy['id']), null, __('Are you sure you want to delete # %s?', $hotelCancellationPolicy['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Hotel Cancellation Policy'), array('controller' => 'hotel_cancellation_policies', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Hotel Facilities'); ?></h3>
	<?php if (!empty($hotel['HotelFacility'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Site Id'); ?></th>
		<th><?php echo __('Hotel Facility Category Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Description'); ?></th>
		<th><?php echo __('Hf Order'); ?></th>
		<th><?php echo __('Hf Image'); ?></th>
		<th><?php echo __('Show At Checkout'); ?></th>
		<th><?php echo __('Price For Adults'); ?></th>
		<th><?php echo __('Child Age Above'); ?></th>
		<th><?php echo __('Price Above Age'); ?></th>
		<th><?php echo __('No Extra Charges'); ?></th>
		<th><?php echo __('Depends Upon Bill'); ?></th>
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
		foreach ($hotel['HotelFacility'] as $hotelFacility): ?>
		<tr>
			<td><?php echo $hotelFacility['id']; ?></td>
			<td><?php echo $hotelFacility['site_id']; ?></td>
			<td><?php echo $hotelFacility['hotel_facility_category_id']; ?></td>
			<td><?php echo $hotelFacility['name']; ?></td>
			<td><?php echo $hotelFacility['description']; ?></td>
			<td><?php echo $hotelFacility['hf_order']; ?></td>
			<td><?php echo $hotelFacility['hf_image']; ?></td>
			<td><?php echo $hotelFacility['show_at_checkout']; ?></td>
			<td><?php echo $hotelFacility['price_for_adults']; ?></td>
			<td><?php echo $hotelFacility['child_age_above']; ?></td>
			<td><?php echo $hotelFacility['price_above_age']; ?></td>
			<td><?php echo $hotelFacility['no_extra_charges']; ?></td>
			<td><?php echo $hotelFacility['depends_upon_bill']; ?></td>
			<td><?php echo $hotelFacility['meta_title']; ?></td>
			<td><?php echo $hotelFacility['meta_description']; ?></td>
			<td><?php echo $hotelFacility['meta_keyword']; ?></td>
			<td><?php echo $hotelFacility['status']; ?></td>
			<td><?php echo $hotelFacility['modified']; ?></td>
			<td><?php echo $hotelFacility['created']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'hotel_facilities', 'action' => 'view', $hotelFacility['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'hotel_facilities', 'action' => 'edit', $hotelFacility['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'hotel_facilities', 'action' => 'delete', $hotelFacility['id']), null, __('Are you sure you want to delete # %s?', $hotelFacility['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Hotel Facility'), array('controller' => 'hotel_facilities', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Hotel Facility Categories'); ?></h3>
	<?php if (!empty($hotel['HotelFacilityCategory'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Site Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Description'); ?></th>
		<th><?php echo __('Hfc Image'); ?></th>
		<th><?php echo __('Hfc Order'); ?></th>
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
		foreach ($hotel['HotelFacilityCategory'] as $hotelFacilityCategory): ?>
		<tr>
			<td><?php echo $hotelFacilityCategory['id']; ?></td>
			<td><?php echo $hotelFacilityCategory['site_id']; ?></td>
			<td><?php echo $hotelFacilityCategory['name']; ?></td>
			<td><?php echo $hotelFacilityCategory['description']; ?></td>
			<td><?php echo $hotelFacilityCategory['hfc_image']; ?></td>
			<td><?php echo $hotelFacilityCategory['hfc_order']; ?></td>
			<td><?php echo $hotelFacilityCategory['meta_title']; ?></td>
			<td><?php echo $hotelFacilityCategory['meta_description']; ?></td>
			<td><?php echo $hotelFacilityCategory['meta_keyword']; ?></td>
			<td><?php echo $hotelFacilityCategory['status']; ?></td>
			<td><?php echo $hotelFacilityCategory['modified']; ?></td>
			<td><?php echo $hotelFacilityCategory['created']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'hotel_facility_categories', 'action' => 'view', $hotelFacilityCategory['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'hotel_facility_categories', 'action' => 'edit', $hotelFacilityCategory['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'hotel_facility_categories', 'action' => 'delete', $hotelFacilityCategory['id']), null, __('Are you sure you want to delete # %s?', $hotelFacilityCategory['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Hotel Facility Category'), array('controller' => 'hotel_facility_categories', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Hotel Modification Policies'); ?></h3>
	<?php if (!empty($hotel['HotelModificationPolicy'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Site Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Description'); ?></th>
		<th><?php echo __('No Before Days'); ?></th>
		<th><?php echo __('Perentage Deducted'); ?></th>
		<th><?php echo __('Status'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($hotel['HotelModificationPolicy'] as $hotelModificationPolicy): ?>
		<tr>
			<td><?php echo $hotelModificationPolicy['id']; ?></td>
			<td><?php echo $hotelModificationPolicy['site_id']; ?></td>
			<td><?php echo $hotelModificationPolicy['name']; ?></td>
			<td><?php echo $hotelModificationPolicy['description']; ?></td>
			<td><?php echo $hotelModificationPolicy['no_before_days']; ?></td>
			<td><?php echo $hotelModificationPolicy['perentage_deducted']; ?></td>
			<td><?php echo $hotelModificationPolicy['status']; ?></td>
			<td><?php echo $hotelModificationPolicy['modified']; ?></td>
			<td><?php echo $hotelModificationPolicy['created']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'hotel_modification_policies', 'action' => 'view', $hotelModificationPolicy['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'hotel_modification_policies', 'action' => 'edit', $hotelModificationPolicy['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'hotel_modification_policies', 'action' => 'delete', $hotelModificationPolicy['id']), null, __('Are you sure you want to delete # %s?', $hotelModificationPolicy['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Hotel Modification Policy'), array('controller' => 'hotel_modification_policies', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Hotel Themes'); ?></h3>
	<?php if (!empty($hotel['HotelTheme'])): ?>
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
		foreach ($hotel['HotelTheme'] as $hotelTheme): ?>
		<tr>
			<td><?php echo $hotelTheme['id']; ?></td>
			<td><?php echo $hotelTheme['site_id']; ?></td>
			<td><?php echo $hotelTheme['name']; ?></td>
			<td><?php echo $hotelTheme['description']; ?></td>
			<td><?php echo $hotelTheme['meta_title']; ?></td>
			<td><?php echo $hotelTheme['meta_description']; ?></td>
			<td><?php echo $hotelTheme['meta_keyword']; ?></td>
			<td><?php echo $hotelTheme['status']; ?></td>
			<td><?php echo $hotelTheme['modified']; ?></td>
			<td><?php echo $hotelTheme['created']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'hotel_themes', 'action' => 'view', $hotelTheme['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'hotel_themes', 'action' => 'edit', $hotelTheme['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'hotel_themes', 'action' => 'delete', $hotelTheme['id']), null, __('Are you sure you want to delete # %s?', $hotelTheme['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Hotel Theme'), array('controller' => 'hotel_themes', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Point Near By Hotels'); ?></h3>
	<?php if (!empty($hotel['PointNearByHotel'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Site Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Description'); ?></th>
		<th><?php echo __('Country Id'); ?></th>
		<th><?php echo __('State Id'); ?></th>
		<th><?php echo __('City Id'); ?></th>
		<th><?php echo __('Area'); ?></th>
		<th><?php echo __('Latitude'); ?></th>
		<th><?php echo __('Longitude'); ?></th>
		<th><?php echo __('Image'); ?></th>
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
		foreach ($hotel['PointNearByHotel'] as $pointNearByHotel): ?>
		<tr>
			<td><?php echo $pointNearByHotel['id']; ?></td>
			<td><?php echo $pointNearByHotel['site_id']; ?></td>
			<td><?php echo $pointNearByHotel['name']; ?></td>
			<td><?php echo $pointNearByHotel['description']; ?></td>
			<td><?php echo $pointNearByHotel['country_id']; ?></td>
			<td><?php echo $pointNearByHotel['state_id']; ?></td>
			<td><?php echo $pointNearByHotel['city_id']; ?></td>
			<td><?php echo $pointNearByHotel['area']; ?></td>
			<td><?php echo $pointNearByHotel['latitude']; ?></td>
			<td><?php echo $pointNearByHotel['longitude']; ?></td>
			<td><?php echo $pointNearByHotel['image']; ?></td>
			<td><?php echo $pointNearByHotel['meta_title']; ?></td>
			<td><?php echo $pointNearByHotel['meta_description']; ?></td>
			<td><?php echo $pointNearByHotel['meta_keyword']; ?></td>
			<td><?php echo $pointNearByHotel['status']; ?></td>
			<td><?php echo $pointNearByHotel['modified']; ?></td>
			<td><?php echo $pointNearByHotel['created']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'point_near_by_hotels', 'action' => 'view', $pointNearByHotel['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'point_near_by_hotels', 'action' => 'edit', $pointNearByHotel['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'point_near_by_hotels', 'action' => 'delete', $pointNearByHotel['id']), null, __('Are you sure you want to delete # %s?', $pointNearByHotel['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Point Near By Hotel'), array('controller' => 'point_near_by_hotels', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Star Ratings'); ?></h3>
	<?php if (!empty($hotel['StarRating'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Shortcode'); ?></th>
		<th><?php echo __('Image'); ?></th>
		<th><?php echo __('Status'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($hotel['StarRating'] as $starRating): ?>
		<tr>
			<td><?php echo $starRating['id']; ?></td>
			<td><?php echo $starRating['name']; ?></td>
			<td><?php echo $starRating['shortcode']; ?></td>
			<td><?php echo $starRating['image']; ?></td>
			<td><?php echo $starRating['status']; ?></td>
			<td><?php echo $starRating['modified']; ?></td>
			<td><?php echo $starRating['created']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'star_ratings', 'action' => 'view', $starRating['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'star_ratings', 'action' => 'edit', $starRating['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'star_ratings', 'action' => 'delete', $starRating['id']), null, __('Are you sure you want to delete # %s?', $starRating['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Star Rating'), array('controller' => 'star_ratings', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Taxes'); ?></h3>
	<?php if (!empty($hotel['Tax'])): ?>
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
		foreach ($hotel['Tax'] as $tax): ?>
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
</div>
