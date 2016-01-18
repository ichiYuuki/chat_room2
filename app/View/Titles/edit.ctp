<div class="titles form"><div class="actions">
		<h3><?php echo __('Actions'); ?></h3>
		<ul style="display:inline-flex">

			<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Title.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Title.id'))); ?></li>
			<li><?php echo $this->Html->link(__('List Titles'), array('action' => 'index')); ?></li>
			<li><?php echo $this->Html->link(__('List Comments'), array('controller' => 'comments', 'action' => 'index')); ?> </li>
			<li><?php echo $this->Html->link(__('New Comment'), array('controller' => 'comments', 'action' => 'add')); ?> </li>
		</ul>
	</div>

	<?php echo $this->Form->create('Title'); ?>
	<fieldset>
		<legend><?php echo __('Edit Title'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('titel_name');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
