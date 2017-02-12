<?php snippet('header') ?>

<!-- home.php -->

<div id='container'>


   <div class='rubrique' id="<?php echo $page->id(); ?>">

      <h1><?php echo $page->title()->html() ?></h1>

      <form action="<?php echo $page->url() ?>" method="POST">
         <label>Adresse mail*</label>
         <input class="entree"<?php if ($form->error('email')): ?> class="error"<?php endif; ?> name="email" type="email" value="<?php echo $form->old('email') ?>">

         <label>Nom</label>
         <input class="entree"<?php if ($form->error('name')): ?> class="error"<?php endif; ?> name="name" type="text" value="<?php echo $form->old('name') ?>">

         <label>Message*</label>
         <textarea class="entree" id="message" <?php if ($form->error('message')): ?> class="error"<?php endif; ?> name="message" type="text"><?php echo $form->old('message') ?></textarea>

         <?php echo csrf_field() ?>
         <?php echo honeypot_field() ?>
         <input id="envoi" type="submit" value="Envoyer">
         <p>*Champs obligatoire</p>
      </form>
      <?php if ($form->success()): ?>
      <p id="answer">Merci de votre message. Nous tachons de vous répondre au plus vite!</p>
      <?php else: ?>
      <?php snippet('uniform/errors', ['form' => $form]) ?>
      <?php endif; ?>

<!--      <?= $page->text()->kirbytext() ?>-->
   </div>
   <?php /*snippet('bookmosaic')*/ ?>
</div>


<!-- fin home.php -->

<?php snippet('footer') ?>