<div class="pictures view">
<h2><?php  echo __('Picture'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($picture['Picture']['id']); ?>
			&nbsp;
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
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
	<div class="related">
		<h3><?php echo __('Related Users'); ?></h3>
	<?php if (!empty($picture['User'])): ?>
		<dl>
			<dt><?php echo __('Id'); ?></dt>
		<dd>
	<?php echo $picture['User']['id']; ?>
&nbsp;</dd>
		<dt><?php echo __('Username'); ?></dt>
		<dd>
	<?php echo $picture['User']['username']; ?>
&nbsp;</dd>
		<dt><?php echo __('Password'); ?></dt>
		<dd>
	<?php echo $picture['User']['password']; ?>
&nbsp;</dd>
		<dt><?php echo __('Email'); ?></dt>
		<dd>
	<?php echo $picture['User']['email']; ?>
&nbsp;</dd>
		<dt><?php echo __('Message Id'); ?></dt>
		<dd>
	<?php echo $picture['User']['message_id']; ?>
&nbsp;</dd>
		<dt><?php echo __('Picture Id'); ?></dt>
		<dd>
	<?php echo $picture['User']['picture_id']; ?>
&nbsp;</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
	<?php echo $picture['User']['created']; ?>
&nbsp;</dd>
		<dt><?php echo __('Sexe Id'); ?></dt>
		<dd>
	<?php echo $picture['User']['sexe_id']; ?>
&nbsp;</dd>
		<dt><?php echo __('Group Id'); ?></dt>
		<dd>
	<?php echo $picture['User']['group_id']; ?>
&nbsp;</dd>
		<dt><?php echo __('Bio'); ?></dt>
		<dd>
	<?php echo $picture['User']['bio']; ?>
&nbsp;</dd>
		</dl>
	<?php endif; ?>
		<div class="actions">
			<ul>
				<li><?php echo $this->Html->link(__('Edit User'), array('controller' => 'users', 'action' => 'edit', $picture['User']['id'])); ?></li>
			</ul>
		</div>
	</div>
	