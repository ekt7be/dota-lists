
<div id="page-container" class="row">

	<div id="sidebar" class="col-sm-3">
		
		<div class="actions">
			
			<ul class="list-group">			
						<li class="list-group-item"><?php echo $this->Html->link(__('Edit Hero'), array('action' => 'edit', $myListHero['MyListHero']['id']), array('class' => '')); ?> </li>
		<li class="list-group-item"><?php echo $this->Form->postLink(__('Delete Hero'), array('action' => 'delete', $myListHero['MyListHero']['id']), array('class' => ''), __('Are you sure you want to delete # %s?', $myListHero['MyListHero']['id'])); ?> </li>
		<li class="list-group-item"><?php echo $this->Html->link(__('Add Hero'), array('action' => 'add'), array('class' => '')); ?> </li>
		<li class="list-group-item"><?php echo $this->Html->link(__(' My Lists'), array('controller' => 'my_lists', 'action' => 'index'), array('class' => '')); ?> </li>
		<li class="list-group-item"><?php echo $this->Html->link(__('New List'), array('controller' => 'my_lists', 'action' => 'add'), array('class' => '')); ?> </li>
		<li class="list-group-item"><?php echo $this->Html->link(__('List Heroes'), array('controller' => 'heroes', 'action' => 'index'), array('class' => '')); ?> </li>
				
			</ul><!-- /.list-group -->
			
		</div><!-- /.actions -->
		
	</div><!-- /#sidebar .span3 -->
	
	<div id="page-content" class="col-sm-9">
		
		<div class="myListHeroes view">

			<h2><?php  echo __('Hero'); ?></h2>
			
			<div class="table-responsive">
				<table class="table table-striped table-bordered">
					<tbody>
						<tr>		
</tr><tr>		<td><strong><?php echo __('My List'); ?></strong></td>
		<td>
			<?php echo $this->Html->link($myListHero['MyList']['title'], array('controller' => 'my_lists', 'action' => 'view', $myListHero['MyList']['id']), array('class' => '')); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Hero'); ?></strong></td>
		<td>
			<?php echo $this->Html->link($myListHero['Hero']['name'], array('controller' => 'heroes', 'action' => 'view', $myListHero['Hero']['id']), array('class' => '')); ?>
			&nbsp;
		</td>
</tr>					</tbody>
				</table><!-- /.table table-striped table-bordered -->
			</div><!-- /.table-responsive -->
			
		</div><!-- /.view -->

			
	</div><!-- /#page-content .span9 -->

</div><!-- /#page-container .row-fluid -->
