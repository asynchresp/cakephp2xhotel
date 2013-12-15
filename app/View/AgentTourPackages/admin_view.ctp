<div class="agentTourPackages view">
<h2><?php echo __('Agent Tour Package'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($agentTourPackage['AgentTourPackage']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Site'); ?></dt>
		<dd>
			<?php echo $this->Html->link($agentTourPackage['Site']['name'], array('controller' => 'sites', 'action' => 'view', $agentTourPackage['Site']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($agentTourPackage['AgentTourPackage']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Short Description'); ?></dt>
		<dd>
			<?php echo h($agentTourPackage['AgentTourPackage']['short_description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Long Description'); ?></dt>
		<dd>
			<?php echo h($agentTourPackage['AgentTourPackage']['long_description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tp Order'); ?></dt>
		<dd>
			<?php echo h($agentTourPackage['AgentTourPackage']['tp_order']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('No Person'); ?></dt>
		<dd>
			<?php echo h($agentTourPackage['AgentTourPackage']['no_person']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Activity Type'); ?></dt>
		<dd>
			<?php echo $this->Html->link($agentTourPackage['ActivityType']['name'], array('controller' => 'activity_types', 'action' => 'view', $agentTourPackage['ActivityType']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('St Pt State'); ?></dt>
		<dd>
			<?php echo h($agentTourPackage['AgentTourPackage']['st_pt_state']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('St Pt City'); ?></dt>
		<dd>
			<?php echo h($agentTourPackage['AgentTourPackage']['st_pt_city']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('St Pt Area'); ?></dt>
		<dd>
			<?php echo h($agentTourPackage['AgentTourPackage']['st_pt_area']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('End Pt State'); ?></dt>
		<dd>
			<?php echo h($agentTourPackage['AgentTourPackage']['end_pt_state']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('End Pt Area'); ?></dt>
		<dd>
			<?php echo h($agentTourPackage['AgentTourPackage']['end_pt_area']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Popular Point'); ?></dt>
		<dd>
			<?php echo $this->Html->link($agentTourPackage['PopularPoint']['name'], array('controller' => 'popular_points', 'action' => 'view', $agentTourPackage['PopularPoint']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('St Date'); ?></dt>
		<dd>
			<?php echo h($agentTourPackage['AgentTourPackage']['st_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('End Date'); ?></dt>
		<dd>
			<?php echo h($agentTourPackage['AgentTourPackage']['end_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Price Per Person'); ?></dt>
		<dd>
			<?php echo h($agentTourPackage['AgentTourPackage']['price_per_person']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Pricing Tax Status'); ?></dt>
		<dd>
			<?php echo h($agentTourPackage['AgentTourPackage']['pricing_tax_status']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tax'); ?></dt>
		<dd>
			<?php echo $this->Html->link($agentTourPackage['Tax']['name'], array('controller' => 'taxes', 'action' => 'view', $agentTourPackage['Tax']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Child Age Below1'); ?></dt>
		<dd>
			<?php echo h($agentTourPackage['AgentTourPackage']['child_age_below1']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Price Age Below1'); ?></dt>
		<dd>
			<?php echo h($agentTourPackage['AgentTourPackage']['price_age_below1']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Child Age Below2'); ?></dt>
		<dd>
			<?php echo h($agentTourPackage['AgentTourPackage']['child_age_below2']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Price Age Below2'); ?></dt>
		<dd>
			<?php echo h($agentTourPackage['AgentTourPackage']['price_age_below2']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Child Age Below3'); ?></dt>
		<dd>
			<?php echo h($agentTourPackage['AgentTourPackage']['child_age_below3']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Price Age Below3'); ?></dt>
		<dd>
			<?php echo h($agentTourPackage['AgentTourPackage']['price_age_below3']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Child Above Age1'); ?></dt>
		<dd>
			<?php echo h($agentTourPackage['AgentTourPackage']['child_above_age1']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Price Above Age1'); ?></dt>
		<dd>
			<?php echo h($agentTourPackage['AgentTourPackage']['price_above_age1']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Child Above Age2'); ?></dt>
		<dd>
			<?php echo h($agentTourPackage['AgentTourPackage']['child_above_age2']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Price Above Age2'); ?></dt>
		<dd>
			<?php echo h($agentTourPackage['AgentTourPackage']['price_above_age2']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Child Above Age3'); ?></dt>
		<dd>
			<?php echo h($agentTourPackage['AgentTourPackage']['child_above_age3']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Price Above Age3'); ?></dt>
		<dd>
			<?php echo h($agentTourPackage['AgentTourPackage']['price_above_age3']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Commision'); ?></dt>
		<dd>
			<?php echo h($agentTourPackage['AgentTourPackage']['commision']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Special Price'); ?></dt>
		<dd>
			<?php echo h($agentTourPackage['AgentTourPackage']['special_price']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Special Price Earning'); ?></dt>
		<dd>
			<?php echo h($agentTourPackage['AgentTourPackage']['special_price_earning']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Commision Customer'); ?></dt>
		<dd>
			<?php echo h($agentTourPackage['AgentTourPackage']['commision_customer']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Commision Customer Earining'); ?></dt>
		<dd>
			<?php echo h($agentTourPackage['AgentTourPackage']['commision_customer_earining']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Commision Agent'); ?></dt>
		<dd>
			<?php echo h($agentTourPackage['AgentTourPackage']['commision_agent']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Commision Agent Earining'); ?></dt>
		<dd>
			<?php echo h($agentTourPackage['AgentTourPackage']['commision_agent_earining']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Keyword'); ?></dt>
		<dd>
			<?php echo h($agentTourPackage['AgentTourPackage']['keyword']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Meta Title'); ?></dt>
		<dd>
			<?php echo h($agentTourPackage['AgentTourPackage']['meta_title']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Meta Description'); ?></dt>
		<dd>
			<?php echo h($agentTourPackage['AgentTourPackage']['meta_description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Meta Keyword'); ?></dt>
		<dd>
			<?php echo h($agentTourPackage['AgentTourPackage']['meta_keyword']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Status'); ?></dt>
		<dd>
			<?php echo h($agentTourPackage['AgentTourPackage']['status']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($agentTourPackage['AgentTourPackage']['modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($agentTourPackage['AgentTourPackage']['created']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Agent Tour Package'), array('action' => 'edit', $agentTourPackage['AgentTourPackage']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Agent Tour Package'), array('action' => 'delete', $agentTourPackage['AgentTourPackage']['id']), null, __('Are you sure you want to delete # %s?', $agentTourPackage['AgentTourPackage']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Agent Tour Packages'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Agent Tour Package'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Sites'), array('controller' => 'sites', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Site'), array('controller' => 'sites', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Activity Types'), array('controller' => 'activity_types', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Activity Type'), array('controller' => 'activity_types', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Popular Points'), array('controller' => 'popular_points', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Popular Point'), array('controller' => 'popular_points', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Taxes'), array('controller' => 'taxes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tax'), array('controller' => 'taxes', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Activity Types'); ?></h3>
	<?php if (!empty($agentTourPackage['ActivityType'])): ?>
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
		foreach ($agentTourPackage['ActivityType'] as $activityType): ?>
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
	<h3><?php echo __('Related Popular Points'); ?></h3>
	<?php if (!empty($agentTourPackage['PopularPoint'])): ?>
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
		<th><?php echo __('Pp Image Dir'); ?></th>
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
		foreach ($agentTourPackage['PopularPoint'] as $popularPoint): ?>
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
			<td><?php echo $popularPoint['pp_image_dir']; ?></td>
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
	<h3><?php echo __('Related Sites'); ?></h3>
	<?php if (!empty($agentTourPackage['Site'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Description'); ?></th>
		<th><?php echo __('Site Base Url'); ?></th>
		<th><?php echo __('Site Base Path'); ?></th>
		<th><?php echo __('Site Logo'); ?></th>
		<th><?php echo __('Site Logo Dir'); ?></th>
		<th><?php echo __('Site Bckgrd Color'); ?></th>
		<th><?php echo __('Site Foregrd Color'); ?></th>
		<th><?php echo __('Address Line1'); ?></th>
		<th><?php echo __('Address Line2'); ?></th>
		<th><?php echo __('Zipcode'); ?></th>
		<th><?php echo __('Country Id'); ?></th>
		<th><?php echo __('State Id'); ?></th>
		<th><?php echo __('City Id'); ?></th>
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
		foreach ($agentTourPackage['Site'] as $site): ?>
		<tr>
			<td><?php echo $site['id']; ?></td>
			<td><?php echo $site['name']; ?></td>
			<td><?php echo $site['description']; ?></td>
			<td><?php echo $site['site_base_url']; ?></td>
			<td><?php echo $site['site_base_path']; ?></td>
			<td><?php echo $site['site_logo']; ?></td>
			<td><?php echo $site['site_logo_dir']; ?></td>
			<td><?php echo $site['site_bckgrd_color']; ?></td>
			<td><?php echo $site['site_foregrd_color']; ?></td>
			<td><?php echo $site['address_line1']; ?></td>
			<td><?php echo $site['address_line2']; ?></td>
			<td><?php echo $site['zipcode']; ?></td>
			<td><?php echo $site['country_id']; ?></td>
			<td><?php echo $site['state_id']; ?></td>
			<td><?php echo $site['city_id']; ?></td>
			<td><?php echo $site['meta_title']; ?></td>
			<td><?php echo $site['meta_description']; ?></td>
			<td><?php echo $site['meta_keyword']; ?></td>
			<td><?php echo $site['status']; ?></td>
			<td><?php echo $site['modified']; ?></td>
			<td><?php echo $site['created']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'sites', 'action' => 'view', $site['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'sites', 'action' => 'edit', $site['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'sites', 'action' => 'delete', $site['id']), null, __('Are you sure you want to delete # %s?', $site['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Site'), array('controller' => 'sites', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Taxes'); ?></h3>
	<?php if (!empty($agentTourPackage['Tax'])): ?>
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
		foreach ($agentTourPackage['Tax'] as $tax): ?>
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
