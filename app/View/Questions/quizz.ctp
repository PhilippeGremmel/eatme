<div class="questions quizz">
	<h2><?php echo __('Questions'); ?></h2>

<?php foreach ($questions as $question): ?>
	<div class="question">
		<?php debug($question) ?>
		<p class="ennonce"><?php echo $question['Question']['content'] ?></p>
		
		
		<div class="prop">
			<p><?php echo $question['Question']['prop1'] ?></p>
			<p><?php echo $question['Question']['prop2'] ?></p>
			<p><?php echo $question['Question']['prop3'] ?></p>
			<p><?php echo $question['Question']['prop4'] ?></p>
			<p><?php echo $this->Form->end('Submit')?></p>
			
		</div>
		
		
		
	</div>
<?php endforeach; ?>

</div>