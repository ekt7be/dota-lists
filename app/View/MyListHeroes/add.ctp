
<div id="page-container" class="row">

	<div id="sidebar" class="col-sm-3">
		
		<div class="actions">
		
			<ul class="list-group">

				<li class="list-group-item"><?php echo $this->Html->link(__('My Lists'), array('controller' => 'my_lists', 'action' => 'index')); ?> </li>
				<li class="list-group-item"><?php echo $this->Html->link(__('New List'), array('controller' => 'my_lists', 'action' => 'add')); ?> </li>
				<li class="list-group-item"><?php echo $this->Html->link(__('List Heroes'), array('controller' => 'heroes', 'action' => 'index')); ?> </li>

			</ul><!-- /.list-group -->
		
		</div><!-- /.actions -->
		
	</div><!-- /#sidebar .col-sm-3 -->
	
	<div id="page-content" class="col-sm-9">

		<h2><?php echo __('Add Hero'); ?></h2>

		<div class="myListHeroes form">
		
			<?php echo $this->Form->create('MyListHero', array('role' => 'form')); ?>

				<fieldset>
					<div class="form-group">
						<?php echo $this->Form->input('my_list_id', array('class' => 'form-control')); ?>
					</div><!-- .form-group -->
					<div class="form-group">
						<?php echo $this->Form->input('hero_id', array('class' => 'form-control')); ?>
					</div><!-- .form-group -->

					<?php echo $this->Form->submit('Submit', array('class' => 'btn btn-large btn-primary')); ?>

				</fieldset>

			<?php echo $this->Form->end(); ?>

		</div><!-- /.form -->
			
	</div><!-- /#page-content .col-sm-9 -->

</div><!-- /#page-container .row-fluid -->