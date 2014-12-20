<div class="products view">
<h2><?php echo __('Product'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($product['Product']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($product['Product']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Description'); ?></dt>
		<dd>
			<?php echo h($product['Product']['description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Price'); ?></dt>
		<dd>
			<?php echo h($product['Product']['price']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Product'), array('action' => 'edit', $product['Product']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Product'), array('action' => 'delete', $product['Product']['id']), null, __('Are you sure you want to delete # %s?', $product['Product']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Products'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Product'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Members'), array('controller' => 'members', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Member'), array('controller' => 'members', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Distributors'), array('controller' => 'distributors', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Distributor'), array('controller' => 'distributors', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Members'); ?></h3>
	<?php if (!empty($product['Member'])): ?>
	<table cellpadding = "0" cellspacing = "0" class="table table-bordered">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Comment'); ?></th>
		<th><?php echo __('Product Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($product['Member'] as $member): ?>
		<tr>
			<td><?php echo $member['id']; ?></td>
			<td><?php echo $member['name']; ?></td>
			<td><?php echo $member['comment']; ?></td>
			<td><?php echo $member['product_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'members', 'action' => 'view', $member['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'members', 'action' => 'edit', $member['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'members', 'action' => 'delete', $member['id']), null, __('Are you sure you want to delete # %s?', $member['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Member'), array('controller' => 'members', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Distributors'); ?></h3>
	<?php if (!empty($product['Distributor'])): ?>
	<table cellpadding = "0" cellspacing = "0" class="table table-bordered">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('City'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($product['Distributor'] as $distributor): ?>
		<tr>
			<td><?php echo $distributor['id']; ?></td>
			<td><?php echo $distributor['name']; ?></td>
			<td><?php echo $distributor['city']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'distributors', 'action' => 'view', $distributor['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'distributors', 'action' => 'edit', $distributor['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'distributors', 'action' => 'delete', $distributor['id']), null, __('Are you sure you want to delete # %s?', $distributor['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Distributor'), array('controller' => 'distributors', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
