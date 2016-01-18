<div class="comments view">
	<div class="actions">
		<h3><?php echo __('Actions'); ?></h3>
		<ul style="display:inline-flex">
			<li><?php echo $this->Html->link(__('コメント更新'), array('action' => 'edit', $comment['Comment']['id'])); ?> </li>
			<li><?php echo $this->Form->postLink(__('コメント削除'), array('action' => 'delete', $comment['Comment']['id']), array(), __('Are you sure you want to delete # %s?', $comment['Comment']['id'])); ?> </li>
			<li><?php echo $this->Html->link(__('コメント一覧'), array('action' => 'index')); ?> </li>
			<li><?php echo $this->Html->link(__('新規コメント作成'), array('action' => 'add')); ?> </li>
			<li><?php echo $this->Html->link(__('タイトル一覧'), array('controller' => 'titles', 'action' => 'index')); ?> </li>
			<li><?php echo $this->Html->link(__('新規タイトル作成'), array('controller' => 'titles', 'action' => 'add')); ?> </li>
			<li><?php echo $this->Html->link(__('投稿者一覧'), array('controller' => 'users', 'action' => 'index')); ?> </li>
			<li><?php echo $this->Html->link(__('新規投稿者作成'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		</ul>
	</div>

	<h2><?php echo __('詳細'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($comment['Comment']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('更新日時'); ?></dt>
		<dd>
			<?php echo h($comment['Comment']['modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('投稿日時'); ?></dt>
		<dd>
			<?php echo h($comment['Comment']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('コメント'); ?></dt>
		<dd>
			<?php echo h($comment['Comment']['text']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('タイトル'); ?></dt>
		<dd>
			<?php echo $this->Html->link($comment['Title']['titel_name'], array('controller' => 'titles', 'action' => 'view', $comment['Title']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('投稿者'); ?></dt>
		<dd>
			<?php echo $this->Html->link($comment['User']['user_name'], array('controller' => 'users', 'action' => 'view', $comment['User']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
