<?php
/**
 *
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

$title = __d('cake_dev', 'MOBA Lists');
?>
<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $title ?>:
		<?php echo $title_for_layout; ?>
	</title>
	<?php
		echo $this->Html->meta('icon');

		echo $this->Html->css('cake.generic');

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
</head>
<body>
	<div id="container">
		<div id="header">
			<h1><?php echo $this->Html->link($title, array('controller' => 'users', 'action' => 'home')); ?></h1>
		</div>
		<div id="content">

			<?php echo $this->Session->flash(); ?>

			<?php echo $this->fetch('content'); ?>
		</div>
		<div id="footer">
				<div class="footer_content">
			<span id="footerLogo"><img src="http://cdn.steamcommunity.com/public/images/skin_1/footerLogo_valve.png" width="96" height="26" border="0" alt="Valve Logo" /></span>
			<span id="footerText">
				&copy; Valve Corporation. All rights reserved. All trademarks are property of their respective owners in the US and other countries.<br/>Some geospatial data on this website is provided by <a href="http://www.geonames.org" target="_blank">geonames.org</a>.				<br>
				<span class="valve_links">
					<a href="http://store.steampowered.com/privacy_agreement/" target="_blank">Privacy Policy</a> | <a href="http://www.valvesoftware.com/legal.htm" target="_blank">Legal</a> | <a href="http://store.steampowered.com/subscriber_agreement/" target="_blank">Steam Subscriber Agreement</a>
				</span>
							
							</span>
		</div>
		</div>
	</div>
	<?php echo $this->element('sql_dump'); ?>
</body>
</html>
