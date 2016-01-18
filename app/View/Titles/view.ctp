<div class="titles view">
	<div class="actions">
		<h3><?php echo __('Actions'); ?></h3>
		<ul style="display:inline-flex">
			<li><?php echo $this->Html->link(__('Edit Title'), array('action' => 'edit', $title['Title']['id'])); ?> </li>
			<li><?php echo $this->Form->postLink(__('Delete Title'), array('action' => 'delete', $title['Title']['id']), array(), __('Are you sure you want to delete # %s?', $title['Title']['id'])); ?> </li>
			<li><?php echo $this->Html->link(__('List Titles'), array('action' => 'index')); ?> </li>
			<li><?php echo $this->Html->link(__('New Title'), array('action' => 'add')); ?> </li>
			<li><?php echo $this->Html->link(__('List Comments'), array('controller' => 'comments', 'action' => 'index')); ?> </li>
			<li><?php echo $this->Html->link(__('New Comment'), array('controller' => 'comments', 'action' => 'add')); ?> </li>
		</ul>
	</div>
<h2><?php echo __('Title'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($title['Title']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($title['Title']['modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($title['Title']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Titel Name'); ?></dt>
		<dd>
			<?php echo h($title['Title']['titel_name']); ?>
			&nbsp;
		</dd>
	</dl>
</div>

<div class="related">
	<h3><?php echo __('Related Comments'); ?></h3><div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Comment'), array('controller' => 'comments', 'action' => 'add')); ?> </li>
		</ul>
	</div>
	<?php if (!empty($title['Comment'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Text'); ?></th>
		<th><?php echo __('Title Id'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($title['Comment'] as $comment): ?>
		<tr>
			<td><?php echo $comment['id']; ?></td>
			<td><?php echo $comment['modified']; ?></td>
			<td><?php echo $comment['created']; ?></td>
			<td><?php echo $comment['text']; ?></td>
			<td><?php echo $comment['title_id']; ?></td>
			<td><?php echo $comment['user_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'comments', 'action' => 'view', $comment['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'comments', 'action' => 'edit', $comment['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'comments', 'action' => 'delete', $comment['id']), array(), __('Are you sure you want to delete # %s?', $comment['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>


</div>
