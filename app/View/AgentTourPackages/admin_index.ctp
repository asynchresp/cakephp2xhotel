<div class="agentTourPackages index">
    <div class="um_box_mid_content_top"><span class="umstyle1"><?php echo __('Agent Tour Packages'); ?></span></div>
    <div class="content_mid">
	<?php /* ?><h2><?php echo __('Agent Tour Packages'); ?></h2><?php */ ?>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th><?php echo $this->Paginator->sort('st_date'); ?></th>
			<th><?php echo $this->Paginator->sort('end_date'); ?></th>
			<th><?php echo $this->Paginator->sort('status'); ?></th>
			
			<?php /* ?><th><?php echo $this->Paginator->sort('site_id'); ?></th>
			<th><?php echo $this->Paginator->sort('short_description'); ?></th>
			<th><?php echo $this->Paginator->sort('long_description'); ?></th>
			<th><?php echo $this->Paginator->sort('tp_order'); ?></th>
			<th><?php echo $this->Paginator->sort('no_person'); ?></th>
			<th><?php echo $this->Paginator->sort('activity_type_id'); ?></th>
			<th><?php echo $this->Paginator->sort('st_pt_state'); ?></th>
			<th><?php echo $this->Paginator->sort('st_pt_city'); ?></th>
			<th><?php echo $this->Paginator->sort('st_pt_area'); ?></th>
			<th><?php echo $this->Paginator->sort('end_pt_state'); ?></th>
			<th><?php echo $this->Paginator->sort('end_pt_area'); ?></th>
			<th><?php echo $this->Paginator->sort('popular_point_id'); ?></th>
			<th><?php echo $this->Paginator->sort('price_per_person'); ?></th>
			<th><?php echo $this->Paginator->sort('pricing_tax_status'); ?></th>
			<th><?php echo $this->Paginator->sort('tax_id'); ?></th>
			<th><?php echo $this->Paginator->sort('child_age_below1'); ?></th>
			<th><?php echo $this->Paginator->sort('price_age_below1'); ?></th>
			<th><?php echo $this->Paginator->sort('child_age_below2'); ?></th>
			<th><?php echo $this->Paginator->sort('price_age_below2'); ?></th>
			<th><?php echo $this->Paginator->sort('child_age_below3'); ?></th>
			<th><?php echo $this->Paginator->sort('price_age_below3'); ?></th>
			<th><?php echo $this->Paginator->sort('child_above_age1'); ?></th>
			<th><?php echo $this->Paginator->sort('price_above_age1'); ?></th>
			<th><?php echo $this->Paginator->sort('child_above_age2'); ?></th>
			<th><?php echo $this->Paginator->sort('price_above_age2'); ?></th>
			<th><?php echo $this->Paginator->sort('child_above_age3'); ?></th>
			<th><?php echo $this->Paginator->sort('price_above_age3'); ?></th>
			<th><?php echo $this->Paginator->sort('commision'); ?></th>
			<th><?php echo $this->Paginator->sort('special_price'); ?></th>
			<th><?php echo $this->Paginator->sort('special_price_earning'); ?></th>
			<th><?php echo $this->Paginator->sort('commision_customer'); ?></th>
			<th><?php echo $this->Paginator->sort('commision_customer_earining'); ?></th>
			<th><?php echo $this->Paginator->sort('commision_agent'); ?></th>
			<th><?php echo $this->Paginator->sort('commision_agent_earining'); ?></th>
			<th><?php echo $this->Paginator->sort('keyword'); ?></th>
			<th><?php echo $this->Paginator->sort('meta_title'); ?></th>
			<th><?php echo $this->Paginator->sort('meta_description'); ?></th>
			<th><?php echo $this->Paginator->sort('meta_keyword'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th><?php */ ?>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($agentTourPackages as $agentTourPackage): ?>
	<tr>
		<td><?php echo h($agentTourPackage['AgentTourPackage']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($agentTourPackage['Site']['name'], array('controller' => 'sites', 'action' => 'view', $agentTourPackage['Site']['id'])); ?>
		</td>
		<td><?php echo h($agentTourPackage['AgentTourPackage']['name']); ?>&nbsp;</td>
		<td><?php echo h($agentTourPackage['AgentTourPackage']['st_date']); ?>&nbsp;</td>
		<td><?php echo h($agentTourPackage['AgentTourPackage']['end_date']); ?>&nbsp;</td>
		<td><?php echo h($agentTourPackage['AgentTourPackage']['status']); ?>&nbsp;</td>	
		
		<?php /* ?><td><?php echo h($agentTourPackage['AgentTourPackage']['short_description']); ?>&nbsp;</td>
		<td><?php echo h($agentTourPackage['AgentTourPackage']['long_description']); ?>&nbsp;</td>
		<td><?php echo h($agentTourPackage['AgentTourPackage']['tp_order']); ?>&nbsp;</td>
		<td><?php echo h($agentTourPackage['AgentTourPackage']['no_person']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($agentTourPackage['ActivityType']['name'], array('controller' => 'activity_types', 'action' => 'view', $agentTourPackage['ActivityType']['id'])); ?>
		</td>
		<td><?php echo h($agentTourPackage['AgentTourPackage']['st_pt_state']); ?>&nbsp;</td>
		<td><?php echo h($agentTourPackage['AgentTourPackage']['st_pt_city']); ?>&nbsp;</td>
		<td><?php echo h($agentTourPackage['AgentTourPackage']['st_pt_area']); ?>&nbsp;</td>
		<td><?php echo h($agentTourPackage['AgentTourPackage']['end_pt_state']); ?>&nbsp;</td>
		<td><?php echo h($agentTourPackage['AgentTourPackage']['end_pt_area']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($agentTourPackage['PopularPoint']['name'], array('controller' => 'popular_points', 'action' => 'view', $agentTourPackage['PopularPoint']['id'])); ?>
		</td>
		<td><?php echo h($agentTourPackage['AgentTourPackage']['price_per_person']); ?>&nbsp;</td>
		<td><?php echo h($agentTourPackage['AgentTourPackage']['pricing_tax_status']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($agentTourPackage['Tax']['name'], array('controller' => 'taxes', 'action' => 'view', $agentTourPackage['Tax']['id'])); ?>
		</td>
		<td><?php echo h($agentTourPackage['AgentTourPackage']['child_age_below1']); ?>&nbsp;</td>
		<td><?php echo h($agentTourPackage['AgentTourPackage']['price_age_below1']); ?>&nbsp;</td>
		<td><?php echo h($agentTourPackage['AgentTourPackage']['child_age_below2']); ?>&nbsp;</td>
		<td><?php echo h($agentTourPackage['AgentTourPackage']['price_age_below2']); ?>&nbsp;</td>
		<td><?php echo h($agentTourPackage['AgentTourPackage']['child_age_below3']); ?>&nbsp;</td>
		<td><?php echo h($agentTourPackage['AgentTourPackage']['price_age_below3']); ?>&nbsp;</td>
		<td><?php echo h($agentTourPackage['AgentTourPackage']['child_above_age1']); ?>&nbsp;</td>
		<td><?php echo h($agentTourPackage['AgentTourPackage']['price_above_age1']); ?>&nbsp;</td>
		<td><?php echo h($agentTourPackage['AgentTourPackage']['child_above_age2']); ?>&nbsp;</td>
		<td><?php echo h($agentTourPackage['AgentTourPackage']['price_above_age2']); ?>&nbsp;</td>
		<td><?php echo h($agentTourPackage['AgentTourPackage']['child_above_age3']); ?>&nbsp;</td>
		<td><?php echo h($agentTourPackage['AgentTourPackage']['price_above_age3']); ?>&nbsp;</td>
		<td><?php echo h($agentTourPackage['AgentTourPackage']['commision']); ?>&nbsp;</td>
		<td><?php echo h($agentTourPackage['AgentTourPackage']['special_price']); ?>&nbsp;</td>
		<td><?php echo h($agentTourPackage['AgentTourPackage']['special_price_earning']); ?>&nbsp;</td>
		<td><?php echo h($agentTourPackage['AgentTourPackage']['commision_customer']); ?>&nbsp;</td>
		<td><?php echo h($agentTourPackage['AgentTourPackage']['commision_customer_earining']); ?>&nbsp;</td>
		<td><?php echo h($agentTourPackage['AgentTourPackage']['commision_agent']); ?>&nbsp;</td>
		<td><?php echo h($agentTourPackage['AgentTourPackage']['commision_agent_earining']); ?>&nbsp;</td>
		<td><?php echo h($agentTourPackage['AgentTourPackage']['keyword']); ?>&nbsp;</td>
		<td><?php echo h($agentTourPackage['AgentTourPackage']['meta_title']); ?>&nbsp;</td>
		<td><?php echo h($agentTourPackage['AgentTourPackage']['meta_description']); ?>&nbsp;</td>
		<td><?php echo h($agentTourPackage['AgentTourPackage']['meta_keyword']); ?>&nbsp;</td>
		<td><?php echo h($agentTourPackage['AgentTourPackage']['modified']); ?>&nbsp;</td>
		<td><?php echo h($agentTourPackage['AgentTourPackage']['created']); ?>&nbsp;</td><?php */ ?>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $agentTourPackage['AgentTourPackage']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $agentTourPackage['AgentTourPackage']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $agentTourPackage['AgentTourPackage']['id']), null, __('Are you sure you want to delete # %s?', $agentTourPackage['AgentTourPackage']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>
	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
</div>
<?php echo $this->element('left_nav');?>
