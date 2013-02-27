<div class="pictures view">
<h2><?php  echo __('Picture'); ?></h2>
	<dl>
	
		<dd>
			<li><img src="/eatme/app/webroot/files/users/2013/02/<?php echo $picture['Picture']['url'];?>"></li>
		</dd>
		<dt><?php echo __('Url'); ?></dt>
		<dd>
			<?php echo h($picture['Picture']['url']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Legend'); ?></dt>
		<dd>
			<?php echo h($picture['Picture']['legend']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($picture['Picture']['created']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Picture'), array('action' => 'edit', $picture['Picture']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Picture'), array('action' => 'delete', $picture['Picture']['id']), null, __('Are you sure you want to delete # %s?', $picture['Picture']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Pictures'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Picture'), array('action' => 'add')); ?> </li>

	</ul>
</div>
	
		
	</div>
	