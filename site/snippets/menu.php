<!-- snippets/menu.php -->

<nav>

   <ul class="menu <?php
              $id=$site->page()->id();
              $tiret=strpos($id,"-");
              $categorie=substr($id, 0,$tiret);
              echo $categorie; 
              if ($categorie==NULL){
                 echo $id;
              }
              ?>">


  
      <?php foreach($pages->visible()->filterBy('url','*=','presentation') as $item):?>
        <a href="<?= $item->url() ?>">
          <li class="menu-item<?= r($item->isOpen(), ' is-active') ?>" id="<?php echo  $item->id() ?>">
            <?= $item->title()->html() ?>
          </li>
        </a>
      <?php endforeach ?>

      <a href="<?= url()."/programme" ?>">
        <li class="menu-item" id="liste-programme">	
          Programme
        </li>
      </a>

    <ul class="sous-menu invisible" id="programme">
       <?php foreach($pages->visible()->filterBy('url', '*=', 'programme-') as $item):?>
       <a href="<?= $item->url() ?>">
         <li class="menu-item<?= r($item->isOpen(), ' is-active') ?>">
          <?= $item->title()->html() ?>
        </li>
      </a>
    <?php endforeach ?>

  </ul>

  <a href="<?= url()."/selections" ?>">
    <li class="menu-item" id="liste-selection">
      Sélections
    </li>
  </a>

<ul class="sous-menu invisible" id="selections">
  <?php foreach($pages->visible()->filterBy('url', '*=', 'selection-') as $item):?>
  <a href="<?= $item->url() ?>">
   <li class="menu-item<?= r($item->isOpen(), ' is-active') ?>">
    <?= $item->title()->html() ?>
  </li>
</a>
<?php endforeach ?>
</ul>
      <?php 
   $ot=array($pages->visible()->filterBy('url', '*=', 'programme'), $pages->visible()->filterBy('url', '*=', 'presentation'),$pages->visible()->filterBy('url', '*=', 'selections'));

   foreach( $pages->visible()->filterBy('template','default')->not($ot) as $item):?>
   <a href="<?= $item->url() ?>">
   <li class="menu-item<?= r($item->isOpen(), ' is-active') ?>" id="<?php echo  $item->id() ?>">
     <?= $item->title()->html() ?>
   </li>
   </a>
   <?php endforeach; 

        
       foreach( $pages->visible()->filterBy('template','contact') as $item):?>
      <a href="<?= $item->url() ?>">
      <li class="menu-item<?= r($item->isOpen(), ' is-active') ?>" id="<?php echo  $item->id() ?>"> 
      <?= $item->title()->html() ?>
      </li>
      </a>
      <?php endforeach ?>

   </ul>
      <ul class='liens_ext'>
      <li>
      <a href="https://www.facebook.com/Exemplaires2017/" target="_blank"><i class="fa fa-facebook fa-lg"></i></a>
      <a href="https://www.instagram.com/Exemplaires2017/" target="_blank"><i class="fa fa-instagram fa-lg"></i></a>
      </li>
      <li><a href="https://exemplaires2015.fr/" target="_blank">Exemplaires</br>2015</a></li>
      </ul>
</nav>



<!-- fin snippets/menu.php -->