<div class="users view">
	<div class="actions">
		<h3><?php echo __('Actions'); ?></h3>
		<ul style="display:inline-flex">
			<li><?php echo $this->Html->link(__('投稿者更新'), array('action' => 'edit', $user['User']['id'])); ?> </li>
			<li><?php echo $this->Form->postLink(__('投稿者削除'), array('action' => 'delete', $user['User']['id']), array(), __('Are you sure you want to delete # %s?', $user['User']['id'])); ?> </li>
			<li><?php echo $this->Html->link(__('投稿者一覧'), array('action' => 'index')); ?> </li>
			<li><?php echo $this->Html->link(__('新規投稿者作成'), array('action' => 'add')); ?> </li>
			<li><?php echo $this->Html->link(__('コメント一覧'), array('controller' => 'comments', 'action' => 'index')); ?> </li>
			<li><?php echo $this->Html->link(__('新規コメント作成'), array('controller' => 'comments', 'action' => 'add')); ?> </li>
		</ul>
	</div>
<h2><?php echo __('User'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($user['User']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User Name'); ?></dt>
		<dd>
			<?php echo h($user['User']['user_name']); ?>
			&nbsp;
		</dd>
	</dl>
</div>

<div class="related">
	<h3><?php echo __('Related Comments'); ?></h3>
	<?php if (!empty($user['Comment'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('タイトル'); ?></th>
		<th><?php echo __('コメント内容'); ?></th>
		<th><?php echo __('更新日時'); ?></th>
		<th><?php echo __('作成日時'); ?></th>

		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($user['Comment'] as $comment): ?>
		<tr>
			<td><?php echo $comment['id']; ?></td>
			<td><?php echo $comment['Title']['titel_name']; ?></td>
			<td><?php echo $comment['text']; ?></td>
			<td><?php echo $comment['modified']; ?></td>
			<td><?php echo $comment['created']; ?></td>
			<td class="actions">
				<?php echo $this->Form->postLink(__('削除'), array('controller' => 'comments', 'action' => 'delete', $comment['id']), array(), __('Are you sure you want to delete # %s?', $comment['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

</div>
