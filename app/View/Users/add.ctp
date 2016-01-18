<div class="users form">
	<div class="actions">
		<h3><?php echo __('Actions'); ?></h3>
		<ul style="display:inline-flex">

			<li><?php echo $this->Html->link(__('List Users'), array('action' => 'index')); ?></li>
			<li><?php echo $this->Html->link(__('List Comments'), array('controller' => 'comments', 'action' => 'index')); ?> </li>
			<li><?php echo $this->Html->link(__('New Comment'), array('controller' => 'comments', 'action' => 'add')); ?> </li>
		</ul>
	</div>

	<?php echo $this->Form->create('User'); ?>
	<fieldset>
		<legend><?php echo __('Add User'); ?></legend>
	<?php
		echo $this->Form->input('user_name');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
