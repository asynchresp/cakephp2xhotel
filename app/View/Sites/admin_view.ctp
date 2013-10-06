<div class="sites view">
    <div class="um_box_mid_content_top"><span class="umstyle1"><?php echo __('Site'); ?></span></div>
        <div class="content_mid">
<!--<h2><?php // echo __('Site'); ?></h2>-->
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($site['Site']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($site['Site']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Description'); ?></dt>
		<dd>
			<?php echo html_entity_decode(h($site['Site']['description'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Site Base Url'); ?></dt>
		<dd>
			<?php echo h($site['Site']['site_base_url']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Site Base Path'); ?></dt>
		<dd>
			<?php echo h($site['Site']['site_base_path']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Site Logo'); ?></dt>
		<dd>
			<?php //echo h($site['Site']['site_logo']); ?>
			<?php
			$filename = ROOT.DS."app".DS."webroot".DS."img".DS."site_logo".DS.h($site['Site']['site_logo_dir']).DS.h($site['Site']['site_logo']);
			if(file_exists($filename)) {
				echo $this->Html->image('/app/webroot/img/site_logo/' . h($site['Site']['site_logo_dir'] . "/small_".h($site['Site']['site_logo'])), array('alt'=>h($site['Site']['name'])));
			} else {
				echo $this->Html->image('/app/webroot/img/admin/small_no_image.png', array('alt'=>h($site['Site']['name'])));
			}
			?>
			&nbsp;
		</dd>
		<dt><?php echo __('Site Bckgrd Color'); ?></dt>
		<dd>
			<?php echo h($site['Site']['site_bckgrd_color']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Site Foregrd Color'); ?></dt>
		<dd>
			<?php echo h($site['Site']['site_foregrd_color']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Address Line1'); ?></dt>
		<dd>
			<?php echo h($site['Site']['address_line1']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Address Line2'); ?></dt>
		<dd>
			<?php echo h($site['Site']['address_line2']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Zipcode'); ?></dt>
		<dd>
			<?php echo h($site['Site']['zipcode']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Country'); ?></dt>
		<dd>
			<?php echo $this->Html->link($site['Country']['name'], array('controller' => 'countries', 'action' => 'view', $site['Country']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('State'); ?></dt>
		<dd>
			<?php echo $this->Html->link($site['State']['name'], array('controller' => 'states', 'action' => 'view', $site['State']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('City'); ?></dt>
		<dd>
			<?php echo $this->Html->link($site['City']['name'], array('controller' => 'cities', 'action' => 'view', $site['City']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Meta Title'); ?></dt>
		<dd>
			<?php echo h($site['Site']['meta_title']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Meta Description'); ?></dt>
		<dd>
			<?php echo h($site['Site']['meta_description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Meta Keyword'); ?></dt>
		<dd>
			<?php echo h($site['Site']['meta_keyword']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Status'); ?></dt>
		<dd>
			<?php if(h($site['Site']['status']) == 1) { echo "Active"; } else { echo "Inactive"; } ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($site['Site']['modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($site['Site']['created']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
</div>
<?php echo $this->element('left_nav');?>
<?php /* ?><div class="related">
	<h3><?php echo __('Related Activity Types'); ?></h3>
	<?php if (!empty($site['ActivityType'])): ?>
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
		foreach ($site['ActivityType'] as $activityType): ?>
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
	<h3><?php echo __('Related Coupons'); ?></h3>
	<?php if (!empty($site['Coupon'])): ?>
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
		foreach ($site['Coupon'] as $coupon): ?>
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
	<h3><?php echo __('Related Food Menu Types'); ?></h3>
	<?php if (!empty($site['FoodMenuType'])): ?>
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
		foreach ($site['FoodMenuType'] as $foodMenuType): ?>
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
	<h3><?php echo __('Related Hotel Cancellation Policies'); ?></h3>
	<?php if (!empty($site['HotelCancellationPolicy'])): ?>
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
		foreach ($site['HotelCancellationPolicy'] as $hotelCancellationPolicy): ?>
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
	<?php if (!empty($site['HotelFacility'])): ?>
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
		foreach ($site['HotelFacility'] as $hotelFacility): ?>
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
	<?php if (!empty($site['HotelFacilityCategory'])): ?>
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
		foreach ($site['HotelFacilityCategory'] as $hotelFacilityCategory): ?>
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
	<h3><?php echo __('Related Hotel Groups'); ?></h3>
	<?php if (!empty($site['HotelGroup'])): ?>
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
		foreach ($site['HotelGroup'] as $hotelGroup): ?>
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
	<h3><?php echo __('Related Hotel Informative Pages'); ?></h3>
	<?php if (!empty($site['HotelInformativePage'])): ?>
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
		foreach ($site['HotelInformativePage'] as $hotelInformativePage): ?>
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
	<h3><?php echo __('Related Hotel Modification Policies'); ?></h3>
	<?php if (!empty($site['HotelModificationPolicy'])): ?>
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
		foreach ($site['HotelModificationPolicy'] as $hotelModificationPolicy): ?>
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
	<?php if (!empty($site['HotelTheme'])): ?>
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
		foreach ($site['HotelTheme'] as $hotelTheme): ?>
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
	<h3><?php echo __('Related Hotel Types'); ?></h3>
	<?php if (!empty($site['HotelType'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Site Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Description'); ?></th>
		<th><?php echo __('Status'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($site['HotelType'] as $hotelType): ?>
		<tr>
			<td><?php echo $hotelType['id']; ?></td>
			<td><?php echo $hotelType['site_id']; ?></td>
			<td><?php echo $hotelType['name']; ?></td>
			<td><?php echo $hotelType['description']; ?></td>
			<td><?php echo $hotelType['status']; ?></td>
			<td><?php echo $hotelType['modified']; ?></td>
			<td><?php echo $hotelType['created']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'hotel_types', 'action' => 'view', $hotelType['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'hotel_types', 'action' => 'edit', $hotelType['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'hotel_types', 'action' => 'delete', $hotelType['id']), null, __('Are you sure you want to delete # %s?', $hotelType['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Hotel Type'), array('controller' => 'hotel_types', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Hotels'); ?></h3>
	<?php if (!empty($site['Hotel'])): ?>
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
		foreach ($site['Hotel'] as $hotel): ?>
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
<div class="related">
	<h3><?php echo __('Related Point Near By Hotels'); ?></h3>
	<?php if (!empty($site['PointNearByHotel'])): ?>
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
		foreach ($site['PointNearByHotel'] as $pointNearByHotel): ?>
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
	<h3><?php echo __('Related Popular Points'); ?></h3>
	<?php if (!empty($site['PopularPoint'])): ?>
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
		foreach ($site['PopularPoint'] as $popularPoint): ?>
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
	<?php if (!empty($site['Tax'])): ?>
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
		foreach ($site['Tax'] as $tax): ?>
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
<div class="related">
	<h3><?php echo __('Related Tour Packages'); ?></h3>
	<?php if (!empty($site['TourPackage'])): ?>
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
		foreach ($site['TourPackage'] as $tourPackage): ?>
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
</div><?php */ ?>
