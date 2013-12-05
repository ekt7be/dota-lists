<nav class="navbar navbar-default" role="navigation">
	<div class="navbar-header">
		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
			<span class="sr-only">Toggle navigation</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		</button><!-- /.navbar-toggle -->
		<?php echo $this->Html->Link('MOBA Lists', 'http://plato.cs.virginia.edu/~ekt7be/db_project/', array('class' => 'navbar-brand')); ?>
	</div><!-- /.navbar-header -->
	<div class="collapse navbar-collapse navbar-ex1-collapse">
		<ul class="nav navbar-nav">	
		<?php if ($this->Session->read('Auth.User')) {
		?>
			<?php if ($this->Session->read('Auth.User.role') == 'admin') {?>
			<li><?php echo $this->Html->link(__('Download Sqldump'), array('controller' => 'users', 'action' => 'download')); ?> </li>
<?php } ?>			
			<li><?php echo $this->Html->link(__('Your Hero Lists'), array('controller' => 'my_lists', 'action' => 'index')); ?> </li>
			<li><?php echo $this->Html->link(__('Hero Builds'), array('controller' => 'hero_builds', 'action' => 'index')); ?> </li>
			<li><?php echo $this->Html->link(__('View Heroes'), array('controller' => 'heroes', 'action' => 'index')); ?> </li>
						<li><?php echo $this->Html->link(__('View Items'), array('controller' => 'items', 'action' => 'index')); ?> </li>
						<li><?php echo $this->Html->link(__('View Recipes'), array('controller' => 'recipes', 'action' => 'index')); ?> </li>
						
			<!--<li class="dropdown">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown"> View Database <b class="caret"></b></a>
				<ul class="dropdown-menu">
				</ul>
			</li>!-->
			<li><?php echo $this->Html->link(__('Logout'), array('controller' => 'users', 'action' => 'logout')); ?> </li>
		<?php
		}
		else
		{?>
			<li><?php echo $this->Html->link(__('Login'), array('controller' => 'users', 'action' => 'login')); ?> </li>
			<li><?php echo $this->Html->link(__('Sign Up'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<?php } ?>
		</ul><!-- /.nav navbar-nav -->
	</div><!-- /.navbar-collapse -->
</nav><!-- /.navbar navbar-default -->