<div class="roomTypes view">
<h2><?php echo __('Room Type'); ?></h2>
	<dl>
		<dt><?php echo __('Int'); ?></dt>
		<dd>
			<?php echo h($roomType['RoomType']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($roomType['RoomType']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Description'); ?></dt>
		<dd>
			<?php echo h($roomType['RoomType']['description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Status'); ?></dt>
		<dd>
			<?php if(h($roomType['RoomType']['status']) == 1) { echo "Active"; } else { echo "Inactive"; } ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($roomType['RoomType']['modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($roomType['RoomType']['created']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Room Type'), array('action' => 'edit', $roomType['RoomType']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Room Type'), array('action' => 'delete', $roomType['RoomType']['id']), null, __('Are you sure you want to delete # %s?', $roomType['RoomType']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Room Types'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Room Type'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Coupons'), array('controller' => 'coupons', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Coupon'), array('controller' => 'coupons', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Hotel Rooms'), array('controller' => 'hotel_rooms', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Hotel Room'), array('controller' => 'hotel_rooms', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Tour Packages'), array('controller' => 'tour_packages', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tour Package'), array('controller' => 'tour_packages', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Coupons'); ?></h3>
	<?php if (!empty($roomType['Coupon'])): ?>
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
		foreach ($roomType['Coupon'] as $coupon): ?>
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
	<h3><?php echo __('Related Hotel Rooms'); ?></h3>
	<?php if (!empty($roomType['HotelRoom'])): ?>
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
		foreach ($roomType['HotelRoom'] as $hotelRoom): ?>
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
	<?php if (!empty($roomType['TourPackage'])): ?>
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
		foreach ($roomType['TourPackage'] as $tourPackage): ?>
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
