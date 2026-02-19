<?php include '../includes/header.php'; ?>


<section class="page-hero">
  <div class="container">
    <h1>Flooring</h1>
    <p>
      Premium flooring installations combining durability, beauty,
      and expert craftsmanship to transform your interiors.
    </p>
  </div>
</section>


<section class="gallery">
  <div class="container gallery-grid">
<?php
$projects = glob("../images/flooring/*", GLOB_ONLYDIR);

foreach ($projects as $project) {

    $images = glob($project . "/*.jpg");

    foreach ($images as $img) {

        $img_url = str_replace("../", "/portifolio/", $img);

        echo '
        <div class="gallery-item">
            <img src="'.$img_url.'" alt="Flooring Project">
        </div>
        ';
    }
}
?>
  </div>
</section>


<?php include '../includes/footer.php'; ?>

