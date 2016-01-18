<div class="titles view">
	<div class="actions">
		<h3><?php echo __('Actions'); ?></h3>
		<ul style="display:inline-flex">
			<li><?php echo $this->Html->link(__('タイトル一覧'), array('action' => 'index')); ?> </li>
			<li><?php echo $this->Html->link(__('新規タイトル作成'), array('action' => 'add')); ?> </li>
			<li><?php echo $this->Html->link(__('コメント一覧'), array('controller' => 'comments', 'action' => 'index')); ?> </li>
			<li><?php echo $this->Html->link(__('新規コメント作成'), array('controller' => 'comments', 'action' => 'add')); ?> </li>
		</ul>
	</div>
<h2><?php echo __('タイトル詳細'); ?></h2>
	<dl>
		<dt><?php echo __('タイトル'); ?></dt>
		<dd>
			<?php echo h($title['Title']['titel_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($title['Title']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('更新日時'); ?></dt>
		<dd>
			<?php echo h($title['Title']['modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('作成日時'); ?></dt>
		<dd>
			<?php echo h($title['Title']['created']); ?>
			&nbsp;
		</dd>

	</dl>
</div>

<div class="related">
	<h3><?php echo __('コメント一覧'); ?></h3><div class="actions">
		<ul>
			<li><?php //echo $this->Html->link(__('New Comment'), array('controller' => 'comments', 'action' => 'add')); ?> </li>
		</ul>
	</div>
	<?php if (!empty($title['Comment'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __(''); ?></th>
		<th><?php echo __('投稿内容'); ?></th>
		<th><?php echo __('投稿者'); ?></th>
		<th><?php echo __('更新日時'); ?></th>
		<th><?php echo __('投稿日時'); ?></th>

		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($title['Comment'] as $comment): ?>
		<tr>
			<td><?php echo '' ?></td>
			<td><?php echo $comment['text']; ?></td>
			<td><?php echo $comment['User']['user_name']; ?></td>
			<td><?php echo $comment['modified']; ?></td>
			<td><?php echo $comment['created']; ?></td>

			<td class="actions">
				<?php echo $this->Html->link(__('閲覧'), array('controller' => 'comments', 'action' => 'view', $comment['id'])); ?>
				<?php echo $this->Html->link(__('更新'), array('controller' => 'comments', 'action' => 'edit', $comment['id'])); ?>
				<?php echo $this->Form->postLink(__('削除'), array('controller' => 'comments', 'action' => 'delete', $comment['id']), array(), __('Are you sure you want to delete # %s?', $comment['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>


</div>
