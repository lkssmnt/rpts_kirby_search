<?php snippet("header") ?>
<h1>Search</h1>

<?php
  $query = get('q');
  $searchResults = $site->search($query, "title");
?>

<div class="projects-table">
  <?php foreach($searchResults as $project): ?>
    <a href="<?= $project->url() ?>" class="project-row">
      <p><?= $project->title() ?></p>
    </a>
  <?php endforeach ?>
</div>

<?php snippet("footer") ?>