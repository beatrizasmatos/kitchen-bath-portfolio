<?php include '../includes/header.php'; ?>

<section class="page-hero">
  <div class="container">
    <h1>Cabinetry</h1>
    <p>
      Custom cabinetry solutions tailored to maximize organization,
      functionality, and refined aesthetics for every space in your home.
    </p>
  </div>
</section>

<section class="gallery">
  <div class="container gallery-grid">


<?php
$projects = glob("../images/cabinetry/*", GLOB_ONLYDIR);

foreach ($projects as $project) {

    $images = glob($project . "/*.jpg");

    foreach ($images as $img) {

        $img_url = str_replace("../", "/portifolio/", $img);

        echo '
        <div class="gallery-item">
            <img src="'.$img_url.'" alt="Cabinets Project">
        </div>
        ';
    }
}
?>
  </div>
</section>

<?php include '../includes/footer.php'; ?>


