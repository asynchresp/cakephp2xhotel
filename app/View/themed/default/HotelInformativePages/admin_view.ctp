<div class="hotelInformativePages view">
<h2><?php echo __('Hotel Informative Page'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($hotelInformativePage['HotelInformativePage']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Site'); ?></dt>
		<dd>
			<?php echo $this->Html->link($hotelInformativePage['Site']['name'], array('controller' => 'sites', 'action' => 'view', $hotelInformativePage['Site']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Hotel'); ?></dt>
		<dd>
			<?php echo $this->Html->link($hotelInformativePage['Hotel']['name'], array('controller' => 'hotels', 'action' => 'view', $hotelInformativePage['Hotel']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($hotelInformativePage['HotelInformativePage']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Short Description'); ?></dt>
		<dd>
			<?php echo h($hotelInformativePage['HotelInformativePage']['short_description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Long Description'); ?></dt>
		<dd>
			<?php echo h($hotelInformativePage['HotelInformativePage']['long_description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Meta Title'); ?></dt>
		<dd>
			<?php echo h($hotelInformativePage['HotelInformativePage']['meta_title']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Meta Description'); ?></dt>
		<dd>
			<?php echo h($hotelInformativePage['HotelInformativePage']['meta_description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Meta Keyword'); ?></dt>
		<dd>
			<?php echo h($hotelInformativePage['HotelInformativePage']['meta_keyword']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Status'); ?></dt>
		<dd>
			<?php echo h($hotelInformativePage['HotelInformativePage']['status']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($hotelInformativePage['HotelInformativePage']['modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($hotelInformativePage['HotelInformativePage']['created']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Hotel Informative Page'), array('action' => 'edit', $hotelInformativePage['HotelInformativePage']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Hotel Informative Page'), array('action' => 'delete', $hotelInformativePage['HotelInformativePage']['id']), null, __('Are you sure you want to delete # %s?', $hotelInformativePage['HotelInformativePage']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Hotel Informative Pages'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Hotel Informative Page'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Sites'), array('controller' => 'sites', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Site'), array('controller' => 'sites', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Hotels'), array('controller' => 'hotels', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Hotel'), array('controller' => 'hotels', 'action' => 'add')); ?> </li>
	</ul>
</div>
