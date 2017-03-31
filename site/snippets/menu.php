<!-- snippets/menu.php -->

<nav>

<!--   <p>isChildOf("selections") : <?= $page->isChildOf("selections") ?></p>
  <p>is("selections") : <?= $page->is("selections") ?></p>
  <p>hasTemplate("livre") : <?= $page->hasTemplate("livre") ?></p>
  <p>template() : <?= $page->template() ?></p> -->


   <ul class="menu <?php

    if ( $page->isChildOf("programme")) { 
      echo "programme";
    } elseif($page->isChildOf("selections") || $page->template() == "selections" || $page->template() == "livre" ) {
      echo "selections";
    } else{
      echo $page->uid();
    } 
    echo " ".$page->uid(); ?>">


  
      <?php foreach($pages->visible() as $item):?>
        <a href="<?= $item->url() ?>">
          <li class="menu-item<?= r($item->isOpen(), ' is-active') ?>" id="<?php echo  $item->uid() ?>">
            <?= $item->title()->html() ?>

          </li>
        </a>
<ul class="sous-menu invisible   <?= $item->id() ?>">
     <?php foreach($item->children()->visible() as $subpage):?>


  <a href="<?= $subpage->url() ?>">
   <li class="menu-item<?= r($subpage->isOpen(), ' is-active') ?>">
    <?= $subpage->title()->html() ?>
  </li>
</a>



  <?php endforeach ?>
</ul>




      <?php endforeach ?>
   </ul>
      <ul class='liens_ext'>
      <li>
      <a href="https://www.facebook.com/Exemplaires2017/" target="_blank"><i class="fa fa-facebook"></i></a>
      <a href="https://www.instagram.com/Exemplaires2017/" target="_blank"><i class="fa fa-instagram"></i></a>
      </li>
      <li><a href="https://exemplaires2015.fr/" target="_blank">Exemplaires </br>2015</a></li>
      </ul>

      
</nav>



<!-- fin snippets/menu.php -->