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
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php echo $this->Html->charset(); ?>
	<title>Little Tokyo</title>
	<link rel="icon" type="image/png" href="/img/ltfavi.png">
	<?php

		echo $this->Html->css('/app/webroot/css/bootstrap');
		echo $this->Html->css('/app/webroot/css/custom');
		echo $this->Html->css('/app/webroot/css/booklet.latest');
		echo $this->Html->css('//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css');

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

	<script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

	  ga('create', 'UA-38214672-6', 'auto');
	  ga('send', 'pageview');

	</script>
</head>
<body>
	<nav class="nav-top drop" role='navigation'>
	  <div class='container'>
	  	<a href="/">
	    	<img class='navbar-brand' id='logo' src='app/webroot/img/WhiteLogo.jpg' />
	    </a>
	    <div class='navbar-header'>
	      <button class='navbar-btn navbar-toggle collapsed' data-target='#nav-main' data-toggle='collapse' type='button'>
	        <span class='sr-only'>Toggle navigation</span>
	        <span class='icon-bar'></span>
	        <span class='icon-bar'></span>
	        <span class='icon-bar'></span>
	      </button>
	    </div>
	    <div class='collapse navbar-collapse' id='nav-main'>
	      <ul class='nav navbar-nav pull-left'>
	        <li>
	          <a href='/'>Home</a>
	        </li>
	        <li>
	          <a href='/menu'>Menu</a>
	        </li>
	        <li>
	          <a href='/social'>Social</a>
	        </li>
	        <li>
	          <a href='/locations'>Locations</a>
	        </li>
	      </ul>
	    </div>
	  </div>
	</nav>
<?php echo $this->Session->flash(); ?>
<?php echo $this->fetch('content');	 ?>
