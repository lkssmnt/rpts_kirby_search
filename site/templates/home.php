<?php snippet("header") ?>

<?php
  $projects = $site->find("projects")->children();
  $searchedProjects = $projects->search("EXPO", "title|text");
?>

<h1><?= $page->title() ?></h1>

<!-- PHP Form Submission -->
<?php /*
<form id="search-form" action="/search" method="GET">
  <input id="search-input" type="text" name="q" placeholder="search">
  <button type="submit">Search</button>
  </form>
  */ ?>

<!-- JavaScript Fetch Search -->
<input id="search-input" type="text" name="q" placeholder="search">


<div class="results-table">

</div>

<div class="projects-table">c
  <?php foreach($projects as $project): ?>
    <a href="<?= $project->url() ?>" class="project-row">
      <p><?= $project->title() ?></p>
    </a>
  <?php endforeach ?>
</div>

<?php snippet("footer") ?>