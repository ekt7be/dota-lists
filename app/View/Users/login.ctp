<div class="users form">

	<h2><?php echo __('Welcome to Moba Lists!'); ?></h2>

<?php echo $this->Form->create('User'); ?>
    <fieldset>
<div class="form-group">
						<?php echo $this->Form->input('username', array('class' => 'form-control')); ?>
					</div><!-- .form-group -->
					<div class="form-group">
						<?php echo $this->Form->input('password', array('class' => 'form-control')); ?>
					</div><!-- .form-group -->
					

					<?php echo $this->Form->submit('Login', array('class' => 'btn btn-large btn-primary')); ?>
    </fieldset>
	<?php echo $this->Form->end(); ?>
	<br>
</div>