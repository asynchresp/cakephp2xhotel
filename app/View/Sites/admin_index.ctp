<div class="sites index">
	<h2><?php echo __('Sites'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th><?php echo $this->Paginator->sort('site_base_url'); ?></th>
			<th><?php echo $this->Paginator->sort('state_id'); ?></th>
			<th><?php echo $this->Paginator->sort('country_id'); ?></th>
			<th><?php echo $this->Paginator->sort('status'); ?></th>
			<?php /* ?>
			<th><?php echo $this->Paginator->sort('site_base_path'); ?></th>
			<th><?php echo $this->Paginator->sort('site_logo'); ?></th>
			<th><?php echo $this->Paginator->sort('site_bckgrd_color'); ?></th>
			<th><?php echo $this->Paginator->sort('site_foregrd_color'); ?></th>
			<th><?php echo $this->Paginator->sort('address_line1'); ?></th>
			<th><?php echo $this->Paginator->sort('address_line2'); ?></th>
			<th><?php echo $this->Paginator->sort('zipcode'); ?></th>
			<th><?php echo $this->Paginator->sort('description'); ?></th>
			<th><?php echo $this->Paginator->sort('city_id'); ?></th>
			<th><?php echo $this->Paginator->sort('meta_title'); ?></th>
			<th><?php echo $this->Paginator->sort('meta_description'); ?></th>
			<th><?php echo $this->Paginator->sort('meta_keyword'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th><?php */ ?>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($sites as $site): ?>
	<tr>
		<td><?php echo h($site['Site']['id']); ?>&nbsp;</td>
		<td><?php echo h($site['Site']['name']); ?>&nbsp;</td>
		<td><a href="<?php echo h($site['Site']['site_base_url']); ?>" target="_blank"><?php echo h($site['Site']['site_base_url']); ?></a>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($site['State']['name'], array('controller' => 'states', 'action' => 'view', $site['State']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($site['Country']['name'], array('controller' => 'countries', 'action' => 'view', $site['Country']['id'])); ?>
		</td>
		<td><?php if(h($site['Site']['status']) == 1) { echo "Active"; } else { echo "Inactive"; } ?>&nbsp;</td>
		
		<?php /* ?><td><?php echo h($site['Site']['site_base_path']); ?>&nbsp;</td>
		<td><?php echo h($site['Site']['site_logo']); ?>&nbsp;</td>
		<td><?php echo h($site['Site']['site_bckgrd_color']); ?>&nbsp;</td>
		<td><?php echo h($site['Site']['site_foregrd_color']); ?>&nbsp;</td>
		<td><?php echo h($site['Site']['address_line1']); ?>&nbsp;</td>
		<td><?php echo h($site['Site']['address_line2']); ?>&nbsp;</td>
		<td><?php echo h($site['Site']['zipcode']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($site['City']['name'], array('controller' => 'cities', 'action' => 'view', $site['City']['id'])); ?>
		</td>
		<td><?php echo h($site['Site']['meta_title']); ?>&nbsp;</td>
		<td><?php echo h($site['Site']['meta_description']); ?>&nbsp;</td>
		<td><?php echo h($site['Site']['meta_keyword']); ?>&nbsp;</td>
		<td><?php echo h($site['Site']['modified']); ?>&nbsp;</td>
		<td><?php echo h($site['Site']['created']); ?>&nbsp;</td><?php */ ?>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $site['Site']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $site['Site']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $site['Site']['id']), null, __('Are you sure you want to delete # %s?', $site['Site']['id'])); ?>
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
<div class="leftnav">
	<h3><?php // echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Site'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Countries'), array('controller' => 'countries', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Country'), array('controller' => 'countries', 'action' => 'add'),array('class'=>'current')); ?> </li>
		<li><?php echo $this->Html->link(__('List States'), array('controller' => 'states', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New State'), array('controller' => 'states', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Cities'), array('controller' => 'cities', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New City'), array('controller' => 'cities', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Activity Types'), array('controller' => 'activity_types', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Activity Type'), array('controller' => 'activity_types', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Coupons'), array('controller' => 'coupons', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Coupon'), array('controller' => 'coupons', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Food Menu Types'), array('controller' => 'food_menu_types', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Food Menu Type'), array('controller' => 'food_menu_types', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Hotel Cancellation Policies'), array('controller' => 'hotel_cancellation_policies', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Hotel Cancellation Policy'), array('controller' => 'hotel_cancellation_policies', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Hotel Facilities'), array('controller' => 'hotel_facilities', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Hotel Facility'), array('controller' => 'hotel_facilities', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Hotel Facility Categories'), array('controller' => 'hotel_facility_categories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Hotel Facility Category'), array('controller' => 'hotel_facility_categories', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Hotel Groups'), array('controller' => 'hotel_groups', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Hotel Group'), array('controller' => 'hotel_groups', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Hotel Informative Pages'), array('controller' => 'hotel_informative_pages', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Hotel Informative Page'), array('controller' => 'hotel_informative_pages', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Hotel Modification Policies'), array('controller' => 'hotel_modification_policies', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Hotel Modification Policy'), array('controller' => 'hotel_modification_policies', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Hotel Themes'), array('controller' => 'hotel_themes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Hotel Theme'), array('controller' => 'hotel_themes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Hotel Types'), array('controller' => 'hotel_types', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Hotel Type'), array('controller' => 'hotel_types', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Hotels'), array('controller' => 'hotels', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Hotel'), array('controller' => 'hotels', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Point Near By Hotels'), array('controller' => 'point_near_by_hotels', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Point Near By Hotel'), array('controller' => 'point_near_by_hotels', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Popular Points'), array('controller' => 'popular_points', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Popular Point'), array('controller' => 'popular_points', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Taxes'), array('controller' => 'taxes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tax'), array('controller' => 'taxes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Tour Packages'), array('controller' => 'tour_packages', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tour Package'), array('controller' => 'tour_packages', 'action' => 'add')); ?> </li>
	</ul>
</div>
