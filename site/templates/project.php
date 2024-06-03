<?php snippet("header") ?>

<h1><?= $page->title() ?></h1>

<?php if($page->videos()->isNotEmpty()): ?>
  <?php foreach($page->videos() as $video): ?>
    <div class="video-wrapper">
      <p class="play-btn">Play</p>
      <video autoplay muted height="500" width="500">
        <source src="<?= $video->url() ?>" type="video/mp4">
      </video>
    </div>
  <?php endforeach ?>
<?php endif ?>

<?php snippet("footer") ?>