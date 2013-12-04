
<div id="page-container" class="row">

	
	
	<div id="page-content" class="col-sm-9">
		
		<div class="items view">

			<h2><?php echo h($item['Item']['name']); ?></h2>
			
			<div class="table-responsive">
				<table class="table table-striped table-bordered">
					<tbody>
						<tr>		
	
</tr><tr>		<td><strong><?php echo __('Description'); ?></strong></td>
		<td>
			<?php echo h($item['Item']['description']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Stats'); ?></strong></td>
		<td>
			<?php echo h($item['Item']['stats']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Cost'); ?></strong></td>
		<td>
			<?php echo h($item['Item']['cost']); ?>
			&nbsp;
		</td>
</tr>					</tbody>
				</table><!-- /.table table-striped table-bordered -->
			</div><!-- /.table-responsive -->
			
		</div><!-- /.view -->

					
			<div class="related">

				<h3><?php echo __('Recipes'); ?></h3>
				
				<?php if (!empty($item['Recipe'])): ?>
					
					<div class="table-responsive">
						<table class="table table-striped table-bordered">
							<thead>
								<tr>
											

		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Cost'); ?></th>
									
								</tr>
							</thead>
							<tbody>
									<?php
										$i = 0;
										foreach ($item['Recipe'] as $recipe): ?>
		<tr>
			

			<td><?php echo $this->Html->link($recipe['name'], array('controller' => 'recipes', 'action' => 'view', $recipe['id'])); ?></td>
			<td><?php echo $recipe['cost']; ?></td>
			
		</tr>
	<?php endforeach; ?>
							</tbody>
						</table><!-- /.table table-striped table-bordered -->
					</div><!-- /.table-responsive -->
					
				<?php endif; ?>

				


			
	</div><!-- /#page-content .span9 -->

</div><!-- /#page-container .row-fluid -->
