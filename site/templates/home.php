<?php snippet("header") ?>

<?php
  $projects = $site->find("projekte")->children();
  $searchedProjects = $projects->search("EXPO", "title|text");
?>

<h1 style="margin-bottom: 1rem;"><?= $site->title() ?></h1>

</div>

<div class="projects-table">
  <div class="table-header-row">
    <p class="sort-btn sort-projects-btn" data-table-id="projects-table" data-sort-type="project"><span class="arrow-span">⬇️</span> Projekt</p>
    <p class="sort-btn sort-courses-btn" data-table-id="projects-table" data-sort-type="course"><span class="arrow-span hidden">⬇️</span> Kurs</p>
  </div>
  <div id="projects-table" class="projects-list" data-sort="project" data-sort-direction="desc">
    <?php foreach($projects as $project): ?>
      <div id="<?= $project->slug() ?>" class="table-row">
        <a class="project-title" href="<?= $project->url() ?>"><?= $project->slug() ?></a>      
        <a class="course-title" href="<?= $project->course()->isNotEmpty() ? $project->course()->toPage()->url() : '' ?>"><?= $project->course()->isNotEmpty() ? $project->course()->toPage()->title() : 'HIER GIBTS KEINEN KURS' ?></a>
      </div>
    <?php endforeach ?>
  </div>
</div>

<?php snippet("footer") ?>