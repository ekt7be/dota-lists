
<div id="page-container" class="row">
<?php if($role == 'admin') {?>
	<div id="sidebar" class="col-sm-3">
		
		<div class="actions">
		
			<ul class="list-group">
				<li class="list-group-item"><?php echo $this->Html->link(__('New Hero'), array('action' => 'add'), array('class' => '')); ?></li>
				<li class="list-group-item"><?php echo $this->Html->link(__('List Hero Builds'), array('controller' => 'hero_builds', 'action' => 'index'), array('class' => '')); ?></li> 
				<li class="list-group-item"><?php echo $this->Html->link(__('New Hero Build'), array('controller' => 'hero_builds', 'action' => 'add'), array('class' => '')); ?></li> 
				<li class="list-group-item"><?php echo $this->Html->link(__('List Skills'), array('controller' => 'skills', 'action' => 'index'), array('class' => '')); ?></li> 
				<li class="list-group-item"><?php echo $this->Html->link(__('New Skill'), array('controller' => 'skills', 'action' => 'add'), array('class' => '')); ?></li> 
			</ul><!-- /.list-group -->
			
		</div><!-- /.actions -->
		
	</div><!-- /#sidebar .col-sm-3 -->
	<?php } ?>	
	
	<div id="page-content" class="col-sm-9">

		<div class="heroes index">
		
			<h2><?php echo __('Heroes'); ?></h2>
			
			<div class="table-responsive">
				<table cellpadding="0" cellspacing="0" class="table table-striped table-bordered">
					<thead>
						<tr>

							<th><?php echo $this->Paginator->sort('name'); ?></th>
							<th><?php echo $this->Paginator->sort('hit_points'); ?></th>
							<th><?php echo $this->Paginator->sort('damage'); ?></th>
							<th><?php echo $this->Paginator->sort('armor'); ?></th>
							<th><?php echo $this->Paginator->sort('movespeed'); ?></th>
							<th><?php echo $this->Paginator->sort('strength'); ?></th>
							<th><?php echo $this->Paginator->sort('agility'); ?></th>
							<th><?php echo $this->Paginator->sort('intelligence'); ?></th>

						</tr>
					</thead>
					<tbody>
<?php foreach ($heroes as $hero): ?>
	<tr>
	     
		<td><?php echo $this->Html->link($hero['Hero']['name'], array('controller' => 'heroes', 'action' => 'view', $hero['Hero']['id'])); ?>&nbsp;</td>
		<!--<td><?php echo h($hero['Hero']['biography']); ?>&nbsp;</td>!-->
		<td><?php echo h($hero['Hero']['hit_points']); ?>&nbsp;</td>
		<td><?php echo h($hero['Hero']['damage']); ?>&nbsp;</td>
		<td><?php echo h($hero['Hero']['armor']); ?>&nbsp;</td>
		<td><?php echo h($hero['Hero']['movespeed']); ?>&nbsp;</td>
		<td><?php echo h($hero['Hero']['strength']); ?>&nbsp;</td>
		<td><?php echo h($hero['Hero']['agility']); ?>&nbsp;</td>
		<td><?php echo h($hero['Hero']['intelligence']); ?>&nbsp;</td>
		
			<?php 
			if($role == 'user')
			{
			}
			else
			{
			    echo '<td class=\"actions\">';
				echo $this->Html->link(__('View'), array('action' => 'view', $hero['Hero']['id']), array('class' => 'btn btn-default btn-xs')); 
				echo $this->Html->link(__('Edit'), array('action' => 'edit', $hero['Hero']['id']), array('class' => 'btn btn-default btn-xs')); 
				echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $hero['Hero']['id']), array('class' => 'btn btn-default btn-xs'), __('Are you sure you want to delete # %s?', $hero['Hero']['id'])); 
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