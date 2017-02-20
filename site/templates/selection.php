<?php snippet('header') ?>

<!-- selection.php -->

<div id="encart" class="glitch"></div>

<main class="main" id="mosaic" role="main">

   <header class="list_header wrap">
      <h1><?= $page->title()->html() ?></h1>
      <div class="intro text">
         <?= $page->text()->kirbytext() ?>
      </div>
   </header>

   <div id="mosaic-scroll">

      <div class="wrap wide">    
         <?php snippet('booklist') ?>
      </div>


   </div>
</main>

<!-- fin selection.php -->

<?php snippet('footer') ?>