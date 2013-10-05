<div class="coupons view">
<h2><?php echo __('Coupon'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($coupon['Coupon']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Site'); ?></dt>
		<dd>
			<?php echo $this->Html->link($coupon['Site']['name'], array('controller' => 'sites', 'action' => 'view', $coupon['Site']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Hotel'); ?></dt>
		<dd>
			<?php echo $this->Html->link($coupon['Hotel']['name'], array('controller' => 'hotels', 'action' => 'view', $coupon['Hotel']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Room Type'); ?></dt>
		<dd>
			<?php echo $this->Html->link($coupon['RoomType']['name'], array('controller' => 'room_types', 'action' => 'view', $coupon['RoomType']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Hotel Room'); ?></dt>
		<dd>
			<?php echo $this->Html->link($coupon['HotelRoom']['name'], array('controller' => 'hotel_rooms', 'action' => 'view', $coupon['HotelRoom']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($coupon['Coupon']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Description'); ?></dt>
		<dd>
			<?php echo html_entity_decode(h($coupon['Coupon']['description'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Coupon Code'); ?></dt>
		<dd>
			<?php echo h($coupon['Coupon']['coupon_code']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Coupon St Date'); ?></dt>
		<dd>
			<?php echo h($coupon['Coupon']['coupon_st_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Coupon Expiry Date'); ?></dt>
		<dd>
			<?php echo h($coupon['Coupon']['coupon_expiry_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Min Night'); ?></dt>
		<dd>
			<?php echo h($coupon['Coupon']['min_night']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Max Guest'); ?></dt>
		<dd>
			<?php echo h($coupon['Coupon']['max_guest']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Discount'); ?></dt>
		<dd>
			<?php echo h($coupon['Coupon']['discount']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Meta Title'); ?></dt>
		<dd>
			<?php echo h($coupon['Coupon']['meta_title']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Meta Description'); ?></dt>
		<dd>
			<?php echo h($coupon['Coupon']['meta_description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Meta Keyword'); ?></dt>
		<dd>
			<?php echo h($coupon['Coupon']['meta_keyword']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Status'); ?></dt>
		<dd>
			<?php if(h($coupon['Coupon']['status'])) { echo "Active"; } else { echo "Inactive"; } ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($coupon['Coupon']['modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($coupon['Coupon']['created']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Coupon'), array('action' => 'edit', $coupon['Coupon']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Coupon'), array('action' => 'delete', $coupon['Coupon']['id']), null, __('Are you sure you want to delete # %s?', $coupon['Coupon']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Coupons'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Coupon'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Sites'), array('controller' => 'sites', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Site'), array('controller' => 'sites', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Hotels'), array('controller' => 'hotels', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Hotel'), array('controller' => 'hotels', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Room Types'), array('controller' => 'room_types', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Room Type'), array('controller' => 'room_types', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Hotel Rooms'), array('controller' => 'hotel_rooms', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Hotel Room'), array('controller' => 'hotel_rooms', 'action' => 'add')); ?> </li>
	</ul>
</div>
<?php /* ?>
<div class="related">
	<h3><?php echo __('Related Hotel Rooms'); ?></h3>
	<?php if (!empty($coupon['HotelRoom'])): ?>
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
		foreach ($coupon['HotelRoom'] as $hotelRoom): ?>
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
<?php */ ?>