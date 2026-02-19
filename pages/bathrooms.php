
<?php include '../includes/header.php'; ?>



<section class="page-hero">
  <div class="container">
    <h1>Bathrooms</h1>
    <p>
      Luxury bathroom renovations crafted with sophistication, comfort,
      and premium materials designed to elevate your everyday routine.
    </p>
  </div>
</section>


<section class="gallery">
  <div class="container gallery-grid">

<?php
$projects = glob("../images/bathrooms/*", GLOB_ONLYDIR);

foreach ($projects as $project) {

    $images = glob($project . "/*.jpg");

    foreach ($images as $img) {

        $img_url = str_replace("../", "/portifolio/", $img);

        echo '
        <div class="gallery-item">
            <img src="'.$img_url.'" alt="Bathrooms Project">
        </div>
        ';
    }
}
?>
  </div>
</section>

<?php include '../includes/footer.php'; ?>


