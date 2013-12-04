
<div id="page-container" class="row">

	<div id="sidebar" class="col-sm-3">
		
		<div class="actions">
			
			<ul class="list-group">			
						<li class="list-group-item"><?php echo $this->Html->link(__('Edit Item'), array('action' => 'edit', $heroBuildItem['HeroBuildItem']['id']), array('class' => '')); ?> </li>
		<li class="list-group-item"><?php echo $this->Form->postLink(__('Delete  Item'), array('action' => 'delete', $heroBuildItem['HeroBuildItem']['id']), array('class' => ''), __('Are you sure you want to delete # %s?', $heroBuildItem['HeroBuildItem']['id'])); ?> </li>
		<li class="list-group-item"><?php echo $this->Html->link(__('Add Item'), array('action' => 'add'), array('class' => '')); ?> </li>
		<li class="list-group-item"><?php echo $this->Html->link(__('List  Builds'), array('controller' => 'hero_builds', 'action' => 'index'), array('class' => '')); ?> </li>
		<li class="list-group-item"><?php echo $this->Html->link(__('New Build'), array('controller' => 'hero_builds', 'action' => 'add'), array('class' => '')); ?> </li>
		<li class="list-group-item"><?php echo $this->Html->link(__('List Items'), array('controller' => 'items', 'action' => 'index'), array('class' => '')); ?> </li>
				
			</ul><!-- /.list-group -->
			
		</div><!-- /.actions -->
		
	</div><!-- /#sidebar .span3 -->
	
	<div id="page-content" class="col-sm-9">
		
		<div class="heroBuildItems view">

			<h2><?php  echo __('Build Item'); ?></h2>
			
			<div class="table-responsive">
				<table class="table table-striped table-bordered">
					<tbody>
						<tr>		<td><strong><?php echo __('Id'); ?></strong></td>
		<td>
			<?php echo h($heroBuildItem['HeroBuildItem']['id']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Hero Build'); ?></strong></td>
		<td>
			<?php echo $this->Html->link($heroBuildItem['HeroBuild']['title'], array('controller' => 'hero_builds', 'action' => 'view', $heroBuildItem['HeroBuild']['id']), array('class' => '')); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Item'); ?></strong></td>
		<td>
			<?php echo $this->Html->link($heroBuildItem['Item']['name'], array('controller' => 'items', 'action' => 'view', $heroBuildItem['Item']['id']), array('class' => '')); ?>
			&nbsp;
		</td>
</tr>					</tbody>
				</table><!-- /.table table-striped table-bordered -->
			</div><!-- /.table-responsive -->
			
		</div><!-- /.view -->

			
	</div><!-- /#page-content .span9 -->

</div><!-- /#page-container .row-fluid -->
