<div class="comments index">
	<div class="actions">
		<h3><?php echo __('Actions'); ?></h3>
		<ul style="display:inline-flex">
			<li><?php echo $this->Html->link(__('新規コメント作成'), array('action' => 'add')); ?></li>
			<li><?php echo $this->Html->link(__('タイトル一覧'), array('controller' => 'titles', 'action' => 'index')); ?> </li>
			<li><?php echo $this->Html->link(__('新規タイトル作成'), array('controller' => 'titles', 'action' => 'add')); ?> </li>
			<li><?php echo $this->Html->link(__('投稿者一覧'), array('controller' => 'users', 'action' => 'index')); ?> </li>
			<li><?php echo $this->Html->link(__('新規投稿者作成'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		</ul>
	</div>
	<h2><?php echo __('コメント一覧'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
		<th><?php echo $this->Paginator->sort('id'); ?></th>
		<th><?php echo $this->Paginator->sort('text','コメント'); ?></th>
		<th><?php echo $this->Paginator->sort('title_id','タイトル'); ?></th>
		<th><?php echo $this->Paginator->sort('user_id','投稿者'); ?></th>
		<th><?php echo $this->Paginator->sort('modified','更新日時'); ?></th>
		<th><?php echo $this->Paginator->sort('created','投稿日時'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($comments as $comment): ?>
	<tr>
		<td><?php echo h($comment['Comment']['id']); ?>&nbsp;</td>

		<td><?php echo h($comment['Comment']['text']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($comment['Title']['titel_name'], array('controller' => 'titles', 'action' => 'view', $comment['Title']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($comment['User']['user_name'], array('controller' => 'users', 'action' => 'view', $comment['User']['id'])); ?>
		</td>
		<td><?php echo h($comment['Comment']['modified']); ?>&nbsp;</td>
		<td><?php echo h($comment['Comment']['created']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('閲覧'), array('action' => 'view', $comment['Comment']['id'])); ?>
			<?php echo $this->Html->link(__('更新'), array('action' => 'edit', $comment['Comment']['id'])); ?>
			<?php echo $this->Form->postLink(__('削除'), array('action' => 'delete', $comment['Comment']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $comment['Comment']['id']))); ?>
		</td>

	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
		'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>

