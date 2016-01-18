<div class="titles index">
	<div class="actions">
		<h3><?php echo __('Actions'); ?></h3>
		<ul style="display:inline-flex">
			<li><?php echo $this->Html->link(__('New Title'), array('action' => 'add')); ?></li>
			<li><?php echo $this->Html->link(__('List Comments'), array('controller' => 'comments', 'action' => 'index')); ?> </li>
			<li><?php echo $this->Html->link(__('New Comment'), array('controller' => 'comments', 'action' => 'add')); ?> </li>
		</ul>
	</div>

	<h2><?php echo __('Titles'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('titel_name'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($titles as $title): ?>
	<tr>
		<td><?php echo h($title['Title']['id']); ?>&nbsp;</td>
		<td><?php echo h($title['Title']['modified']); ?>&nbsp;</td>
		<td><?php echo h($title['Title']['created']); ?>&nbsp;</td>
		<td><?php echo h($title['Title']['titel_name']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $title['Title']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $title['Title']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $title['Title']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $title['Title']['id']))); ?>
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
