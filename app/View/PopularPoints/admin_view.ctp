<div class="popularPoints view">
<h2><?php echo __('Popular Point'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($popularPoint['PopularPoint']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Site'); ?></dt>
		<dd>
			<?php echo $this->Html->link($popularPoint['Site']['name'], array('controller' => 'sites', 'action' => 'view', $popularPoint['Site']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($popularPoint['PopularPoint']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Description'); ?></dt>
		<dd>
			<?php echo h($popularPoint['PopularPoint']['description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Activity Type'); ?></dt>
		<dd>
			<?php echo $this->Html->link($popularPoint['ActivityType']['name'], array('controller' => 'activity_types', 'action' => 'view', $popularPoint['ActivityType']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Best Time Visit To'); ?></dt>
		<dd>
			<?php echo h($popularPoint['PopularPoint']['best_time_visit_to']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Best Time Visit From'); ?></dt>
		<dd>
			<?php echo h($popularPoint['PopularPoint']['best_time_visit_from']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Suitable'); ?></dt>
		<dd>
			<?php echo h($popularPoint['PopularPoint']['suitable']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Age Group'); ?></dt>
		<dd>
			<?php echo h($popularPoint['PopularPoint']['age_group']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Entry Fees'); ?></dt>
		<dd>
			<?php echo h($popularPoint['PopularPoint']['entry_fees']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Country'); ?></dt>
		<dd>
			<?php echo $this->Html->link($popularPoint['Country']['name'], array('controller' => 'countries', 'action' => 'view', $popularPoint['Country']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('State'); ?></dt>
		<dd>
			<?php echo $this->Html->link($popularPoint['State']['name'], array('controller' => 'states', 'action' => 'view', $popularPoint['State']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('City'); ?></dt>
		<dd>
			<?php echo $this->Html->link($popularPoint['City']['name'], array('controller' => 'cities', 'action' => 'view', $popularPoint['City']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Area'); ?></dt>
		<dd>
			<?php echo h($popularPoint['PopularPoint']['area']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Latitude'); ?></dt>
		<dd>
			<?php echo h($popularPoint['PopularPoint']['latitude']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Longitude'); ?></dt>
		<dd>
			<?php echo h($popularPoint['PopularPoint']['longitude']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Visit Duration'); ?></dt>
		<dd>
			<?php echo h($popularPoint['PopularPoint']['visit_duration']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Opening Time'); ?></dt>
		<dd>
			<?php echo h($popularPoint['PopularPoint']['opening_time']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Closing Time'); ?></dt>
		<dd>
			<?php echo h($popularPoint['PopularPoint']['closing_time']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Pp Image'); ?></dt>
		<dd>
			<?php echo h($popularPoint['PopularPoint']['pp_image']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Pp Video'); ?></dt>
		<dd>
			<?php echo h($popularPoint['PopularPoint']['pp_video']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Meta Title'); ?></dt>
		<dd>
			<?php echo h($popularPoint['PopularPoint']['meta_title']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Meta Description'); ?></dt>
		<dd>
			<?php echo h($popularPoint['PopularPoint']['meta_description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Meta Keyword'); ?></dt>
		<dd>
			<?php echo h($popularPoint['PopularPoint']['meta_keyword']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Status'); ?></dt>
		<dd>
			<?php if(h($popularPoint['PopularPoint']['status']) == 1) { echo "Active"; } else { echo "Inactive"; } ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($popularPoint['PopularPoint']['modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($popularPoint['PopularPoint']['created']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Popular Point'), array('action' => 'edit', $popularPoint['PopularPoint']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Popular Point'), array('action' => 'delete', $popularPoint['PopularPoint']['id']), null, __('Are you sure you want to delete # %s?', $popularPoint['PopularPoint']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Popular Points'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Popular Point'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Sites'), array('controller' => 'sites', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Site'), array('controller' => 'sites', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Activity Types'), array('controller' => 'activity_types', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Activity Type'), array('controller' => 'activity_types', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Countries'), array('controller' => 'countries', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Country'), array('controller' => 'countries', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List States'), array('controller' => 'states', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New State'), array('controller' => 'states', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Cities'), array('controller' => 'cities', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New City'), array('controller' => 'cities', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Tour Packages'), array('controller' => 'tour_packages', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tour Package'), array('controller' => 'tour_packages', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Tour Packages'); ?></h3>
	<?php if (!empty($popularPoint['TourPackage'])): ?>
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
		foreach ($popularPoint['TourPackage'] as $tourPackage): ?>
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
