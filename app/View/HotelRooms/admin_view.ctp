<div class="hotelRooms view">
     <div class="um_box_mid_content_top"><span class="umstyle1"><?php echo __('Hotel Room'); ?></span></div>
    <div class="content_mid">
<!--<h2><?php // echo __('Hotel Room'); ?></h2>-->
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($hotelRoom['HotelRoom']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Country'); ?></dt>
		<dd>
			<?php echo $this->Html->link($hotelRoom['Country']['name'], array('controller' => 'countries', 'action' => 'view', $hotelRoom['Country']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('State'); ?></dt>
		<dd>
			<?php echo $this->Html->link($hotelRoom['State']['name'], array('controller' => 'states', 'action' => 'view', $hotelRoom['State']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('City'); ?></dt>
		<dd>
			<?php echo $this->Html->link($hotelRoom['City']['name'], array('controller' => 'cities', 'action' => 'view', $hotelRoom['City']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Hotel'); ?></dt>
		<dd>
			<?php echo $this->Html->link($hotelRoom['Hotel']['name'], array('controller' => 'hotels', 'action' => 'view', $hotelRoom['Hotel']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Room Type'); ?></dt>
		<dd>
			<?php echo $this->Html->link($hotelRoom['RoomType']['name'], array('controller' => 'room_types', 'action' => 'view', $hotelRoom['RoomType']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Inventory'); ?></dt>
		<dd>
			<?php echo h($hotelRoom['HotelRoom']['inventory']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($hotelRoom['HotelRoom']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Short Description'); ?></dt>
		<dd>
			<?php echo h($hotelRoom['HotelRoom']['short_description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Long Description'); ?></dt>
		<dd>
			<?php echo h($hotelRoom['HotelRoom']['long_description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Max Adults'); ?></dt>
		<dd>
			<?php echo h($hotelRoom['HotelRoom']['max_adults']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Max Childs'); ?></dt>
		<dd>
			<?php echo h($hotelRoom['HotelRoom']['max_childs']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Extra Guest Occupancy'); ?></dt>
		<dd>
			<?php echo h($hotelRoom['HotelRoom']['extra_guest_occupancy']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('No Of Beds'); ?></dt>
		<dd>
			<?php echo h($hotelRoom['HotelRoom']['no_of_beds']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Room Order'); ?></dt>
		<dd>
			<?php echo h($hotelRoom['HotelRoom']['room_order']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Room Image1'); ?></dt>
		<dd>
			<?php echo h($hotelRoom['HotelRoom']['room_image1']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Room Image2'); ?></dt>
		<dd>
			<?php echo h($hotelRoom['HotelRoom']['room_image2']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Room Image3'); ?></dt>
		<dd>
			<?php echo h($hotelRoom['HotelRoom']['room_image3']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Room Image4'); ?></dt>
		<dd>
			<?php echo h($hotelRoom['HotelRoom']['room_image4']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Room Image5'); ?></dt>
		<dd>
			<?php echo h($hotelRoom['HotelRoom']['room_image5']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Room Video'); ?></dt>
		<dd>
			<?php echo h($hotelRoom['HotelRoom']['room_video']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Food Menu Type'); ?></dt>
		<dd>
			<?php echo $this->Html->link($hotelRoom['FoodMenuType']['name'], array('controller' => 'food_menu_types', 'action' => 'view', $hotelRoom['FoodMenuType']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Food Package'); ?></dt>
		<dd>
			<?php echo $this->Html->link($hotelRoom['FoodPackage']['title'], array('controller' => 'food_packages', 'action' => 'view', $hotelRoom['FoodPackage']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Hotel Facility Category'); ?></dt>
		<dd>
			<?php echo $this->Html->link($hotelRoom['HotelFacilityCategory']['name'], array('controller' => 'hotel_facility_categories', 'action' => 'view', $hotelRoom['HotelFacilityCategory']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Hotel Facility'); ?></dt>
		<dd>
			<?php echo $this->Html->link($hotelRoom['HotelFacility']['name'], array('controller' => 'hotel_facilities', 'action' => 'view', $hotelRoom['HotelFacility']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Room Price'); ?></dt>
		<dd>
			<?php echo h($hotelRoom['HotelRoom']['room_price']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Pricing Tax Status'); ?></dt>
		<dd>
			<?php echo h($hotelRoom['HotelRoom']['pricing_tax_status']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tax'); ?></dt>
		<dd>
			<?php echo $this->Html->link($hotelRoom['Tax']['name'], array('controller' => 'taxes', 'action' => 'view', $hotelRoom['Tax']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Additional Guest'); ?></dt>
		<dd>
			<?php echo h($hotelRoom['HotelRoom']['additional_guest']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Child Age Below1'); ?></dt>
		<dd>
			<?php echo h($hotelRoom['HotelRoom']['child_age_below1']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Price Age Below1'); ?></dt>
		<dd>
			<?php echo h($hotelRoom['HotelRoom']['price_age_below1']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Child Age Below2'); ?></dt>
		<dd>
			<?php echo h($hotelRoom['HotelRoom']['child_age_below2']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Price Age Below2'); ?></dt>
		<dd>
			<?php echo h($hotelRoom['HotelRoom']['price_age_below2']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Child Age Below3'); ?></dt>
		<dd>
			<?php echo h($hotelRoom['HotelRoom']['child_age_below3']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Price Age Below3'); ?></dt>
		<dd>
			<?php echo h($hotelRoom['HotelRoom']['price_age_below3']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Child Above Age1'); ?></dt>
		<dd>
			<?php echo h($hotelRoom['HotelRoom']['child_above_age1']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Price Above Age1'); ?></dt>
		<dd>
			<?php echo h($hotelRoom['HotelRoom']['price_above_age1']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Child Above Age2'); ?></dt>
		<dd>
			<?php echo h($hotelRoom['HotelRoom']['child_above_age2']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Price Above Age2'); ?></dt>
		<dd>
			<?php echo h($hotelRoom['HotelRoom']['price_above_age2']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Child Above Age3'); ?></dt>
		<dd>
			<?php echo h($hotelRoom['HotelRoom']['child_above_age3']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Price Above Age3'); ?></dt>
		<dd>
			<?php echo h($hotelRoom['HotelRoom']['price_above_age3']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Commision'); ?></dt>
		<dd>
			<?php echo h($hotelRoom['HotelRoom']['commision']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Special Price'); ?></dt>
		<dd>
			<?php echo h($hotelRoom['HotelRoom']['special_price']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Special Price Earning'); ?></dt>
		<dd>
			<?php echo h($hotelRoom['HotelRoom']['special_price_earning']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Commision Customer'); ?></dt>
		<dd>
			<?php echo h($hotelRoom['HotelRoom']['commision_customer']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Commision Customer Earining'); ?></dt>
		<dd>
			<?php echo h($hotelRoom['HotelRoom']['commision_customer_earining']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Commision Agent'); ?></dt>
		<dd>
			<?php echo h($hotelRoom['HotelRoom']['commision_agent']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Commision Agent Earining'); ?></dt>
		<dd>
			<?php echo h($hotelRoom['HotelRoom']['commision_agent_earining']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Meta Title'); ?></dt>
		<dd>
			<?php echo h($hotelRoom['HotelRoom']['meta_title']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Meta Description'); ?></dt>
		<dd>
			<?php echo h($hotelRoom['HotelRoom']['meta_description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Meta Keyword'); ?></dt>
		<dd>
			<?php echo h($hotelRoom['HotelRoom']['meta_keyword']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Status'); ?></dt>
		<dd>
			<?php echo h($hotelRoom['HotelRoom']['status']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($hotelRoom['HotelRoom']['modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($hotelRoom['HotelRoom']['created']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
</div>
<?php echo $this->element('left_nav');?>
<div class="related">
	<h3><?php echo __('Related Coupons'); ?></h3>
	<?php if (!empty($hotelRoom['Coupon'])): ?>
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
		foreach ($hotelRoom['Coupon'] as $coupon): ?>
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
	<h3><?php echo __('Related Tour Packages'); ?></h3>
	<?php if (!empty($hotelRoom['TourPackage'])): ?>
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
		foreach ($hotelRoom['TourPackage'] as $tourPackage): ?>
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
	<h3><?php echo __('Related Food Menu Types'); ?></h3>
	<?php if (!empty($hotelRoom['FoodMenuType'])): ?>
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
		foreach ($hotelRoom['FoodMenuType'] as $foodMenuType): ?>
		<tr>
			<td><?php echo $foodMenuType['id']; ?></td>
			<td><?php echo $foodMenuType['site_id']; ?></td>
			<td><?php echo $foodMenuType['name']; ?></td>
			<td><?php echo $foodMenuType['description']; ?></td>
			<td><?php echo $foodMenuType['meta_title']; ?></td>
			<td><?php echo $foodMenuType['meta_description']; ?></td>
			<td><?php echo $foodMenuType['meta_keyword']; ?></td>
			<td><?php echo $foodMenuType['status']; ?></td>
			<td><?php echo $foodMenuType['modified']; ?></td>
			<td><?php echo $foodMenuType['created']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'food_menu_types', 'action' => 'view', $foodMenuType['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'food_menu_types', 'action' => 'edit', $foodMenuType['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'food_menu_types', 'action' => 'delete', $foodMenuType['id']), null, __('Are you sure you want to delete # %s?', $foodMenuType['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Food Menu Type'), array('controller' => 'food_menu_types', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Food Packages'); ?></h3>
	<?php if (!empty($hotelRoom['FoodPackage'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Food Menu Type Id'); ?></th>
		<th><?php echo __('Title'); ?></th>
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
		<th><?php echo __('Upload Menu'); ?></th>
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
		foreach ($hotelRoom['FoodPackage'] as $foodPackage): ?>
		<tr>
			<td><?php echo $foodPackage['id']; ?></td>
			<td><?php echo $foodPackage['food_menu_type_id']; ?></td>
			<td><?php echo $foodPackage['title']; ?></td>
			<td><?php echo $foodPackage['child_age_below1']; ?></td>
			<td><?php echo $foodPackage['price_age_below1']; ?></td>
			<td><?php echo $foodPackage['child_age_below2']; ?></td>
			<td><?php echo $foodPackage['price_age_below2']; ?></td>
			<td><?php echo $foodPackage['child_age_below3']; ?></td>
			<td><?php echo $foodPackage['price_age_below3']; ?></td>
			<td><?php echo $foodPackage['child_above_age1']; ?></td>
			<td><?php echo $foodPackage['price_above_age1']; ?></td>
			<td><?php echo $foodPackage['child_above_age2']; ?></td>
			<td><?php echo $foodPackage['price_above_age2']; ?></td>
			<td><?php echo $foodPackage['child_above_age3']; ?></td>
			<td><?php echo $foodPackage['price_above_age3']; ?></td>
			<td><?php echo $foodPackage['upload_menu']; ?></td>
			<td><?php echo $foodPackage['meta_title']; ?></td>
			<td><?php echo $foodPackage['meta_description']; ?></td>
			<td><?php echo $foodPackage['meta_keyword']; ?></td>
			<td><?php echo $foodPackage['status']; ?></td>
			<td><?php echo $foodPackage['modified']; ?></td>
			<td><?php echo $foodPackage['created']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'food_packages', 'action' => 'view', $foodPackage['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'food_packages', 'action' => 'edit', $foodPackage['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'food_packages', 'action' => 'delete', $foodPackage['id']), null, __('Are you sure you want to delete # %s?', $foodPackage['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Food Package'), array('controller' => 'food_packages', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Hotel Facilities'); ?></h3>
	<?php if (!empty($hotelRoom['HotelFacility'])): ?>
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
		foreach ($hotelRoom['HotelFacility'] as $hotelFacility): ?>
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
	<?php if (!empty($hotelRoom['HotelFacilityCategory'])): ?>
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
		foreach ($hotelRoom['HotelFacilityCategory'] as $hotelFacilityCategory): ?>
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
	<h3><?php echo __('Related Taxes'); ?></h3>
	<?php if (!empty($hotelRoom['Tax'])): ?>
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
		foreach ($hotelRoom['Tax'] as $tax): ?>
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
