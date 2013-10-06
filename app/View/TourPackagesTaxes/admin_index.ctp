<div class="tourPackagesTaxes index">
    <div class="um_box_mid_content_top"><span class="umstyle1"><?php echo __('Tour Packages Taxes'); ?></span></div>
    <div class="content_mid">
	<!--<h2><?php // echo __('Tour Packages Taxes'); ?></h2>-->
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('tour_package_id'); ?></th>
			<th><?php echo $this->Paginator->sort('tax_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($tourPackagesTaxes as $tourPackagesTax): ?>
	<tr>
		<td><?php echo h($tourPackagesTax['TourPackagesTax']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($tourPackagesTax['TourPackage']['name'], array('controller' => 'tour_packages', 'action' => 'view', $tourPackagesTax['TourPackage']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($tourPackagesTax['Tax']['name'], array('controller' => 'taxes', 'action' => 'view', $tourPackagesTax['Tax']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $tourPackagesTax['TourPackagesTax']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $tourPackagesTax['TourPackagesTax']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $tourPackagesTax['TourPackagesTax']['id']), null, __('Are you sure you want to delete # %s?', $tourPackagesTax['TourPackagesTax']['id'])); ?>
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
</div>
<?php echo $this->element('left_nav');?>