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
				<address>
				  <strong>Little Tokyo</strong> by Walmart<br>
				  730 Leonard Ave.<br>
				  Albemarle, NC 28001<br>
				 <a href="tel:7049852726"> (704)985-2726 </a>
				</address>
			</div>
			<div class="col-sm-4">
				<address>
				  <strong>Little Tokyo Lounge</strong><br>
				  1446 Hwy 52 N<br>
				  Albemarle, NC 28001<br>
				<a href="tel:7049851692"> (704)985-1692 </a>
				</address>
			</div>
			<div class="col-sm-4 text-right">
				<ul class="list-inline">
					<li>
						<a title="Little Tokyo Lounge" href="http://facebook.com/littletokyolounge">
							<i class="fa fa-facebook-square fa-3x"></i>
						</a>
					</li>
					<li>
						<a href="https://twitter.com/littletokyoalb">
							<i class="fa fa-twitter-square fa-3x"></i>
						</a>
					</li>
					<li>
						<a title="Little Tokyo near Walmart" href="http://facebook.com/littltokyo1">
							<i class="fa fa-facebook-square fa-3x"></i>
						</a>
					</li>
				</ul>
			</div>					
		</div>
	</div>
</div>
	<?php echo $this->element('sql_dump'); ?>
</body>
</html>
