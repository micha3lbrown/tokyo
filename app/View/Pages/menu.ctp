<? 
if (!Configure::read('debug')):
	throw new NotFoundException();
endif;

// echo $this->element('header');
App::uses('Debugger', 'Utility');
?>

</div>
<div id="main">
	<div class="container">
		<div class="row padv50">
			<div id="menuJpg" class="col-sm-12 slide">
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
</div>