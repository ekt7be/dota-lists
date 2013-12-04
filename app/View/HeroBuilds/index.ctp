
<div id="page-container" class="row">

	<div id="sidebar" class="col-sm-3">
		
		<div class="actions">
		
			<ul class="list-group">
				<li class="list-group-item"><?php echo $this->Html->link(__('New Build'), array('action' => 'add'), array('class' => '')); ?></li>
				<li class="list-group-item"><?php echo $this->Html->link(__('List Heroes'), array('controller' => 'heroes', 'action' => 'index'), array('class' => '')); ?></li> 
			</ul><!-- /.list-group -->
			
		</div><!-- /.actions -->
		
	</div><!-- /#sidebar .col-sm-3 -->
	
	<div id="page-content" class="col-sm-9">

		<div class="heroBuilds index">
		
			<h2><?php echo __('Hero Builds'); ?></h2>
			
			<div class="table-responsive">
				<table cellpadding="0" cellspacing="0" class="table table-striped table-bordered">
					<thead>
						<tr>
					
							<th><?php echo $this->Paginator->sort('hero_id'); ?></th>
							<th><?php echo $this->Paginator->sort('title'); ?></th>
							<th><?php echo $this->Paginator->sort('created'); ?></th>
							<th><?php echo $this->Paginator->sort('modified'); ?></th>
							<th class="actions"><?php echo __('Actions'); ?></th>
						</tr>
					</thead>
					<tbody>
<?php foreach ($heroBuilds as $heroBuild): ?>
	<tr>
		<td>
			<?php echo $this->Html->link($heroBuild['Hero']['name'], array('controller' => 'heroes', 'action' => 'view', $heroBuild['Hero']['id'])); ?>
		</td>
		<td><?php echo h($heroBuild['HeroBuild']['title']); ?>&nbsp;</td>
		<td><?php echo h($heroBuild['HeroBuild']['created']); ?>&nbsp;</td>
		<td><?php echo h($heroBuild['HeroBuild']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $heroBuild['HeroBuild']['id']), array('class' => 'btn btn-default btn-xs')); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $heroBuild['HeroBuild']['id']), array('class' => 'btn btn-default btn-xs')); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $heroBuild['HeroBuild']['id']), array('class' => 'btn btn-default btn-xs'), __('Are you sure you want to delete # %s?', $heroBuild['HeroBuild']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
					</tbody>
				</table>
			</div><!-- /.table-responsive -->
			
			<p><small>
				<?php
					echo $this->Paginator->counter(array(
					'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
					));
				?>
			</small></p>

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