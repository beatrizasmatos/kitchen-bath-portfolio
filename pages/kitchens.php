<?php include '../includes/header.php'; ?>


<section class="page-hero">
  <div class="container">
    <h1>Kitchens</h1>
    <p>Custom kitchen projects designed with elegance, functionality, and precision.</p>
  </div>
</section>
<section class="gallery">
  <div class="container gallery-grid">

<?php
$projects = glob("../images/kitchens/*", GLOB_ONLYDIR);

foreach ($projects as $project) {

    $images = glob($project . "/*.jpg");

 foreach ($images as $img) {

    $img_url = str_replace("../", "/portifolio/", $img);

    echo '
    <div class="gallery-item">
        <img src="'.$img_url.'" alt="Kitchen Project">
    </div>
    ';
}
}
?>

  </div>
</section>

<?php include '../includes/footer.php'; ?>
