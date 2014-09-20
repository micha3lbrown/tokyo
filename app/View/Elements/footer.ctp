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
</div>
</div>
<div id="footer" class="drop">
	<div class="container padv50">
		<div class="row">
			<div class="col-sm-4">
				<ul>
					<li><h3 class="uline">Contact Us</h3></li>
					<li><h3>Here</h3></li>
					<li><h3>Or Here</h3></li>
				</ul>
			</div>
			<div class="col-sm-4">
				
			</div>
			<div class="col-sm-4">

			</div>					
		</div>
	</div>
</div>
	<?php echo $this->element('sql_dump'); ?>
</body>
</html>
