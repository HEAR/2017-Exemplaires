<?php snippet('header') ?>

<!-- livre.php -->
<?php $pxtorem=16; ?>


<div id='container'>

   <div class='rubrique' id="livre">

   <div class="main">
    <?php foreach ($page->images() as $image): ?>

      <img id="<?= $page->uid() ?>" src="<?= $image->url() ?>" alt="<?= $page->images()->html() ?>" width="<?= (($page->width()->value()/10)*$pxtorem) ?>"/>
    <?php endforeach ?>
</div>
   <div class="side">
      <ul>

         <li><?= $page->title()->kirbytext() ?></li>
         <li><?= $page->writter()->html() ?></li>
         <li>
         
         <?php if($page->place()->isNotEmpty()){
          echo  $page->place()->html(); 
        }

        if($page->place()->isNotEmpty() && $page->publisher()->isNotEmpty()){

          echo ", ";
        }

         if($page->publisher()->isNotEmpty()){
          echo $page->publisher()->html(); 
            }

         if($page->year()->isNotEmpty()){
         echo ", ".$page->year()->html();

            }   

             ?>

         </li>

        
         <li><?= $page->isbn()->html() ?></li> 
         <li><?= $page->price()->html() ?></li> 
        <li class="site"><a href="http://www.<?= $page->website()->html() ?>" target="_blank"><?= $page->website()->html() ?></a></li> 
        <li></li>
       </ul>


      <ul>
        <?php if($page->design()->isNotEmpty()) { ?>
         <li><span class="categorie">Design&thinsp;: </span><?= $page->design()->html() ?></li>
         <?php } ?>
         <?php if($page->nb_copies()->isNotEmpty()){?><li><span class="categorie">Nombre d'exemplaires&thinsp;: </span><?= $page->nb_copies()->html(); ?></li><?php }?> 

         <?php if($page->print()->isNotEmpty()){?><li><span class="categorie">Type d'impression&thinsp;: </span><?= $page->print()->html(); ?></li><?php }?> 
         <?php if($page->binding()->isNotEmpty()){?><li><span class="categorie">Type de reliure&thinsp;: </span><?= $page->binding()->html(); ?></li><?php }?>

         <li>
            <?php if($page->typeface1()->isNotEmpty() && $page->typeface2()->empty()){ ?>


            <span class="categorie">Police de caractère&thinsp;: </span><?php echo $page->typeface1()->html();

            }elseif($page->typeface2()->isNotEmpty()) { ?>

            <span class="categorie">Polices de caractère&thinsp;: </span><?php echo $page->typeface1()->html();


             } 

            if($page->typeface2()->isNotEmpty()) {
               echo ", ".$page->typeface2()->html();
            }
            if($page->typeface3()->isNotEmpty()) {
               echo ", ".$page->typeface3()->html(); 
            }
            ?>
       

         </li> 

         <li>
            <span class="categorie">Dimensions&thinsp;: </span><?php echo $page->width()->html()." x ".$page->height()->html();

            if($page->thickness()->isNotEmpty()) {
            echo " x ".$page->thickness()->html();
         } ?> mm</li>

         <?php if($page->nb_pages()->isNotEmpty()){ ?>
         <li><span class="categorie">Nombre de pages&thinsp;: </span><?= $page->nb_pages()->html() ?></li>
         <?php } ?>
         <li></li>
      </ul>
</div>

   </div>

</div>

<!-- fin livre.php -->

<?php snippet('footer') ?>