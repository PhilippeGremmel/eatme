<?php
/**
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       Cake.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */

$cakeDescription = __d('cake_dev', 'CakePHP: the rapid development php framework');
?>
<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $cakeDescription ?>:
		<?php echo $title_for_layout; ?>
	</title>
	<?php
		echo $this->Html->meta('icon');

		echo $this->Html->css('cake.generic');
		echo $this->Html->css('bootstrap');
		echo $this->Html->css('bootstrap-responsive');
		echo $this->Html->script('jquery');
		echo $this->Html->script('bootstrap');

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
</head>
<body>
<!-- Jeune H cherche F pr discuté tt simplement tmtc ^^
     mn num : 06 47 58 74 48
	 Envi 1 photo pr que jvoi ki t
-->
	<div class="navbar navbar-inverse navbar-static-top">
		<div class="navbar-inner">
			<div class="container">
				<button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="brand" href="/"><?php echo $this->html->image('logo.png', array('width'=>'20px'))?> EATM3</a>
				<div class="nav-collapse collapse">
					<ul class="nav">
					<li>
					<?php echo $this->Html->link(__('Home'), array('controller' => 'users', 'action' => 'index')); ?>
					</li>
					<?php if(!$me['id']): ?>
					<li>
					<?php echo $this->Html->link(__('Login'), array('controller' => 'users', 'action' => 'login')); ?>
					</li>
					<li>
					<?php echo $this->Html->link(__('Sign up'), array('controller' => 'users', 'action' => 'add')); ?>
					</li>
					<?php endif; ?>
					<?php if($me['id']): ?>
					<li class="user">
					<?php echo $this->Html->link(__('Logged as').' '.$me['username'], array('controller' => 'users', 'action' => 'view', $me['id'])); ?>
					</li>
					<li>
					<?php echo $this->Html->link(__('Logout'), array('controller' => 'users', 'action' => 'logout')); ?>
					</li>
					<?php endif; ?>
					
					<li>
						<?php echo $this->Html->link(__('Membre'), array('controller' => 'users', 'action' => 'index')); ?>
					</li>
					<li>
						<?php echo $this->Html->link(__('Questions'), array('controller' => 'questions', 'action' => 'index')); ?>
					</li>
					<li>
						<?php echo $this->Html->link(__('Profile'), array('controller' => 'users', 'action' => 'edit',$me['id'])); ?>
					</li>
					<li>
						<?php echo $this->Html->link(__('Membre'), array('controller' => 'users', 'action' => 'index')); ?>
					</li>
					</ul>
				</div>
			</div>
		</div>
	</div>

	<div id="container">
		<div id="header">
			<h3> Bienvenue <?php echo $me['username']; ?> !</h3>			
		</div>
		<div id="content">
			<?php echo $this->Session->flash(); ?>

			<?php echo $this->fetch('content'); ?>
		</div>
		
		<div id="footer">
	un site cool / vive les lamas
		</div>
	</div>
	<!-- */<?php echo $this->element('sql_dump'); ?>*/ -->
</body>
</html>
