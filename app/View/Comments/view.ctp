<div class="comments view">
	<div class="actions">
		<h3><?php echo __('Actions'); ?></h3>
		<ul style="display:inline-flex">
			<li><?php echo $this->Html->link(__('Edit Comment'), array('action' => 'edit', $comment['Comment']['id'])); ?> </li>
			<li><?php echo $this->Form->postLink(__('Delete Comment'), array('action' => 'delete', $comment['Comment']['id']), array(), __('Are you sure you want to delete # %s?', $comment['Comment']['id'])); ?> </li>
			<li><?php echo $this->Html->link(__('List Comments'), array('action' => 'index')); ?> </li>
			<li><?php echo $this->Html->link(__('New Comment'), array('action' => 'add')); ?> </li>
			<li><?php echo $this->Html->link(__('List Titles'), array('controller' => 'titles', 'action' => 'index')); ?> </li>
			<li><?php echo $this->Html->link(__('New Title'), array('controller' => 'titles', 'action' => 'add')); ?> </li>
			<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
			<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		</ul>
	</div>

	<h2><?php echo __('Comment'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($comment['Comment']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($comment['Comment']['modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($comment['Comment']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Text'); ?></dt>
		<dd>
			<?php echo h($comment['Comment']['text']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Title'); ?></dt>
		<dd>
			<?php echo $this->Html->link($comment['Title']['titel_name'], array('controller' => 'titles', 'action' => 'view', $comment['Title']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($comment['User']['user_name'], array('controller' => 'users', 'action' => 'view', $comment['User']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
