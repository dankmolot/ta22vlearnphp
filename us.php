<?php 
$months = ['January', 'February', 'March'];
$posts = [
  ['title' => 'post5', 'text' => 'some body 5'],
  ['title' => 'post6', 'text' => 'some body 6'],
  ['title' => 'post7', 'text' => 'some body 7'],
  ['title' => 'post8', 'text' => 'some body 8'],
]
?>
<?php include 'partials/header.php'; ?>

<main class="container">
 
<?php include 'partials/hero.php'; ?>
<?php include 'partials/featured.php'; ?>
  <div class="row g-5">
    <div class="col-md-8">
      <?php include 'partials/posts.php'; ?>
    </div>

    <div class="col-md-4">
      <?php include 'partials/side.php'; ?>
    </div>
  </div>

</main>

<?php include 'partials/footer.php'; ?>