<?php
/**
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

$cakeDescription = __d('cake_dev', 'CakePHP: the rapid development php framework');
$cakeVersion = __d('cake_dev', 'CakePHP %s', Configure::version())
?>
<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $cakeDescription ?>:
		<?php echo $title_for_layout; ?>
	</title>
	<?php
		echo $this->Html->meta('icon');
		echo $this->Html->css('/app/webroot/css/bootstrap');
		echo $this->Html->css('/app/webroot/css/custom');
		echo $this->Html->css('/app/webroot/css/booklet.latest');

		echo $this->Html->script('/app/webroot/js/jquery.js');
		echo $this->Html->script('/app/webroot/js/bootstrap.js');
		echo $this->Html->script('/app/webroot/js/jquery-ui-1.10.4.min.js');
		echo $this->Html->script('/app/webroot/js/jquery.easing.1.3.js');
		echo $this->Html->script('/app/webroot/js/jquery.booklet.latest.min.js');
		echo $this->Html->script('/app/webroot/js/lt.js');
		
		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>


</head>
<body>
	<nav class="nav-top" role='navigation'>
	  <div class='container'>
	    <img class='navbar-brand' id='logo' src='app/webroot/img/WhiteLogo.jpg'>
	      <a href='http://google.com'></a>
	    </img>
	    <div class='navbar-header'>
	      <button class='navbar-toggle' data-target='#nav-main' data-toggle='collapse' type='button'>
	        <span class='sr-only'>Toggle navigation</span>
	        <span class='icon-bar'></span>
	        <span class='icon-bar'></span>
	        <span class='icon-bar'></span>
	      </button>
	    </div>
	    <div class='collapse navbar-collapse pull-right' id='nav-main'>
	      <ul class='nav navbar-nav'>
	        <li>
	          <a href='/tokyo/'>Home</a>
	        </li>
	        <li>
	          <a href='/tokyo/menu'>Menu</a>
	        </li>
	        <li>
	          <a href='/tokyo/social'>Social</a>
	        </li>
	        <li>
	          <a href='/tokyo/locations'>Locations</a>
	        </li>
	      </ul>
	    </div>
	  </div>
	</nav>
<?php echo $this->Session->flash(); ?>
<?php echo $this->fetch('content');	 ?>
