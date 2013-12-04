
<div id="page-container" class="row">

	<div id="sidebar" class="col-sm-3">
		
		<div class="actions">
		
			<ul class="list-group">
				<li class="list-group-item"><?php echo $this->Form->postLink(__('Delete This List'), array('action' => 'delete', $this->Form->value('MyList.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('MyList.id'))); ?></li>
				<li class="list-group-item"><?php echo $this->Html->link(__('My Lists'), array('action' => 'index')); ?></li>

				<li class="list-group-item"><?php echo $this->Html->link(__('Add Hero'), array('controller' => 'my_list_heroes', 'action' => 'add')); ?> </li>
			</ul><!-- /.list-group -->
		
		</div><!-- /.actions -->
		
	</div><!-- /#sidebar .col-sm-3 -->
	
	<div id="page-content" class="col-sm-9">

		<h2><?php echo __('Edit List'); ?></h2>

		<div class="myLists form">
		
			<?php echo $this->Form->create('MyList', array('role' => 'form')); ?>

				<fieldset>

					<div class="form-group">
						<?php echo $this->Form->input('id', array('class' => 'form-control')); ?>
					</div><!-- .form-group -->
				
					<div class="form-group">
						<?php echo $this->Form->input('title', array('class' => 'form-control')); ?>
					</div><!-- .form-group -->

					<?php echo $this->Form->submit('Submit', array('class' => 'btn btn-large btn-primary')); ?>

				</fieldset>

			<?php echo $this->Form->end(); ?>

		</div><!-- /.form -->
			
	</div><!-- /#page-content .col-sm-9 -->

</div><!-- /#page-container .row-fluid -->