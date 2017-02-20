<?php snippet('header') ?>

<!-- livre.php -->

<div id='container'>

   <div class='rubrique' id="<?php echo $page->id(); ?>">

      <div class="glitch" id="livre-info">

         <h1><?= $page->title()->html() ?></h1>

         <ul>
            <li>Auteur&#8239;: <?= $page->author() ?></li>
            <li>Conception graphique&#8239;: <?= $page->graphisme() ?></li>
            <li>Éditeur&#8239;: <a href='http://<?= $page->website() ?>' target="_blank"><?= $page->editor() ?></a></li>
            <li>Année&#8239;: <?= $page->year() ?></li>
            <li>Prix&#8239;: <?= $page->price() ?></li>
         </ul>

         <?= $page->text()->kirbytext() ?>


      </div>
      
      <ul id='cover_list'>
         <?php
         // Images for the "livre" template are sortable. You
         // can change the display by clicking the 'edit' button
         // above the files list in the sidebar.
         foreach($page->images()->sortBy('sort', 'asc') as $image): ?>
            <li>
               <img class="cover" src="<?= $image->url() ?>" alt="<?= $page->title()->html() ?>" />
            </li>
         <?php endforeach ?>
      </ul>

   </div>
   
</div>

<!-- fin livre.php -->

<?php snippet('footer') ?>