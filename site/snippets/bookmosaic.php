<!-- snippets/bookmosaic.php -->

<div id="encart" class="glitch"></div>

<div id="mosaic">
   
   <div id="mosaic-scroll">

<?php foreach($pages->children()->filterBy('template', 'livre')->visible() as $livre): ?>
	
	

	<?php if($image = $livre->images()->sortBy('sort', 'asc')->first()): ?>

	<div class='mosaic_livre <?php echo  $livre->parent()->id() ?>'>
      <div>
         <h4>Livre de la sélection<br/><?php echo  $livre->parent()->title() ?></h4>
         <a href="<?php echo $livre->parent()->url() ?>">
            <h3><?php echo  $livre->title()->html() ?></h3>
         </a>
         <h4><?php echo  $livre->author()->html() ?></h4>
      </div>
		<a class="test" href="<?php echo $livre->parent()->url() ?>">
			<?php

			$ratio = 0.4;

			if( !empty( $livre->width()->int() ) && !empty( $livre->height()->int() ) ) {
				$width  = $livre->width()->int() * $ratio;
				$height = $livre->height()->int() * $ratio;
				$crop   = true;
			} else {
				$width  = 400 * $ratio;
				$height = 300 * $ratio;
				$crop   = false;
			}
			?>

         <?php echo thumb($image, array('width' => $width, 'height' => $height, 'crop' => $crop )); ?>
		</a>
	</div>

	<?php endif ?>

      <?php endforeach ?>
  
   </div>
</div>

<!-- fin snippets/bookmosaic.php -->