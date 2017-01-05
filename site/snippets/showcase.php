<?php

$selection = page('selection')->children()->visible();

/*

The $limit parameter can be passed to this snippet to
display only a specified amount of projects:

```
<?php snippet('showcase', ['limit' => 3]) ?>
```

Learn more about snippets and parameters at:
https://getkirby.com/docs/templates/snippets

*/

if(isset($limit)) $selection = $selection->limit($limit);

?>

<ul class="showcase grid gutter-1">

  <?php foreach($selection as $sel): ?>

    <li class="showcase-item column">
        <a href="<?= $project->url() ?>" class="showcase-link">
          <?php if($image = $sel->images()->sortBy('sort', 'asc')->first()): $thumb = $image->crop(600, 600); ?>
            <img src="<?= $thumb->url() ?>" alt="Thumbnail for <?= $project->title()->html() ?>" class="showcase-image" />
          <?php endif ?>
          <div class="showcase-caption">
            <h3 class="showcase-title"><?= $sel->title()->html() ?></h3>
          </div>
        </a>
    </li>

  <?php endforeach ?>

</ul>