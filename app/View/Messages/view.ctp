
<div class="messages view row-fluid">
<div style="font-size:28px"><?php  echo __('Message'); ?></div><br>
	<div class"monpseudo title block">
		<?php echo $this->Html->link($message['User']['username'], array('controller' => 'users', 'action' => 'view', $message['User']['id'])); ?>
	</div>
	<p>
		<?php echo h($message['Message']['content']); ?>
	</p>
	
		
		<?php echo __('A'); ?>
		
			<?php echo $this->Html->link($message['Dest']['username'], array('controller' => 'users', 'action' => 'view', $message['Dest']['id'])); ?>
		
		<?php echo __('envoyé le'); ?>
		
			<?php echo h($message['Message']['created']); ?>
		</pre>

</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('List Messages'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Message'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
