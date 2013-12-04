
<div id="page-container" class="row">

	<div id="sidebar" class="col-sm-3">
		
		<div class="actions">
			
			<ul class="list-group">			
						<li class="list-group-item"><?php echo $this->Html->link(__('Edit Skill'), array('action' => 'edit', $skill['Skill']['id']), array('class' => '')); ?> </li>
		<li class="list-group-item"><?php echo $this->Form->postLink(__('Delete Skill'), array('action' => 'delete', $skill['Skill']['id']), array('class' => ''), __('Are you sure you want to delete # %s?', $skill['Skill']['id'])); ?> </li>
		<li class="list-group-item"><?php echo $this->Html->link(__('List Skills'), array('action' => 'index'), array('class' => '')); ?> </li>
		<li class="list-group-item"><?php echo $this->Html->link(__('New Skill'), array('action' => 'add'), array('class' => '')); ?> </li>
		<li class="list-group-item"><?php echo $this->Html->link(__('List Heroes'), array('controller' => 'heroes', 'action' => 'index'), array('class' => '')); ?> </li>
		<li class="list-group-item"><?php echo $this->Html->link(__('New Hero'), array('controller' => 'heroes', 'action' => 'add'), array('class' => '')); ?> </li>
				
			</ul><!-- /.list-group -->
			
		</div><!-- /.actions -->
		
	</div><!-- /#sidebar .span3 -->
	
	<div id="page-content" class="col-sm-9">
		
		<div class="skills view">

			<h2><?php  echo __('Skill'); ?></h2>
			
			<div class="table-responsive">
				<table class="table table-striped table-bordered">
					<tbody>
						<tr>		<td><strong><?php echo __('Id'); ?></strong></td>
		<td>
			<?php echo h($skill['Skill']['id']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Hero'); ?></strong></td>
		<td>
			<?php echo $this->Html->link($skill['Hero']['name'], array('controller' => 'heroes', 'action' => 'view', $skill['Hero']['id']), array('class' => '')); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Name'); ?></strong></td>
		<td>
			<?php echo h($skill['Skill']['name']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Description'); ?></strong></td>
		<td>
			<?php echo h($skill['Skill']['description']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Ability Type'); ?></strong></td>
		<td>
			<?php echo h($skill['Skill']['ability_type']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Damage'); ?></strong></td>
		<td>
			<?php echo h($skill['Skill']['damage']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Mana Cost'); ?></strong></td>
		<td>
			<?php echo h($skill['Skill']['mana_cost']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Cooldown'); ?></strong></td>
		<td>
			<?php echo h($skill['Skill']['cooldown']); ?>
			&nbsp;
		</td>
</tr>					</tbody>
				</table><!-- /.table table-striped table-bordered -->
			</div><!-- /.table-responsive -->
			
		</div><!-- /.view -->

			
	</div><!-- /#page-content .span9 -->

</div><!-- /#page-container .row-fluid -->
