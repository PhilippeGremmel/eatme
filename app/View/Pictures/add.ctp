<!-- <table>
	<tr>
		<th>Image</th>
		<th>Nom</th>
		<th>Action</th>				
	</tr>
	<?php foreach ($pictures as $k => $v) : $v = current($v); ?>
	
		<tr>
			<td><?php echo $this->Html->image($v['url'],array('style'=>'max-width:250px')); ?></td>
			<td><?php echo $v['legend']; ?></td>
			<td></td>			
		</tr>
		
	<?php endforeach ?>	
</table> -->


<h3>Ajouter une image</h3>

<?php echo $this->Form->create('Picture',array('type'=>'file')); ?>
	<?php echo $this->Form->input('url',array('label'=>"Image (format png/jpg)","type"=>"file")); ?>
	<?php echo $this->Form->input('legend',array('label'=>"Nom de l'image")); ?>
<?php echo $this->Form->end('Ajouter'); ?>