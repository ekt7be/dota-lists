
<div id="page-container" class="row">

	<div id="sidebar" class="col-sm-3">
		
		<div class="actions">
		
			<ul class="list-group">
				<li class="list-group-item"><?php echo $this->Html->link(__('New Skill'), array('action' => 'add'), array('class' => '')); ?></li>
				<li class="list-group-item"><?php echo $this->Html->link(__('List Heroes'), array('controller' => 'heroes', 'action' => 'index'), array('class' => '')); ?></li> 
				<li class="list-group-item"><?php echo $this->Html->link(__('New Hero'), array('controller' => 'heroes', 'action' => 'add'), array('class' => '')); ?></li> 
			</ul><!-- /.list-group -->
			
		</div><!-- /.actions -->
		
	</div><!-- /#sidebar .col-sm-3 -->
	
	<div id="page-content" class="col-sm-9">

		<div class="skills index">
		
			<h2><?php echo __('Skills'); ?></h2>
			
			<div class="table-responsive">
				<table cellpadding="0" cellspacing="0" class="table table-striped table-bordered">
					<thead>
						<tr>
							<th><?php echo $this->Paginator->sort('hero_id'); ?></th>
							<th><?php echo $this->Paginator->sort('name'); ?></th>
							<th><?php echo $this->Paginator->sort('description'); ?></th>
							<th><?php echo $this->Paginator->sort('ability_type'); ?></th>
							<th><?php echo $this->Paginator->sort('damage'); ?></th>
							<th><?php echo $this->Paginator->sort('mana_cost'); ?></th>
							<th><?php echo $this->Paginator->sort('cooldown'); ?></th>
							<th class="actions"><?php echo __('Actions'); ?></th>
						</tr>
					</thead>
					<tbody>
<?php foreach ($skills as $skill): ?>
	<tr>
		<td>
			<?php echo $this->Html->link($skill['Hero']['name'], array('controller' => 'heroes', 'action' => 'view', $skill['Hero']['id'])); ?>
		</td>
		<td><?php echo h($skill['Skill']['name']); ?>&nbsp;</td>
		<td><?php echo h($skill['Skill']['description']); ?>&nbsp;</td>
		<td><?php echo h($skill['Skill']['ability_type']); ?>&nbsp;</td>
		<td><?php echo h($skill['Skill']['damage']); ?>&nbsp;</td>
		<td><?php echo h($skill['Skill']['mana_cost']); ?>&nbsp;</td>
		<td><?php echo h($skill['Skill']['cooldown']); ?>&nbsp;</td>
		<td class="actions">
			<?php 
			if($role == 'user')
			{
				echo $this->Html->link(__('View'), array('action' => 'view', $skill['Skill']['id']), array('class' => 'btn btn-default btn-xs')); 
			}
			else
			{
				echo $this->Html->link(__('View'), array('action' => 'view', $skill['Skill']['id']), array('class' => 'btn btn-default btn-xs')); 
				echo $this->Html->link(__('Edit'), array('action' => 'edit', $skill['Skill']['id']), array('class' => 'btn btn-default btn-xs')); 
				echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $skill['Skill']['id']), array('class' => 'btn btn-default btn-xs'), __('Are you sure you want to delete # %s?', $skill['Skill']['id'])); 
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