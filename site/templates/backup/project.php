 <h1><?= $page->title() ?></h1>
 <a href="<?= $page->author()->toPage()->url() ?>"><?= $page->author()->toPage()->title() ?></a>

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

 <div class="course">
   <p>Kurs:
     <?php foreach ($page->course()->toPages() as $course) : ?>
       <a href="<?= $course->url() ?>"><?= $course->title() ?></a>
     <?php endforeach ?>
   </p>
 </div>

 <p>Technik: <?= $page->technology() ?></p>
 <p>Genre: <?= $page->genre() ?></p>

 <div class="supervision">
   <p>Supervision:
     <?php foreach ($page->supervision()->toPages() as $supervisor) : ?>
       <a href="<?= $supervisor->url() ?>"><?= $supervisor->title() ?></a>
     <?php endforeach ?>
   </p>
 </div>