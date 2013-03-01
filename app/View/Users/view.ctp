<div class="users view">
<div style="font-size:28px"><?php  echo __('User'); ?></div><br>
<div class"monpseudo title block">
<?php echo __('Username :'); ?>

			<?php echo h($user['User']['username']); ?>
			&nbsp;
</div>
<div class"password title block">
			<?php echo __('Password :'); ?>

			<?php echo h($user['User']['password']); ?>
			&nbsp;
</div>
<div class"email title block">
		<?php echo __('Email :'); ?>
		
			<?php echo h($user['User']['email']); ?>
			&nbsp;
</div>
<div class"usercreated title block">
		<?php echo __('Created :'); ?>
		
			<?php echo h($user['User']['created']); ?>
			&nbsp;
</div>
		
<div class"bio title block">
		<?php echo __('Biographie :'); ?>
		
			<?php echo h($user['User']['bio']); ?>
			&nbsp;
		
</div>	
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit User'), array('action' => 'edit', $user['User']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete User'), array('action' => 'delete', $user['User']['id']), null, __('Are you sure you want to delete # %s?', $user['User']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Messages'), array('controller' => 'messages', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Message'), array('controller' => 'messages', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Messages'); ?></h3>
	<?php if (!empty($user['Message'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Content'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Dest Id'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($user['Message'] as $message): ?>
		<tr>
			<td><?php echo $message['id']; ?></td>
			<td><?php echo $message['content']; ?></td>
			<td><?php echo $message['user_id']; ?></td>
			<td><?php echo $message['dest_id']; ?></td>
			<td><?php echo $message['created']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'messages', 'action' => 'view', $message['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'messages', 'action' => 'edit', $message['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'messages', 'action' => 'delete', $message['id']), null, __('Are you sure you want to delete # %s?', $message['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Message'), array('controller' => 'messages', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
