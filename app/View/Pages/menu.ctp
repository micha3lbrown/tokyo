<? 
if (!Configure::read('debug')):
	throw new NotFoundException();
endif;

// echo $this->element('header');
App::uses('Debugger', 'Utility');
?>

</div>
<div class="container">
	<div class="row">
		<div class="col-sm-12">
			<h1>Welcome to our menu</h1>
		</div>
		<div id="menuJpg" class="col-sm-12">
<?
			$menuImages = glob('img/menu/*.{jpg}', GLOB_BRACE);
			$count = 0;
			foreach($menuImages as $menuImage) {
?>
					<img class="imgFull" src="<?=$menuImage?>">
<? 
		}
?>
		</div>
	</div>
	
</div>