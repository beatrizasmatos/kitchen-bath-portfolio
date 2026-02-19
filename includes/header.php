
<?php
if (!defined('BASE_URL')) {
    define('BASE_URL', '/portifolio/');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Elegante Kitchen & Bath</title>
<!-- FAVICON -->
<link rel="icon" type="image/png" sizes="96x96" href="<?php echo BASE_URL; ?>images/favicon/favicon-96x96.png">
<link rel="icon" type="image/x-icon" href="<?php echo BASE_URL; ?>images/favicon/favicon.ico">

<!-- Apple / iPhone -->
<link rel="apple-touch-icon" href="<?php echo BASE_URL; ?>images/favicon/apple-touch-icon.png">

<!-- PWA -->
<link rel="manifest" href="<?php echo BASE_URL; ?>images/favicon/site.webmanifest">

<meta name="theme-color" content="#1f2f4a">
<link rel="stylesheet" href="<?php echo BASE_URL; ?>css/style.css">
<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@600&family=Inter:wght@400;500&display=swap" rel="stylesheet">
</head>

<body>
  
<header>

  <div class="container nav-container">

    <img src="<?php echo BASE_URL; ?>images/logo.png" alt="Logo" class="logo">

    <button class="menu-toggle">☰</button>

    <nav class="menu">
      <a href="<?php echo BASE_URL; ?>index.php">Home</a>
      <a href="<?php echo BASE_URL; ?>pages/kitchens.php">Kitchens</a>
      <a href="<?php echo BASE_URL; ?>pages/bathrooms.php">Bathrooms</a>
      <a href="<?php echo BASE_URL; ?>pages/cabinets.php">Cabinetry</a>
      <a href="<?php echo BASE_URL; ?>pages/flooring.php">Flooring</a>
      <a href="<?php echo BASE_URL; ?>pages/contact.php">Contact</a>
    </nav>

  </div>
</header>