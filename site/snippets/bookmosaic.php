<h2>MOSAIQUE DES livres</h2>

<?php foreach($pages->children()->filterBy('template', 'livre')->visible() as $livre): ?>
	
	

	<?php if($image = $livre->images()->sortBy('sort', 'asc')->first()): ?>

	<div class='livre <?php echo  $livre->parent()->diruri() ?>'>
	<?php echo  $livre->title()->html() ?> <?php echo  $livre->parent()->diruri() ?>
		<a href="<?php echo $livre->url() ?>">
			<!-- <img src="<?php echo $image->url() ?>" alt="<?php echo $livre->title()->html() ?>" > -->

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

