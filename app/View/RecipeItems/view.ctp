
<div id="page-container" class="row">


	
	<div id="page-content" class="col-sm-9">
		
		<div class="recipeItems view">

			<h2><?php  echo __('Recipe Item'); ?></h2>
			
			<div class="table-responsive">
				<table class="table table-striped table-bordered">
					<tbody>
						<tr>		
</tr><tr>		<td><strong><?php echo __('Recipe'); ?></strong></td>
		<td>
			<?php echo $this->Html->link($recipeItem['Recipe']['name'], array('controller' => 'recipes', 'action' => 'view', $recipeItem['Recipe']['id']), array('class' => '')); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Item'); ?></strong></td>
		<td>
			<?php echo $this->Html->link($recipeItem['Item']['name'], array('controller' => 'items', 'action' => 'view', $recipeItem['Item']['id']), array('class' => '')); ?>
			&nbsp;
		</td>
</tr>					</tbody>
				</table><!-- /.table table-striped table-bordered -->
			</div><!-- /.table-responsive -->
			
		</div><!-- /.view -->

			
	</div><!-- /#page-content .span9 -->

</div><!-- /#page-container .row-fluid -->
