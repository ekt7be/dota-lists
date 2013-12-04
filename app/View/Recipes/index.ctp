
<div id="page-container" class="row">
<?php if($role == 'admin') {?>
	<div id="sidebar" class="col-sm-3">
		
		<div class="actions">
		
			<ul class="list-group">
				<li class="list-group-item"><?php echo $this->Html->link(__('New Recipe'), array('action' => 'add'), array('class' => '')); ?></li>
				<li class="list-group-item"><?php echo $this->Html->link(__('List Items'), array('controller' => 'items', 'action' => 'index'), array('class' => '')); ?></li> 
				<li class="list-group-item"><?php echo $this->Html->link(__('New Item'), array('controller' => 'items', 'action' => 'add'), array('class' => '')); ?></li> 
				<li class="list-group-item"><?php echo $this->Html->link(__('List Recipe Items'), array('controller' => 'recipe_items', 'action' => 'index'), array('class' => '')); ?></li> 
				<li class="list-group-item"><?php echo $this->Html->link(__('New Recipe Item'), array('controller' => 'recipe_items', 'action' => 'add'), array('class' => '')); ?></li> 
			</ul><!-- /.list-group -->
			
		</div><!-- /.actions -->
	<?php } ?>	
	</div><!-- /#sidebar .col-sm-3 -->
	
	<div id="page-content" class="col-sm-9">

		<div class="recipes index">
		
			<h2><?php echo __('Recipes'); ?></h2>
			
			<div class="table-responsive">
				<table cellpadding="0" cellspacing="0" class="table table-striped table-bordered">
					<thead>
						<tr>
							<th><?php echo $this->Paginator->sort('item_id'); ?></th>
							<th><?php echo $this->Paginator->sort('name'); ?></th>
							<th><?php echo $this->Paginator->sort('cost'); ?></th>
						
						</tr>
					</thead>
					<tbody>
<?php foreach ($recipes as $recipe): ?>
	<tr>
		<td>
			<?php echo $this->Html->link($recipe['Item']['name'], array('controller' => 'items', 'action' => 'view', $recipe['Item']['id'])); ?>
		</td>
		
		<td><?php echo $this->Html->link($recipe['Recipe']['name'], array('action' => 'view', $recipe['Recipe']['id'])); ?>&nbsp;</td>
		<td><?php echo h($recipe['Recipe']['cost']); ?>&nbsp;</td>

			<?php 
			if($role == 'user')
			{
			
			}
			else
			{
			    echo '<td class="actions">';
				echo $this->Html->link(__('View'), array('action' => 'view', $recipe['Recipe']['id']), array('class' => 'btn btn-default btn-xs')); 
				echo $this->Html->link(__('Edit'), array('action' => 'edit', $recipe['Recipe']['id']), array('class' => 'btn btn-default btn-xs')); 
				echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $recipe['Recipe']['id']), array('class' => 'btn btn-default btn-xs'), __('Are you sure you want to delete # %s?', $recipe['Recipe']['id'])); 
}
?>
		</td>
	</tr>
<?php endforeach; ?>
					</tbody>
				</table>
			</div><!-- /.table-responsive -->

			<ul class="pagination">
				<?php
					echo $this->Paginator->prev('< ' . __('Previous'), array('tag' => 'li'), null, array('class' => 'disabled', 'tag' => 'li', 'disabledTag' => 'a'));
					echo $this->Paginator->numbers(array('separator' => '', 'currentTag' => 'a', 'tag' => 'li', 'currentClass' => 'disabled'));
					echo $this->Paginator->next(__('Next') . ' >', array('tag' => 'li'), null, array('class' => 'disabled', 'tag' => 'li', 'disabledTag' => 'a'));
				?>
			</ul><!-- /.pagination -->
			
		</div><!-- /.index -->
	
	</div><!-- /#page-content .col-sm-9 -->

</div><!-- /#page-container .row-fluid -->