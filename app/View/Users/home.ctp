<div class="users index">
	<h2><?php echo __('Welcome to Moba Lists!'); ?></h2>

	<p> To track your personal progress in the game Defense of the Ancients (DOTA), this site will allow you to create hero builds and lists of champions.
</p><p>
A hero build lets you associate items with a hero that'll help you know what items to buy next in game and try different builds of different natures. 
<p>
A list of heroes lets you construct a list from a pool of all heroes and organize them in any way. You can list your favorite heroes, worst heroes, or heroes you want to work on. </p>

<p>You can also check on items, recipes, hero statistics or hero skills to refresh your memory!</p>

<div class="actions">
	<h3><?php echo __('Create'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New List of Heroes'), array('controller' => 'my_lists', 'action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('New Hero Build'), array('controller' => 'hero_builds', 'action' => 'add')); ?> </li>
	</ul>
	<h3><?php echo __('View'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('My Hero Lists'), array('controller' => 'my_lists', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Hero Builds'), array('controller' => 'hero_builds', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('DOTA Heroes'), array('controller' => 'heroes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('DOTA Items'), array('controller' => 'items', 'action' => 'index')); ?> </li>	
	</ul>
</div>
</div>