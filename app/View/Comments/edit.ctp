<div class="comments form">
	<div class="actions">
		<h3><?php echo __('Actions'); ?></h3>
		<ul style="display:inline-flex">

			<li><?php echo $this->Form->postLink(__('削除'), array('action' => 'delete', $this->Form->value('Comment.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Comment.id'))); ?></li>
			<li><?php echo $this->Html->link(__('コメント一覧'), array('action' => 'index')); ?></li>
			<li><?php echo $this->Html->link(__('タイトル一覧'), array('controller' => 'titles', 'action' => 'index')); ?> </li>
			<li><?php echo $this->Html->link(__('新規タイトル作成'), array('controller' => 'titles', 'action' => 'add')); ?> </li>
			<li><?php echo $this->Html->link(__('投稿者一覧'), array('controller' => 'users', 'action' => 'index')); ?> </li>
			<li><?php echo $this->Html->link(__('新規投稿者作成'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		</ul>
	</div>

	<?php echo $this->Form->create('Comment'); ?>
	<fieldset>
		<legend><?php echo __('コメント更新'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('text');
		echo $this->Form->input('title_id');
		echo $this->Form->input('user_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
