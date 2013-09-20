<div class="foodPackages view">
<h2><?php echo __('Food Package'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($foodPackage['FoodPackage']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Food Menu Type'); ?></dt>
		<dd>
			<?php echo $this->Html->link($foodPackage['FoodMenuType']['name'], array('controller' => 'food_menu_types', 'action' => 'view', $foodPackage['FoodMenuType']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Title'); ?></dt>
		<dd>
			<?php echo h($foodPackage['FoodPackage']['title']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Child Age Below1'); ?></dt>
		<dd>
			<?php echo h($foodPackage['FoodPackage']['child_age_below1']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Price Age Below1'); ?></dt>
		<dd>
			<?php echo h($foodPackage['FoodPackage']['price_age_below1']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Child Age Below2'); ?></dt>
		<dd>
			<?php echo h($foodPackage['FoodPackage']['child_age_below2']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Price Age Below2'); ?></dt>
		<dd>
			<?php echo h($foodPackage['FoodPackage']['price_age_below2']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Child Age Below3'); ?></dt>
		<dd>
			<?php echo h($foodPackage['FoodPackage']['child_age_below3']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Price Age Below3'); ?></dt>
		<dd>
			<?php echo h($foodPackage['FoodPackage']['price_age_below3']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Child Above Age1'); ?></dt>
		<dd>
			<?php echo h($foodPackage['FoodPackage']['child_above_age1']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Price Above Age1'); ?></dt>
		<dd>
			<?php echo h($foodPackage['FoodPackage']['price_above_age1']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Child Above Age2'); ?></dt>
		<dd>
			<?php echo h($foodPackage['FoodPackage']['child_above_age2']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Price Above Age2'); ?></dt>
		<dd>
			<?php echo h($foodPackage['FoodPackage']['price_above_age2']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Child Above Age3'); ?></dt>
		<dd>
			<?php echo h($foodPackage['FoodPackage']['child_above_age3']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Price Above Age3'); ?></dt>
		<dd>
			<?php echo h($foodPackage['FoodPackage']['price_above_age3']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Upload Menu'); ?></dt>
		<dd>
			<?php echo h($foodPackage['FoodPackage']['upload_menu']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Meta Title'); ?></dt>
		<dd>
			<?php echo h($foodPackage['FoodPackage']['meta_title']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Meta Description'); ?></dt>
		<dd>
			<?php echo h($foodPackage['FoodPackage']['meta_description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Meta Keyword'); ?></dt>
		<dd>
			<?php echo h($foodPackage['FoodPackage']['meta_keyword']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Status'); ?></dt>
		<dd>
			<?php echo h($foodPackage['FoodPackage']['status']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($foodPackage['FoodPackage']['modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($foodPackage['FoodPackage']['created']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Food Package'), array('action' => 'edit', $foodPackage['FoodPackage']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Food Package'), array('action' => 'delete', $foodPackage['FoodPackage']['id']), null, __('Are you sure you want to delete # %s?', $foodPackage['FoodPackage']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Food Packages'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Food Package'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Food Menu Types'), array('controller' => 'food_menu_types', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Food Menu Type'), array('controller' => 'food_menu_types', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Hotel Rooms'), array('controller' => 'hotel_rooms', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Hotel Room'), array('controller' => 'hotel_rooms', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Hotel Rooms'); ?></h3>
	<?php if (!empty($foodPackage['HotelRoom'])): ?>
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
		foreach ($foodPackage['HotelRoom'] as $hotelRoom): ?>
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
