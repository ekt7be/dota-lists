
<div id="page-container" class="row">

	<div id="sidebar" class="col-sm-3">
		
		<div class="actions">
			
			<ul class="list-group">			
						<li class="list-group-item"><?php echo $this->Html->link(__('Change List Name'), array('action' => 'edit', $myList['MyList']['id']), array('class' => '')); ?> </li>
		<li class="list-group-item"><?php echo $this->Form->postLink(__('Delete This List'), array('action' => 'delete', $myList['MyList']['id']), array('class' => ''), __('Are you sure you want to delete # %s?', $myList['MyList']['id'])); ?> </li>
		<li class="list-group-item"><?php echo $this->Html->link(__('My Lists'), array('action' => 'index'), array('class' => '')); ?> </li>
		<li class="list-group-item"><?php echo $this->Html->link(__('New List'), array('action' => 'add'), array('class' => '')); ?> </li>


		<li class="list-group-item"><?php echo $this->Html->link(__('Add Hero'), array('controller' => 'my_list_heroes', 'action' => 'add'), array('class' => '')); ?> </li>
				
			</ul><!-- /.list-group -->
			
		</div><!-- /.actions -->
		
	</div><!-- /#sidebar .span3 -->
	
	<div id="page-content" class="col-sm-9">
		
		<div class="myLists view">

			<h2><?php echo h($myList['MyList']['title']); ?></h2>
			
			<div class="table-responsive">
				<table class="table table-striped table-bordered">
					<tbody>
						<tr>		
</tr><tr>		
</tr><tr>		<td><strong><?php echo __('Created'); ?></strong></td>
		<td>
			<?php echo h($myList['MyList']['created']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Modified'); ?></strong></td>
		<td>
			<?php echo h($myList['MyList']['modified']); ?>
			&nbsp;
		</td>
</tr>					</tbody>
				</table><!-- /.table table-striped table-bordered -->
			</div><!-- /.table-responsive -->
			
		</div><!-- /.view -->

					
			<div class="related">

				<h3><?php echo __('Heroes'); ?></h3>
				
				<?php if (!empty($myList['MyListHero'])): ?>
					
					<div class="table-responsive">
						<table class="table table-striped table-bordered">
							<thead>
								<tr>
							
		<th><?php echo __('Hero Name'); ?></th>
									<th class="actions"><?php echo __('Actions'); ?></th>
								</tr>
							</thead>
							<tbody>
									<?php
										$i = 0;
										foreach ($myList['MyListHero'] as $myListHero): 
										$id = $myListHero['hero_id'];
										$name = $heroes[$id];
										
										?>
		<tr>
	
			<td><?php echo $name; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'my_list_heroes', 'action' => 'view', $myListHero['id']), array('class' => 'btn btn-default btn-xs')); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'my_list_heroes', 'action' => 'edit', $myListHero['id']), array('class' => 'btn btn-default btn-xs')); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'my_list_heroes', 'action' => 'delete', $myListHero['id']), array('class' => 'btn btn-default btn-xs'), __('Are you sure you want to delete # %s?', $myListHero['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
							</tbody>
						</table><!-- /.table table-striped table-bordered -->
					</div><!-- /.table-responsive -->
					
				<?php endif; ?>

				
				<div class="actions">
					<?php echo $this->Html->link('<i class="icon-plus icon-white"></i> '.__('Add Hero'), array('controller' => 'my_list_heroes', 'action' => 'add'), array('class' => 'btn btn-primary', 'escape' => false)); ?>				</div><!-- /.actions -->
				
			</div><!-- /.related -->

			
	</div><!-- /#page-content .span9 -->

</div><!-- /#page-container .row-fluid -->
