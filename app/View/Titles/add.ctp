<div class="titles form">
	<div class="actions">
		<h3><?php echo __('Actions'); ?></h3>
		<ul style="display:inline-flex">

			<li><?php echo $this->Html->link(__('タイトル一覧'), array('action' => 'index')); ?></li>
			<li><?php echo $this->Html->link(__('コメント一覧'), array('controller' => 'comments', 'action' => 'index')); ?> </li>
			<li><?php echo $this->Html->link(__('新規コメント作成'), array('controller' => 'comments', 'action' => 'add')); ?> </li>
		</ul>
	</div>
<?php echo $this->Form->create('Title'); ?>
	<fieldset>
		<legend><?php echo __('タイトル作成'); ?></legend>
	<?php
		echo $this->Form->input('titel_name');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>

