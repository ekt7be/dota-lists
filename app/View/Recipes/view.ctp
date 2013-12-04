
<div id="page-container" class="row">


	
	<div id="page-content" class="col-sm-9">
		
		<div class="recipes view">

			<h2><?php  echo __('Recipe'); ?></h2>
			
			<div class="table-responsive">
				<table class="table table-striped table-bordered">
					<tbody>
						<tr>		
</tr><tr>		<td><strong><?php echo __('Item'); ?></strong></td>
		<td>
			<?php echo $this->Html->link($recipe['Item']['name'], array('controller' => 'items', 'action' => 'view', $recipe['Item']['id']), array('class' => '')); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Name'); ?></strong></td>
		<td>
			<?php echo h($recipe['Recipe']['name']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Cost'); ?></strong></td>
		<td>
			<?php echo h($recipe['Recipe']['cost']); ?>
			&nbsp;
		</td>
</tr>					</tbody>
				</table><!-- /.table table-striped table-bordered -->
			</div><!-- /.table-responsive -->
			
		</div><!-- /.view -->

					
			<div class="related">

				<h3><?php echo __('Related Recipe Items'); ?></h3>
				
				<?php if (!empty($recipe['RecipeItem'])): ?>
					
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
										
										foreach ($recipe['RecipeItem'] as $recipeItem): 
											$name = $items[$recipeItem['item_id']];
											 
											
										
										?>
		<tr>
			<td><?php echo $this->Html->link($name, array('controller' => 'items', 'action' => 'view', $recipeItem['item_id']), array('class' => '')); ?></td>
			
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'recipe_items', 'action' => 'view', $recipeItem['id']), array('class' => 'btn btn-default btn-xs')); ?>
			</td>
		</tr>
	<?php endforeach; ?>
							</tbody>
						</table><!-- /.table table-striped table-bordered -->
					</div><!-- /.table-responsive -->
					
				<?php endif; ?>

				
			
	</div><!-- /#page-content .span9 -->

</div><!-- /#page-container .row-fluid -->
