
<div id="page-container" class="row">
<?php if($role == 'admin') {?>
	<div id="sidebar" class="col-sm-3">
		
		<div class="actions">
		
			<ul class="list-group">
				<li class="list-group-item"><?php echo $this->Html->link(__('New Item'), array('action' => 'add'), array('class' => '')); ?></li>
				<li class="list-group-item"><?php echo $this->Html->link(__('List Recipes'), array('controller' => 'recipes', 'action' => 'index'), array('class' => '')); ?></li> 
				<li class="list-group-item"><?php echo $this->Html->link(__('New Recipe'), array('controller' => 'recipes', 'action' => 'add'), array('class' => '')); ?></li> 
			</ul><!-- /.list-group -->
			
		</div><!-- /.actions -->
		
	</div><!-- /#sidebar .col-sm-3 -->
<?php } ?>	
	
	<div id="page-content" class="col-sm-9">

		<div class="items index">
		
			<h2><?php echo __('Items'); ?></h2>
			
			<div class="table-responsive">
				<table cellpadding="0" cellspacing="0" class="table table-striped table-bordered">
					<thead>
						<tr>
							<th><?php echo $this->Paginator->sort('name'); ?></th>
							<th><?php echo $this->Paginator->sort('description'); ?></th>
							<th><?php echo $this->Paginator->sort('stats'); ?></th>
							<th><?php echo $this->Paginator->sort('cost'); ?></th>
					
						</tr>
					</thead>
					<tbody>
<?php foreach ($items as $item): ?>
	<tr>
	
		<td><?php echo $this->Html->link($item['Item']['name'], array('controller' => 'items', 'action' => 'view', $item['Item']['id'])); ?>&nbsp;</td>
		<td><?php echo h($item['Item']['description']); ?>&nbsp;</td>
		<td><?php echo h($item['Item']['stats']); ?>&nbsp;</td>
		<td><?php echo h($item['Item']['cost']); ?>&nbsp;</td>

			<?php 
			if($role == 'user')
			{

			}
			else
			{
			    echo '<td class="actions">';
				echo $this->Html->link(__('View'), array('action' => 'view', $item['Item']['id']), array('class' => 'btn btn-default btn-xs')); 
				echo $this->Html->link(__('Edit'), array('action' => 'edit', $item['Item']['id']), array('class' => 'btn btn-default btn-xs')); 
				echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $item['Item']['id']), array('class' => 'btn btn-default btn-xs'), __('Are you sure you want to delete # %s?', $item['Item']['id'])); 
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