<?php include 'includes/header.php'; ?>


<section class="hero">
  <div class="hero-content">
    <h1>Spaces That <span>Inspire</span></h1>
    <p>Custom kitchens, bathrooms, and cabinetry designed with precision and elegance.</p>
    <a href="<?php echo BASE_URL; ?>pages/kitchens.php" class="btn-primary">Explore Our Work</a>
  </div>
</section>

<section class="before-after-carousel">
  <div class="container">
    <h2>Before & After</h2>

    <div class="carousel">

      <button class="prev">&#10094;</button>

      <div class="carousel-track">
        <img src="<?php echo BASE_URL; ?>images/before-after/ba-01.jpg" class="active">
        <img src="<?php echo BASE_URL; ?>images/before-after/ba-02.jpg">
        <img src="<?php echo BASE_URL; ?>images/before-after/ba-03.jpg">
        <img src="<?php echo BASE_URL; ?>images/before-after/ba-04.jpg">
        <img src="<?php echo BASE_URL; ?>images/before-after/ba-05.jpg">
        <img src="<?php echo BASE_URL; ?>images/before-after/ba-06.jpg">
        <img src="<?php echo BASE_URL; ?>images/before-after/ba-07.jpg">
        <img src="<?php echo BASE_URL; ?>images/before-after/ba-08.jpg">
        <img src="<?php echo BASE_URL; ?>images/before-after/ba-09.jpg">
        <img src="<?php echo BASE_URL; ?>images/before-after/ba-10.jpg">
        <img src="<?php echo BASE_URL; ?>images/before-after/ba-11.jpg">
      </div>

      <button class="next">&#10095;</button>

    </div>
  </div>
</section>



<section class="services">
  <div class="container">

   <a href="<?php echo BASE_URL; ?>pages/kitchens.php" class="service">
  <h2>Kitchens</h2>
  <p>Luxury kitchens designed for functionality and beauty.</p>
  <span>View Projects →</span>
  </a>


  <a href="<?php echo BASE_URL; ?>pages/bathrooms.php" class="service">
     <h2>Bathrooms</h2>
      <p>Modern spa-like bathrooms with premium finishes.</p>
    <span>View Projects →</span>
  </a>

  <a href="<?php echo BASE_URL; ?>pages/cabinets.php" class="service">
    <h2>Cabinetry</h2>
      <p>Custom storage solutions tailored to your space.</p>
    <span>View Projects →</span>
  </a>
  <a href="<?php echo BASE_URL; ?>pages/flooring.php" class="service">
    <h2>Flooring</h2>
      <p>Premium tile and flooring solutions that elevate every room.</p>
    <span>View Projects →</span>
  </a>

  </div>
</section>


<script src="<?php echo BASE_URL; ?>js/main.js"></script>


<?php include 'includes/footer.php'; ?>
