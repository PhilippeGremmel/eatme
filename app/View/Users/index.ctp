
<!--  <?php echo $this->webroot; ?>  -->

<ul>
	<?php  foreach ($users as $user):?>
	<div class="span2">

		<div class="photo">
			<li><img src="<?php echo $this->webroot; ?>files/users/<?php echo $user['Picture']['url'];?>"></li>
		</div>

		<div class="content">	
			<?php echo $this->Html->link($user['User']['username'], array(
    			
				'action' => 'view',
				$user['User']['id']
				));?>
				 
		</div>

		<br>
	</div>
	<?php endforeach ?>
</ul>




<!-- <?php debug($users); ?> -->

