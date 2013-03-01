<?php echo $this->Form->create('User'); ?>
<div><?php echo $this->Form->input('username'); ?></div>
<div><?php echo $this->Form->input('password'); ?></div>
<?php echo $this->Form->end('login'); ?>

<br /><br />

Pas encore inscrit ?
<span><?php echo $this->Html->link('Subscribe','/users/add'); ?></span>
