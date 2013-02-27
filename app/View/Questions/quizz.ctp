<div class="questions quizz">
	<h2><?php echo __('Questions'); ?></h2>
<?php echo $this->Form->create('Question')?>
<?php foreach ($questions as $question): ?>
	<div class="question">
		<?php
		if(@$bien) {
			if(@$bien[$question['Question']['id']] == $question['Question']['soluce'])
				echo '<font color=green>Bravo</font>';
			else
				echo '<font color=red>Raté</font>';
		}
		?>
		<p class="ennonce"><?php echo $question['Question']['content'] ?></p>
		
		
		
		<div class="prop">
		
		<?php
		
		$options = array(
			1 => $question['Question']['prop1'],
			2 => $question['Question']['prop2'],
			3 => $question['Question']['prop3'],
			4 => $question['Question']['prop4'],
		);
		$attributes = array(
		    'name' => "lenom[{$question['Question']['id']}]",
		    'legend' => false,
		    'value' => false
		);
		echo $this->Form->radio('answer', $options, $attributes);
		
		
		?>
			
		</div>
		
		
		
	</div>
<?php endforeach; ?>

<?php echo $this->Form->end('Submit')?>

</div>