<h2>Users list</h2>

<!--  <?php echo $this->webroot; ?>  -->

<ul>
	<?php  foreach ($users as $user):?>
	<div class="contenaire">

		<div class="photo">
			<li><img src="/cake_eatme/app/webroot/files/users/<?php echo $user['Picture']['url'];?>"></li>
		</div>

		<div class="content">
			<li><?php echo $user['User']['username'];?></li>
			<li><?php echo $user['User']['email'];?></li>
			<li><?php echo $user['User']['bio'];?></li>		
		</div>

		<br>
	</div>
	<?php endforeach ?>
</ul>




<?php debug($users); ?>

