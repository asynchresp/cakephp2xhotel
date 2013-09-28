<div class="foodPackages index">
	<h2><?php echo __('Food Packages'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('food_menu_type_id'); ?></th>
			<th><?php echo $this->Paginator->sort('title'); ?></th>
			<th><?php echo $this->Paginator->sort('status'); ?></th>
			
			<?php /* ?><th><?php echo $this->Paginator->sort('child_age_below1'); ?></th>
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
			<th><?php echo $this->Paginator->sort('upload_menu'); ?></th>
			<th><?php echo $this->Paginator->sort('meta_title'); ?></th>
			<th><?php echo $this->Paginator->sort('meta_description'); ?></th>
			<th><?php echo $this->Paginator->sort('meta_keyword'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th><?php */ ?>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($foodPackages as $foodPackage): ?>
	<tr>
		<td><?php echo h($foodPackage['FoodPackage']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($foodPackage['FoodMenuType']['name'], array('controller' => 'food_menu_types', 'action' => 'view', $foodPackage['FoodMenuType']['id'])); ?>
		</td>
		<td><?php echo h($foodPackage['FoodPackage']['title']); ?>&nbsp;</td>
		<td><?php if(h($foodPackage['FoodPackage']['status'])) { echo "Active"; } else { echo "Inactive"; } ?>&nbsp;</td>
		
		<?php /* ?><td><?php echo h($foodPackage['FoodPackage']['child_age_below1']); ?>&nbsp;</td>
		<td><?php echo h($foodPackage['FoodPackage']['price_age_below1']); ?>&nbsp;</td>
		<td><?php echo h($foodPackage['FoodPackage']['child_age_below2']); ?>&nbsp;</td>
		<td><?php echo h($foodPackage['FoodPackage']['price_age_below2']); ?>&nbsp;</td>
		<td><?php echo h($foodPackage['FoodPackage']['child_age_below3']); ?>&nbsp;</td>
		<td><?php echo h($foodPackage['FoodPackage']['price_age_below3']); ?>&nbsp;</td>
		<td><?php echo h($foodPackage['FoodPackage']['child_above_age1']); ?>&nbsp;</td>
		<td><?php echo h($foodPackage['FoodPackage']['price_above_age1']); ?>&nbsp;</td>
		<td><?php echo h($foodPackage['FoodPackage']['child_above_age2']); ?>&nbsp;</td>
		<td><?php echo h($foodPackage['FoodPackage']['price_above_age2']); ?>&nbsp;</td>
		<td><?php echo h($foodPackage['FoodPackage']['child_above_age3']); ?>&nbsp;</td>
		<td><?php echo h($foodPackage['FoodPackage']['price_above_age3']); ?>&nbsp;</td>
		<td><?php echo h($foodPackage['FoodPackage']['upload_menu']); ?>&nbsp;</td>
		<td><?php echo h($foodPackage['FoodPackage']['meta_title']); ?>&nbsp;</td>
		<td><?php echo h($foodPackage['FoodPackage']['meta_description']); ?>&nbsp;</td>
		<td><?php echo h($foodPackage['FoodPackage']['meta_keyword']); ?>&nbsp;</td>
		<td><?php echo h($foodPackage['FoodPackage']['modified']); ?>&nbsp;</td>
		<td><?php echo h($foodPackage['FoodPackage']['created']); ?>&nbsp;</td><?php */ ?>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $foodPackage['FoodPackage']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $foodPackage['FoodPackage']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $foodPackage['FoodPackage']['id']), null, __('Are you sure you want to delete # %s?', $foodPackage['FoodPackage']['id'])); ?>
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
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Food Package'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Food Menu Types'), array('controller' => 'food_menu_types', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Food Menu Type'), array('controller' => 'food_menu_types', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Hotel Rooms'), array('controller' => 'hotel_rooms', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Hotel Room'), array('controller' => 'hotel_rooms', 'action' => 'add')); ?> </li>
	</ul>
</div>
