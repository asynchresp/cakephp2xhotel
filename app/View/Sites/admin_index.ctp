<div class="sites index">
	<!--<h2><?php // echo __('Sites'); ?></h2>-->
        
        <div class="um_box_mid_content_top"><span class="umstyle1"><?php echo __('Sites'); ?></span></div>
        <div class="content_mid">
        
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th><?php echo $this->Paginator->sort('site_logo'); ?></th>
			<th><?php echo $this->Paginator->sort('site_base_url'); ?></th>
			<th><?php echo $this->Paginator->sort('state_id'); ?></th>
			<th><?php echo $this->Paginator->sort('country_id'); ?></th>
			<th><?php echo $this->Paginator->sort('status'); ?></th>
			<?php /* ?>
			<th><?php echo $this->Paginator->sort('site_base_path'); ?></th>
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
		<td>
		<?php
			//echo ROOT.DS."app".DS."webroot".DS."img".DS."site_logo".DS.h($site['Site']['site_logo_dir']).DS.h($site['Site']['site_logo']);
			$filename = ROOT.DS."app".DS."webroot".DS."img".DS."site_logo".DS.h($site['Site']['site_logo_dir']).DS.h($site['Site']['site_logo']);
			if(file_exists($filename)) {
				echo $this->Html->image('/app/webroot/img/site_logo/' . h($site['Site']['site_logo_dir'] . "/thumb_".h($site['Site']['site_logo'])), array('alt'=>h($site['Site']['name'])));
			} else {
				echo $this->Html->image('/app/webroot/img/admin/thumb_no_image.png', array('alt'=>h($site['Site']['name'])));
			}
		?>&nbsp;
		</td>
		<td><?php echo h($site['Site']['site_base_url']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($site['State']['name'], array('controller' => 'states', 'action' => 'view', $site['State']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($site['Country']['name'], array('controller' => 'countries', 'action' => 'view', $site['Country']['id'])); ?>
		</td>
		<td><?php if(h($site['Site']['status']) == 1) { echo "Active"; } else { echo "Inactive"; } ?>&nbsp;</td>
		
		<?php /* ?><td><?php echo h($site['Site']['site_base_path']); ?>&nbsp;</td>
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
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $site['Site']['id']),array('class'=>'view')); ?>
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

</div>
<?php echo $this->element('left_nav');?>
