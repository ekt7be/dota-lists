
<div id="page-container" class="row">

	<div id="sidebar" class="col-sm-3">
		
		<div class="actions">
			
			<ul class="list-group">			
						<li class="list-group-item"><?php echo $this->Html->link(__('Edit Build'), array('action' => 'edit', $heroBuild['HeroBuild']['id']), array('class' => '')); ?> </li>
		<li class="list-group-item"><?php echo $this->Form->postLink(__('Delete Build'), array('action' => 'delete', $heroBuild['HeroBuild']['id']), array('class' => ''), __('Are you sure you want to delete # %s?', $heroBuild['HeroBuild']['id'])); ?> </li>
		<li class="list-group-item"><?php echo $this->Html->link(__('List Builds'), array('action' => 'index'), array('class' => '')); ?> </li>
		<li class="list-group-item"><?php echo $this->Html->link(__('New Build'), array('action' => 'add'), array('class' => '')); ?> </li>
		<li class="list-group-item"><?php echo $this->Html->link(__('List Heroes'), array('controller' => 'heroes', 'action' => 'index'), array('class' => '')); ?> </li>
				
			</ul><!-- /.list-group -->
			
		</div><!-- /.actions -->
		
	</div><!-- /#sidebar .span3 -->
	
	<div id="page-content" class="col-sm-9">
		
		<div class="heroBuilds view">

			<h2><?php echo h($heroBuild['HeroBuild']['title']); ?></h2>
			
			<div class="table-responsive">
				<table class="table table-striped table-bordered">
					<tbody>
						<tr>		
</tr><tr>		<td><strong><?php echo __('Hero'); ?></strong></td>
		<td>
			<?php echo $this->Html->link($heroBuild['Hero']['name'], array('controller' => 'heroes', 'action' => 'view', $heroBuild['Hero']['id']), array('class' => '')); ?>
			&nbsp;
		</td>
</tr><tr>		
</tr><tr>		<td><strong><?php echo __('Created'); ?></strong></td>
		<td>
			<?php echo h($heroBuild['HeroBuild']['created']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Modified'); ?></strong></td>
		<td>
			<?php echo h($heroBuild['HeroBuild']['modified']); ?>
			&nbsp;
		</td>
</tr>					</tbody>
				</table><!-- /.table table-striped table-bordered -->
			</div><!-- /.table-responsive -->
			
		</div><!-- /.view -->

					
			<div class="related">

				<h3><?php echo __('Items'); ?></h3>
				
				<?php if (!empty($heroBuild['HeroBuildItem'])): ?>
					
					<div class="table-responsive">
						<table class="table table-striped table-bordered">
							<thead>
								<tr>
											
		<th><?php echo __('Item Name'); ?></th>
									<th class="actions"><?php echo __('Actions'); ?></th>
								</tr>
							</thead>
							<tbody>
									<?php
										$i = 0;
										foreach ($heroBuild['HeroBuildItem'] as $heroBuildItem): 
											$name = $items[$heroBuildItem['item_id']];
										?>
		<tr>
		
			<td><?php echo $name; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'hero_build_items', 'action' => 'view', $heroBuildItem['id']), array('class' => 'btn btn-default btn-xs')); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'hero_build_items', 'action' => 'edit', $heroBuildItem['id']), array('class' => 'btn btn-default btn-xs')); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'hero_build_items', 'action' => 'delete', $heroBuildItem['id']), array('class' => 'btn btn-default btn-xs'), __('Are you sure you want to delete # %s?', $heroBuildItem['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
							</tbody>
						</table><!-- /.table table-striped table-bordered -->
					</div><!-- /.table-responsive -->
					
				<?php endif; ?>

				
				<div class="actions">
					<?php echo $this->Html->link('<i class="icon-plus icon-white"></i> '.__('Add Item'), array('controller' => 'hero_build_items', 'action' => 'add'), array('class' => 'btn btn-primary', 'escape' => false)); ?>				</div><!-- /.actions -->
				
			</div><!-- /.related -->

			
	</div><!-- /#page-content .span9 -->

</div><!-- /#page-container .row-fluid -->
