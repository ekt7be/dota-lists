
<div id="page-container" class="row">
	<div id="sidebar" class="col-sm-3">
		
		<div class="actions">
		
			<ul class="list-group">
	
				<li class="list-group-item"><?php echo $this->Html->link(__('New List'), array('action' => 'add'), array('class' => '')); ?></li>
 
 
				<li class="list-group-item"><?php echo $this->Html->link(__('Add Hero'), array('controller' => 'my_list_heroes', 'action' => 'add'), array('class' => '')); ?></li> 
			</ul><!-- /.list-group -->
			
		</div><!-- /.actions -->
		
	</div><!-- /#sidebar .col-sm-3 -->

	<div id="page-content" class="col-sm-9">

		<div class="myLists index">
		
			<h2><?php echo __('My Lists'); ?></h2>
			
			<div class="table-responsive">
				<table cellpadding="0" cellspacing="0" class="table table-striped table-bordered">
					<thead>
						<tr>
							<th><?php echo ('Title'); ?></th>
							<th><?php echo ('Created'); ?></th>
							<th><?php echo ('Modified'); ?></th>
							<th class="actions"><?php echo __('Actions'); ?></th>
						</tr>
					</thead>
					<tbody>
<?php foreach ($myLists as $myList): ?>
	<tr>
		<td><?php echo h($myList['MyList']['title']); ?>&nbsp;</td>
		<td><?php echo h($myList['MyList']['created']); ?>&nbsp;</td>
		<td><?php echo h($myList['MyList']['modified']); ?>&nbsp;</td>
		
		
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $myList['MyList']['id']), array('class' => 'btn btn-default btn-xs')); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $myList['MyList']['id']), array('class' => 'btn btn-default btn-xs')); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $myList['MyList']['id']), array('class' => 'btn btn-default btn-xs'), __('Are you sure you want to delete # %s?', $myList['MyList']['id'])); ?>
		</td>
	</tr>
	
<?php endforeach; ?>
					</tbody>
				</table>
			</div><!-- /.table-responsive -->


			
		</div><!-- /.index -->
	
	</div><!-- /#page-content .col-sm-9 -->

</div><!-- /#page-container .row-fluid -->