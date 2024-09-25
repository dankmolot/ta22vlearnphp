
<?php view('partials/header') ?>

<main class="container">
 
  <div class="row g-5">

    <div class="col-md-8">
      <article class="blog-post">
      <h2 class="display-5 link-body-emphasis mb-1"><?=$post->title?></h2>
      <p class="blog-post-meta">December 14, 2020 by <a href="#">Chris</a></p>

      <p><?=$post->body?></p>
    </div>
    
    <div class="col-md-4">
      <?php view('/partials/side', compact('months')); ?>
    </div>
  </div>

</main>

<?php view('partials/footer'); ?>
