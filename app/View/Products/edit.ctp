<div class="products form">
<?php echo $this->Form->create('Product'); ?>
	<fieldset>
		<legend><?php echo __('Edit Product'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name');
		echo $this->Form->input('description');
		echo $this->Form->input('price');
		echo $this->Form->input('Distributor');
        echo $this->Form->input('category_id');
        echo $this->Form->input('subcategory_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Product.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Product.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Products'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Members'), array('controller' => 'members', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Member'), array('controller' => 'members', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Distributors'), array('controller' => 'distributors', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Distributor'), array('controller' => 'distributors', 'action' => 'add')); ?> </li>
	</ul>
</div>

<?php
$this->Js->get('#ProductCategoryId')->event('click', 
$this->Js->request(array(
'controller'=>'subcategories',
'action'=>'getByCategory'
), array(
'update'=>'#ProductSubcategoryId',
'async' => true,
'method' => 'post',
'dataExpression'=>true,
'data'=> $this->Js->serializeForm(array(
'isForm' => true,
'inline' => true
))
))
);
?>