
<div id="page-container" class="row">

	
	<div id="page-content" class="col-sm-9">
		
		<div class="heroes view">

			<h2><?php  echo __('Hero'); ?></h2>
			
			<div class="table-responsive">
				<table class="table table-striped table-bordered">
					<tbody>
						<tr>		<td><strong><?php echo __('Name'); ?></strong></td>
		<td>
			<?php echo h($hero['Hero']['name']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Biography'); ?></strong></td>
		<td>
			<?php echo h($hero['Hero']['biography']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Hit Points'); ?></strong></td>
		<td>
			<?php echo h($hero['Hero']['hit_points']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Damage'); ?></strong></td>
		<td>
			<?php echo h($hero['Hero']['damage']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Armor'); ?></strong></td>
		<td>
			<?php echo h($hero['Hero']['armor']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Movespeed'); ?></strong></td>
		<td>
			<?php echo h($hero['Hero']['movespeed']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Strength'); ?></strong></td>
		<td>
			<?php echo h($hero['Hero']['strength']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Agility'); ?></strong></td>
		<td>
			<?php echo h($hero['Hero']['agility']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Intelligence'); ?></strong></td>
		<td>
			<?php echo h($hero['Hero']['intelligence']); ?>
			&nbsp;
		</td>
</tr>					</tbody>
				</table><!-- /.table table-striped table-bordered -->
			</div><!-- /.table-responsive -->
			
		</div><!-- /.view -->

					
			<div class="related">

				<h3><?php echo __('Related Hero Builds'); ?></h3>
				
				<?php if (!empty($hero['HeroBuild'])): ?>
					
					<div class="table-responsive">
						<table class="table table-striped table-bordered">
							<thead>
								<tr>

		<th><?php echo __('Title'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
									<th class="actions"><?php echo __('Actions'); ?></th>
								</tr>
							</thead>
							<tbody>
									<?php
										$i = 0;
										foreach ($hero['HeroBuild'] as $heroBuild): ?>
		<tr>

			<td><?php echo $heroBuild['title']; ?></td>
			<td><?php echo $heroBuild['created']; ?></td>
			<td><?php echo $heroBuild['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'hero_builds', 'action' => 'view', $heroBuild['id']), array('class' => 'btn btn-default btn-xs')); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'hero_builds', 'action' => 'edit', $heroBuild['id']), array('class' => 'btn btn-default btn-xs')); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'hero_builds', 'action' => 'delete', $heroBuild['id']), array('class' => 'btn btn-default btn-xs'), __('Are you sure you want to delete # %s?', $heroBuild['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
							</tbody>
						</table><!-- /.table table-striped table-bordered -->
					</div><!-- /.table-responsive -->
					
				<?php endif; ?>

				
				<div class="actions">
					<?php echo $this->Html->link('<i class="icon-plus icon-white"></i> '.__('New Hero Build'), array('controller' => 'hero_builds', 'action' => 'add'), array('class' => 'btn btn-primary', 'escape' => false)); ?>				</div><!-- /.actions -->
				
			</div><!-- /.related -->

					
			<div class="related">

				<h3><?php echo __('Related Skills'); ?></h3>
				
				<?php if (!empty($hero['Skill'])): ?>
					
					<div class="table-responsive">
						<table class="table table-striped table-bordered">
							<thead>
								<tr>

		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Description'); ?></th>
		<th><?php echo __('Ability Type'); ?></th>
		<th><?php echo __('Damage'); ?></th>
		<th><?php echo __('Mana Cost'); ?></th>
		<th><?php echo __('Cooldown'); ?></th>
								</tr>
							</thead>
							<tbody>
									<?php
										$i = 0;
										foreach ($hero['Skill'] as $skill): ?>
		<tr>

			<td><?php echo $skill['name']; ?></td>
			<td><?php echo $skill['description']; ?></td>
			<td><?php echo $skill['ability_type']; ?></td>
			<td><?php echo $skill['damage']; ?></td>
			<td><?php echo $skill['mana_cost']; ?></td>
			<td><?php echo $skill['cooldown']; ?></td>
			
		</tr>
	<?php endforeach; ?>
							</tbody>
						</table><!-- /.table table-striped table-bordered -->
					</div><!-- /.table-responsive -->
					
				<?php endif; ?>

				
			
	</div><!-- /#page-content .span9 -->

</div><!-- /#page-container .row-fluid -->
