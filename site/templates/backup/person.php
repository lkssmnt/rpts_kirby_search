<h1><?= $page->title() ?></h1>

<p>Email: <?= $page->email() ?></p>
<p>Instagram: <?= $page->instagram() ?></p>

<?php $projects = $site->find("projects")->children()->filter(function ($child) use ($page) {
  return $child->author()->toPage()->is($page);
}) ?>

<h2>Projekte:</h2>
<?php foreach ($projects as $project) : ?>
  <a href="<?= $project->url() ?>">
    <p><?= $project->title() ?></p>
  </a>
<?php endforeach ?>