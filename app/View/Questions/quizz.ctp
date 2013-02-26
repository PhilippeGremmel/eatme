<div class="questions quizz">
	<h2><?php echo __('Questions'); ?></h2>

<?php foreach ($questions as $question): ?>
	<div class="question">
		<?php debug($question) ?>
		<p class="ennonce"><?php echo $question['Question']['content'] ?></p>
		
		
		
		<div class="prop">
		
		<?php echo $this->Form->create('Question')?>
		<?php echo $this->Form->hidden('id',array('value'=>$question['Question']['id'])); ?>
		<?php
		
		$options = array(
			1 => $question['Question']['prop1'],
			2 => $question['Question']['prop2'],
			3 => $question['Question']['prop3'],
			4 => $question['Question']['prop4'],
		);
		$attributes = array(
		    'legend' => false,
		    'value' => false
		);
		echo $this->Form->radio('answer',$options, $attributes);
		
		
		?>
		<?php echo $this->Form->end('Submit')?>
			
		</div>
		
		
		
	</div>
<?php endforeach; ?>

</div>