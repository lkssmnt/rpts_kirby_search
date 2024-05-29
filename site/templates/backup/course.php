<h1><?= $page->title() ?></h1>

<div class="images">
  <?php foreach ($page->gallery()->toFiles() as $image) : ?>
    <img src="<?= $image->url() ?>">
  <?php endforeach ?>
</div>

<hr>

<div class="text">
  <?= $page->text()->kirbytext() ?>
</div>

<hr>

<div class="leitung">
  <p>Leitung:
    <?php foreach ($page->leitung()->toPages() as $leitung) : ?>
      <a href="<?= $leitung->url() ?>"><?= $leitung->title() ?></a>
    <?php endforeach ?>
  </p>
</div>

<div class="teilnehmende">
  <p>Teilnehmende:
    <?php foreach ($page->teilnehmende()->toPages() as $teilnehmendeperson) : ?>
      <a href="<?= $teilnehmendeperson->url() ?>"><?= $teilnehmendeperson->title() ?></a>
    <?php endforeach ?>
  </p>
</div>