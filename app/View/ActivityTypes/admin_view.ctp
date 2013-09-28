<div class="activityTypes view">
<h2><?php echo __('Activity Type'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($activityType['ActivityType']['id']); ?>
			&nbsp;
		</dd>
		<?php /* ?><dt><?php echo __('Site'); ?></dt>
		<dd>
			<?php echo $this->Html->link($activityType['Site']['name'], array('controller' => 'sites', 'action' => 'view', $activityType['Site']['id'])); ?>
			&nbsp;
		</dd><?php */ ?>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($activityType['ActivityType']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Description'); ?></dt>
		<dd>
			<?php echo h($activityType['ActivityType']['description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Meta Title'); ?></dt>
		<dd>
			<?php echo h($activityType['ActivityType']['meta_title']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Meta Description'); ?></dt>
		<dd>
			<?php echo h($activityType['ActivityType']['meta_description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Meta Keyword'); ?></dt>
		<dd>
			<?php echo h($activityType['ActivityType']['meta_keyword']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Status'); ?></dt>
		<dd>
			<?php if(h($activityType['ActivityType']['status'])) { echo "Active"; } else { echo "Inactive"; } ?>
			&nbsp;
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($activityType['ActivityType']['modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($activityType['ActivityType']['created']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Activity Type'), array('action' => 'edit', $activityType['ActivityType']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Activity Type'), array('action' => 'delete', $activityType['ActivityType']['id']), null, __('Are you sure you want to delete # %s?', $activityType['ActivityType']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Activity Types'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Activity Type'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Sites'), array('controller' => 'sites', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Site'), array('controller' => 'sites', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Popular Points'), array('controller' => 'popular_points', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Popular Point'), array('controller' => 'popular_points', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Tour Packages'), array('controller' => 'tour_packages', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tour Package'), array('controller' => 'tour_packages', 'action' => 'add')); ?> </li>
	</ul>
</div>
<?php /* ?>
<div class="related">
	<h3><?php echo __('Related Popular Points'); ?></h3>
	<?php if (!empty($activityType['PopularPoint'])): ?>
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
		foreach ($activityType['PopularPoint'] as $popularPoint): ?>
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
	<h3><?php echo __('Related Tour Packages'); ?></h3>
	<?php if (!empty($activityType['TourPackage'])): ?>
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
		foreach ($activityType['TourPackage'] as $tourPackage): ?>
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
