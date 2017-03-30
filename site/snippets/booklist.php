<!-- snippets/booklist.php -->

<?php $pxtorem=16; ?>

  <div class="side">
 

   

            <?php foreach(page()->children()->visible()->limit(1)  as $livre){ ?>

      
          <h2 id="i<?= $livre->images()->first()->name() ?>"><a href="<?= $livre->url() ?>"><?php echo $livre->title()->html()  ?></a></h2>
  
    <?php }  ?>

   <h2>Selection</h2>
      <ul>


        <?php foreach(page()->children()->visible()->not('catalogue')->sortBy('title', 'asc')  as $livre){ ?>
        <li id="i<?= $livre->images()->first()->name() ?>">
          <h3><a href="<?= $livre->url() ?>"><?php echo $livre->title()->kirbytext()  ?></a></h3>
        </li>
        <?php }  ?>

      </ul>
   </div>

  <div class="main">
    <h2><?= $page->title()->html() ?></h1>
    <h3><?= $page->theme()->html() ?></h2>
    <p><?= $page->about()->html() ?></p>

    <ul>

              <?php foreach(page()->children()->visible()->limit(1)  as $livre){ ?>
       <li id="i<?= $livre->images()->first()->name() ?>">
          <a href="<?= $livre->url() ?>">
            <img class="gray" src="<?= $livre->images()->first()->url() ?>" height="<?= (($livre->height()->value()/10)*$pxtorem)?>">
         </a>
       </li>
  <?php }  ?>

<li class="filet"></li>

      <?php foreach($page->children()->visible()->not('catalogue')->sortBy('title', 'asc') as $livre){ ?>
        <li id="i<?= $livre->images()->first()->name() ?>">
          <a href="<?= $livre->url() ?>">
            <img class="gray" src="<?= $livre->images()->first()->url() ?>" height="<?= (($livre->height()->value()/10)*$pxtorem)?>">
         </a>
       </li>
 
   <?php } ?>
       </ul>
  </div>

<!-- fin snippets/booklist.php -->