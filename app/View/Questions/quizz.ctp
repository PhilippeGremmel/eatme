<div class="questions quizz">
	<h2><?php echo __('Questions'); ?></h2>
<?php
echo $this->Form->create('Question');
if(!@$bien):
foreach ($questions as $question): ?>
	<div class="question">
		<p class="ennonce"><?php echo $question['content'] ?></p>
		<div class="prop">
		<?php
		$options = array(
			1 => $question['prop1'],
			2 => $question['prop2'],
			3 => $question['prop3'],
			4 => $question['prop4'],
		);
		$attributes = array(
		    'name' => "qu[{$question['id']}]",
		    'legend' => false,
		    'value' => false
		);
		echo $this->Form->radio('answer', $options, $attributes);
		?>
		</div>
	</div>
<?php
endforeach;

echo $this->Form->end('Submit');
?>
</div>

<?php else: ?>
<div style="font-size:28px">
<?php

echo "Vous avez $score points.<br>Vous êtes maintenant <font color=blue>$class</font>.";

?>
</div>
<?php endif; ?>