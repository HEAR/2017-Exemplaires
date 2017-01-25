<!-- snippets/bookmosaic.php -->

<div id='mosaic'>

<?php foreach($pages->children()->filterBy('template', 'livre')->visible() as $livre): ?>
	
	

	<?php if($image = $livre->images()->sortBy('sort', 'asc')->first()): ?>

	<div class='livre <?php echo  $livre->parent()->diruri() ?>'>
      <h3><?php echo  $livre->title()->html() ?></h3>
      <h4><?php echo  $livre->parent()->diruri() ?></h4>
		<a href="<?php echo $livre->parent()->url() ?>">
			<?php

			$ratio = 0.3;

			if( !empty( $livre->width()->int() ) && !empty( $livre->height()->int() ) ) {
				$width  = $livre->width()->int() * $ratio;
				$height = $livre->height()->int() * $ratio;
				$crop 	= true;
			} else {
				$width  = 400 * $ratio;
				$height = 300 * $ratio;
				$crop 	= false;
			}
			?>

			<?php echo thumb($image, array('width' => $width, 'height' => $height, 'crop' => $crop )); ?>
		</a>
	</div>

	<?php endif ?>

<?php endforeach ?>

</div>

<!-- fin snippets/bookmosaic.php -->