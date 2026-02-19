<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);
    $service = htmlspecialchars($_POST['service']);
    $message = htmlspecialchars($_POST['message']);

    $to = "info@elegantekitchenbath.com"; // email cliente
    $subject = "New Website Contact - Elegante Kitchen & Bath";

    $body = "
Name: $name

Email: $email

Phone: $phone

Service: $service

Message:
$message
";

    $headers = "From: $email";

    mail($to, $subject, $body, $headers);

    $success = true;
}
?>


<!-- HEADER -->
<?php include '../includes/header.php'; ?>

<!-- HERO -->
<section class="page-hero">
  <div class="container">
    <h1>Let’s Create Something Exceptional</h1>
    <p>
      Tell us about your project. Our team will contact you to schedule
      a consultation and bring your vision to life.
    </p>
  </div>
</section>

<section class="contact-section">
  <div class="container contact-grid">

    <div class="contact-info">
      <h2>Contact Information</h2>
      <p><strong>Phone:</strong> (772) 206-5745</p>
      <p><strong>Email:</strong> elegante.kb@gmail.com</p>
      <p><strong>Location:</strong> 6725 S US Hwy 1
Port St. Lucie,Florida, USA</p>
    </div>

    <div class="contact-form">
      <h2>Send Us a Message</h2>

      <?php if (isset($success)) : ?>
        <p style="color:green; margin-bottom:15px;">
          Message sent successfully!
        </p>
      <?php endif; ?>

      <form method="POST" action="contact.php">

        <input type="text" name="name" placeholder="Full Name" required>
        <input type="email" name="email" placeholder="Email Address" required>
        <input type="text" name="phone" placeholder="Phone Number">

        <select name="service" required>
          <option value="">Select a Service</option>
          <option value="pages/Kitchen">Kitchen</option>
          <option value="pages/Bathroom">Bathroom</option>    
          <option value="pages/Cabinetry">Cabinetry</option>
          <option value="pages/Flooring">Flooring</option>
        </select>

        <textarea name="message" placeholder="Tell us about your project" required></textarea>

        <button type="submit">Send Message</button>

      </form>
    </div>

  </div>
</section>


<?php include '../includes/footer.php'; ?>

