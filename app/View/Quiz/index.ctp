<div class="questions index">
	<h2><?php echo __('Quiz'); ?></h2>
	<ul>
	<?php foreach ($questions as $question): ?>
		<li><?php echo h($question['Question']['content']) ?></li>
	<?php endforeach; ?>
	</ul>
</div>

<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Question'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('Quiz'), array('action'=> 'add'));?></li>
	</ul>
</div>
